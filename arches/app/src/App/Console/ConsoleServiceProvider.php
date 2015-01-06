<?php namespace App\Console;

use App\Console\Commands\Hello;
use Phalanx\BCryptHasher\Command\Generate;
use Phalanx\Console\Kernel;
use Phalanx\Console\KernelServiceProvider;
use Phalanx\Contracts\Console\ConsoleKernel;

class ConsoleServiceProvider extends KernelServiceProvider {

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
