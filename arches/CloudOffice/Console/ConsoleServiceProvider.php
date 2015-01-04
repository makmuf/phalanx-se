<?php namespace CloudOffice\Console;

use CloudOffice\Console\Commands\Hello;
use Phalanx\BCryptHasher\Command\Generate;
use Phalanx\Console\Kernel;
use Phalanx\Console\KernelServiceProvider;
use Phalanx\Contracts\Console\ConsoleKernel;

class ConsoleServiceProvider extends KernelServiceProvider {

    public function boot()
    {
        /** @var Kernel $kernel */
        $kernel = $this->phalanx->make(ConsoleKernel::class);

        $kernel->registerCommands([
            Generate::class,
            Hello::class
        ]);
    }

}
