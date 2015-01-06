<?php

return [

    'name'   => '',

    'env'    => 'dev',

    'debug'  => true,

    'http'   => [
        Phalanx\Config\ConfigServiceProvider::class,
        Phalanx\Log\MonoLogServiceProvider::class,
        Phalanx\BCryptHasher\BCryptHasherServiceProvider::class,
        Phalanx\Filesystem\FilesystemServiceProvider::class,
        Phalanx\DB\DBServiceProvider::class
    ],

    'console' => [
        PhalanxSDK\PhalanxSDKServiceProvider::class,
    ],

    'key'     => 'this is not secure'
];
