<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

use App\Core\Config\Config;
use App\Core\View\ViewLoader;
use App\Core\Translation\Translator;

if(! function_exists('app_path')){
    /**
     * Get the application path.
     * 
     * @param string $folder
     * 
     * @return string
     */
    function app_path(string $folder = null): string
    {
        return realpath(__DIR__.'/../../' . $folder);
    }
}

if(! function_exists('collection_image')){
    /**
     * Returns an image collection path.
     * 
     * @method string public_path()
     * 
     * @param string $collectionName
     * 
     * @return string
     */
    function collection_image(string $filePath = null): ?string
    {
        if(is_null($filePath) || empty($filePath)){
            return null;
        }

        $imagePath = public_path() . '/img/collections/' . $filePath;

        if(! file_exists($imagePath)){
            return null;
        }

        return $imagePath;
    }
}

if(! function_exists('config')){
    /**
     * Get config data.
     * 
     * @method string App\Core\Config\Config::GetConfig($argument)
     * 
     * @param string $argument
     * 
     * @return mixed
     */
    function config(string $argument = null)
    {
        if(is_null($argument)){
            return;
        }

        return Config::GetConfig($argument);
    }
}

if(! function_exists('public_path')){
    /**
     * Get the public application path.
     * 
     * @method string app_path(string $folder)
     *
     * @return string
     */
    function public_path(): string
    {
        return app_path('/public');
    }
}

if(! function_exists('resource_path')){
    /**
     * Get the resource path.
     * 
     * @method string app_path(string $folder)
     * 
     * @param string $resourceName
     *
     * @return string
     */
    function resource_path(string $resourceName = null): string
    {
        return app_path('/resources/' . $resourceName);
    }
}

if(! function_exists('route')){
    /**
     * Get route to the given url.
     * 
     * @method string url(string $name, string $lang)
     * 
     * @param string $name
     * 
     * @return string
     */
    function route(string $name = null): ?string
    {
        return url($name, $_SERVER['LANG']);
    }
}

if(! function_exists('storage_path')){
    /**
     * Get the storage path.
     * 
     * @method string app_path(string $folder)
     * 
     * @param string $storageName
     *
     * @return string
     */
    function storage_path(string $storageName = null): string
    {
        return app_path('/storage/' . $storageName);
    }
}

if(! function_exists('style')){
    /**
     * Returns a stylesheet include.
     * 
     * @method string url(string $name, string $lang)
     * 
     * @param string $stylesheet
     * 
     * @return string
     */
    function style(string $stylesheet)
    {
        echo '<link media="all" type="text/css" rel="stylesheet" href="' . url('/css/' . $stylesheet) . '">';
    }
}

if(! function_exists('trans')){
    /**
     * Get translation for the given message.
     *
     * @method string App\Core\Translation\Translator::GetTranslation(string $name)
     * 
     * @param string $message
     *
     * @return string
     */
    function trans(string $message): ?string
    {
        if(is_null($message) || empty($message)){
            return null;
        }
        
        return Translator::GetTranslation($message);
    }
}

if(! function_exists('url')){
    /**
     * Get the current url.
     * 
     * @param string $name
     * @param string $lang
     * 
     * @return string
     */
    function url(string $name = null, string $lang = null): string
    {
        if(! is_null($name) && !empty($name)){
            if($name[0] != '/'){
                $name = '/' . $name;
            }
        }

        if(is_null($lang) || empty($lang)){
            return $_SERVER['BASE'].'/'.$name;
        }
        
        return $_SERVER['BASE'].'/'.$_SERVER['LANG'].$name;
    }
}

if(! function_exists('view')){
    /**
     * Include view, depending on call inside specific controller.
     * 
     * @method mixed App\Core\View\ViewLoader::Render(string $view, array $data)
     * 
     * @param string $view [View Name]
     * @param array  $data [Optional: Data to parse inside view]
     * 
     * @return void
     */
    function view(string $view = null, array $data = []): void
    {
        if(is_null($view) || empty($view)){
            echo "<br>Something went wrong: You're view doesn't exist.";
            die(1);
        }

        ViewLoader::Render($view, $data);
    }
}
