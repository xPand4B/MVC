<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core\View;

use Jenssegers\Blade\Blade;

class ViewLoader
{
    /**
     * Include view, depending on call inside specific controller.
     * 
     * @param string  $view [View Name]
     * @param array $data [Optional: Data to parse inside view]
     * 
     * @return Jenssegers\Blade\Blade
     */
    public static function Render(string $view, array $data = [])
    {
        $blade = new Blade(
            resource_path('/views'),
            storage_path('/views'),
        );

        echo $blade->render($view, $data);
    }
}
