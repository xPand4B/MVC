<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @source https://medium.com/the-andela-way/how-to-build-a-basic-server-side-routing-system-in-php-e52e613cf241
 */
namespace App\Core\Routing;

class Request
{
    /**
     * Creates a new Request instance.
     */
    function __construct()
    {
        $this->bootstrapSelf();
    }
    
    /**
     * Sets all keys in the global $_SERVER array as
     * properties of the Request class and assigns their values as well.
     *
     * @method string App\Core\Routing\Router::toCamelCase(string $string)
     * 
     * @return void
     */
    private function bootstrapSelf(): void
    {
        foreach($_SERVER as $key => $value){
            // echo '<br><br>' . $key .'<br>' . $this->{$this->toCamelCase($key)} = $value;
            $this->{$this->toCamelCase($key)} = $value;
        }
        $_SERVER['BASE'] = str_replace('/public/', '', $_SERVER['BASE']);
        
        // If no language is set and $_SERVER['REDIRECT_QUERY_STRING']) is not set
        if(empty($_SERVER['REDIRECT_QUERY_STRING'])){
            $link =  $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'] . $_SERVER['BASE'].'/'.config('app.locale');
            header('Location: ' . $link);
            die(1);
        }

        // Get Language from url
        $tmp = str_replace('url=', '', $_SERVER['REDIRECT_QUERY_STRING']);
        $_SERVER['LANG'] = explode('/', $tmp)[0];

        // If no language is set, but $_SERVER['REDIRECT_QUERY_STRING']) is available
        if(!in_array($_SERVER['LANG'], config("app.supported_locales"))){
            // Create link to the requested site
            $tmp  = str_replace('url='.$_SERVER['LANG'], '', $_SERVER['REDIRECT_QUERY_STRING']);
            $link =  $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'] . $_SERVER['BASE'].'/'.config('app.locale').'/'.$_SERVER['LANG'];
            header('Location: ' . $link);
            die(1);
        }
    }

    /**
     * Convert from snak case to camel case.
     *
     * @param string $string
     * 
     * @return string
     */
    private function toCamelCase(string $string): string
    {
        $result = strtolower($string);

        preg_match_all('/_[a-z]/', $result, $matches);

        foreach($matches[0] as $match){
            $c = str_replace('_', '', strtoupper($match));
            $result = str_replace($match, $c, $result);
        }
        return $result;
    }


    // public function getBody()
    // {
    //     if($this->requestMethod === "GET"){
    //         return;
    //     }

    //     if ($this->requestMethod == "POST"){
    //         $result = [];

    //         foreach($_POST as $key => $value){
    //             $result[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
    //         }

    //         return $result;
    //     }

    //     return;
    // }
}
