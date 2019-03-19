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
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of the application. This value is used to place
    | the application's name in a notification or any other location as
    | required by the application.
    |
    */

    'name' => env('APP_NAME'),

    /*
    |--------------------------------------------------------------------------
    | Supported application locales
    |--------------------------------------------------------------------------
    |
    | This part holds all supported languages. These languages can be found
    | inside the "resources/lang/" directory.
    |
    */

    'supported_locales' => [
        'en', 'de',
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Locale
    |--------------------------------------------------------------------------
    |
    | The (fallback) locale determines the locale to use. You may change
    | the value to correspond to any of the "supported_locales" and
    | language folders that are provided through the application.
    |
    */

    'locale' => 'de',
];
