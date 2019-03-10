<?php
/**
 * @package   xPand4B/Portfolio
 * @author    Eric Heinzl <eric.heinzl@gmail.com>
 * @copyright 2019 Eric Heinzl
 */

/*
|--------------------------------------------------------------------------
| Create routes
|--------------------------------------------------------------------------
|
| How requests will be defined:
|   $route->get('/some/route', 'someController@someMethod');
|   $route->get('/some/route', 'some.blade.template');
|
*/

// Homepage - goes to "HomeController" class, "index" method
$route->get('/',                'HomeController@index');

// Imprint - goes to "HomeController" class, "imprint" method
$route->get('/imprint',         'HomeController@imprint');

// Privacy Policy - goes directly to the view rendering process
//      (view template under "PAGES/PRIVACY-POLICY.blade.php")
$route->get('/privacy-policy',  'pages.privacy-policy');
