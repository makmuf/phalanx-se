<?php

return [

    'name'      => 'Phalanx Standard Edition',

    'env'       => 'dev',

    'debug'     => true,

    'providers' => [
        Phalanx\Config\ConfigServiceProvider::class,
        Phalanx\Log\MonoLogServiceProvider::class,
        Phalanx\BCryptHasher\BCryptHasherServiceProvider::class,
        Phalanx\Filesystem\FilesystemServiceProvider::class,
        Phalanx\DB\DBServiceProvider::class
    ],

    'http'      => [
        Phalanx\Http\KernelServiceProvider::class,
        Phalanx\Router\RouterServiceProvider::class,
        Phalanx\Template\TwigServiceProvider::class,
        App\Http\HttpServiceProvider::class
    ],

    'console'   => [
        PhalanxSDK\PhalanxSDKServiceProvider::class,
        App\Console\ConsoleServiceProvider::class
    ],

    'key'       => 'this is not secure'
];
