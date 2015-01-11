<?php

return [

    'channels' => [

        'system' => [
            'stream' => [
                'path'  => __DIR__ . '/../tmp/log/system.log',
                'level' => Psr\Log\LogLevel::ERROR
            ],

            'daily' => [
                'path'  => __DIR__ . '/../tmp/log',
                'level' => Psr\Log\LogLevel::INFO
            ]
        ],

        // More channel here

    ],

    'default' => 'system'

];
