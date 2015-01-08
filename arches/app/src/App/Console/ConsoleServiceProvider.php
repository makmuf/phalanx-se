<?php namespace App\Console;

use App\Console\Commands\Hello;
use Phalanx\BCryptHasher\Command\Generate;
use Phalanx\Booting\EarlyBootServiceProvider;
use Phalanx\Console\Kernel;
use Phalanx\Contracts\Console\ConsoleKernel;

class ConsoleServiceProvider extends EarlyBootServiceProvider {

    public function boot()
    {
        /** @var Kernel $kernel */
        $kernel = $this->phalanx->make(ConsoleKernel::class);

        $kernel->groupPipeline([
            $this->phalanx->make(Generate::class),
            $this->phalanx->make(Hello::class),
        ]);
    }

}
