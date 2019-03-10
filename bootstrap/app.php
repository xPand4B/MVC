<?php
/**
 * @package   xPand4B/Portfolio
 * @author    Eric Heinzl <eric.heinzl@gmail.com>
 * @copyright 2019 Eric Heinzl
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
|--------------------------------------------------------------------------
| Create the Application
|--------------------------------------------------------------------------
*/

$app = new App\Core\Application;

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so it can separate the building of the instances
| from the actual running of the application.
|
*/

return $app;
