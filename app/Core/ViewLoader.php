<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core;

use Jenssegers\Blade\Blade;

trait ViewLoader
{
    /**
     * Include view, depending on call inside specific controller.
     * 
     * @param string  $view [View Name]
     * @param array $data [Optional: Data to parse inside view]
     * 
     * @return Jenssegers\Blade\Blade
     */
    public static function view(string $view, array $data = [])
    {
        $blade = new Blade(
            __DIR__.'/../../resources/views',
            __DIR__.'/../../storage/views'
        );

        echo $blade->render($view, $data);
    }
}
