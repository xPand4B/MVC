<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    */
    'connection' => [
        'mysql' => [
            'driver'   => 'mysql',
            'host'     => env('DB_HOST'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
        ]
    ],
];
