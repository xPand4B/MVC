<?php
/**
 * @package   xPand4B/Portfolio
 * @author    Eric Heinzl <eric.heinzl@gmail.com>
 * @copyright 2019 Eric Heinzl
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| the application.This part is needed so that I don't have to worry
| about manual loading any classes later on.
|
*/

require_once __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| This will create an instance, bootstraps the application and gets it
| ready for use, then it will load up this application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Setup Routes
|--------------------------------------------------------------------------
|
| This will set the router to an usable variable and implement all routes
| that where set inside the web.php file.
|
*/

$route = $app->Router();

require_once __DIR__.'/../routes/web.php';