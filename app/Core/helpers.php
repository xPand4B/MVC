<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

use App\Core\View\ViewLoader;
use App\Core\Translation\Translator;

if(! \function_exists('route')){

    /**
     * Route to the given url.
     * 
     * @param string $name
     * 
     * @return string
     */
    function route(string $name = null)
    {
        if(empty($name) || is_null($name)){
            return;
        }

        $newRoute = $_SERVER['BASE'] . $name;

        return $newRoute;
    }
}

if(! \function_exists('trans')){
    /**
     * Translate the given message.
     *
     * @method App\Core\Translation\Translator::GetTranslation|string
     * @param string $message
     *
     * @return string
     */
    function trans(string $message)
    {
        if(is_null($message) || empty($message)){
            return "";
        }
        
        return Translator::GetTranslation($message);
    }
}

if(! \function_exists('view')){
    /**
     * Include view, depending on call inside specific controller.
     * 
     * @method App\Core\View\ViewLoader::Render
     * @param string  $view [View Name]
     * @param array $data [Optional: Data to parse inside view]
     * 
     * @return Jenssegers\Blade\Blade
     */
    function view(string $view, array $data = [])
    {
        ViewLoader::Render($view, $data);
    }
}
