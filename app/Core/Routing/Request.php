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
     * @uses App\Core\Routing\Router::toCamelCase
     * 
     * @return void
     */
    private function bootstrapSelf(): void
    {
        foreach($_SERVER as $key => $value){
            // echo '<br><br>' . $key .'<br>' . $this->{$this->toCamelCase($key)} = $value;
            $this->{$this->toCamelCase($key)} = $value;
        }
        $_SERVER['BASE'] = \str_replace('/public/', '', $_SERVER['BASE']);
    }

    /**
     * Convert from snak case to camel case.
     *
     * @param string $string
     * 
     * @return string
     */
    private function toCamelCase($string): string
    {
        $result = \strtolower($string);

        \preg_match_all('/_[a-z]/', $result, $matches);

        foreach($matches[0] as $match){
            $c = \str_replace('_', '', \strtoupper($match));
            $result = \str_replace($match, $c, $result);
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
