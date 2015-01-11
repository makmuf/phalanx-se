<?php

return [

    'pools' => [

        'my-pool' => [
            'adapter' => 'memcached',
            'host'    => '127.0.0.1',
            'port'    => '1227'
        ],

        // More pool definition here

    ],

    'default' => 'my-pool'

];
