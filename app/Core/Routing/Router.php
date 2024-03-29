<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @source https://medium.com/the-andela-way/how-to-build-a-basic-server-side-routing-system-in-php-e52e613cf241
 */

namespace App\Core\Routing;

class Router
{
    /**
     * The request.
     *
     * @var App\Core\Routing\Request
     */
    private $request;

    /**
     * The supported Http methods.
     *
     * @var array
     */
    private $supportedMethods = [
        'GET', 'POST'
    ];

    /**
     * Counts all available routes.
     *
     * @var integer
     */
    private $routeCount = 0;

    /**
     * Creates a new Router instance.
     *
     * @param App\Core\Routing\Request $request
     */
    function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * This method is used for every class call.
     * 
     * Example:
     *      $router->GET('/some/route', 'someController@someMethod)
     *      $router->GET('/some/route', 'some.blade.template)
     *      The "GET" part would be $name, everything inside the brackets $arguments.    
     *
     * @param string $name
     * @param array $arguments
     * 
     * @return void
     */
    function __call($name, $arguments): void
    {
        list($route, $args) = $arguments;
        
        if(!in_array(strtoupper($name), $this->supportedMethods)){
            $this->invalidMethodHandler();
        }
        
        $key = '/' . $_SERVER['LANG'] . $this->formatRoute($route);

        $this->{strtolower($name)}[$key] = $args;
        
        $this->routeCount++;
    }
        
    /**
     * Removes trailing forward slashes from the right of the route.
     *
     * @param string $route
     * @return void
     */
    private function formatRoute($route)
    {
        $route  = str_replace($_SERVER['BASE'], '', $route);
        
        if ($route === ''){
            return '/';
        }
        
        if($route == '/' . $_SERVER['LANG']){
            $link =  $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'] . $_SERVER['BASE'].'/'.$_SERVER['LANG'].'/';
            header('Location: ' . $link);
            die(1);
        }
        
        return $route;
    }

    /**
     * If a request is invalid
     *
     * @return void
     */
    private function invalidMethodHandler(): void
    {
        header("{$this->request->serverProtocol} 405 Method Not Allowed");
    }

    /**
     * If a request can't be found.
     *
     * @return void
     */
    private function defaultRequestHandler():void
    {
        header("{$this->request->serverProtocol} 404 Not Found");
    }

    /**
     * Resolves a route.
     * 
     * @return mixed
     */
    function resolve()
    {
        $methodDictionary = $this->{strtolower($this->request->requestMethod)};
        $formatedRoute    = $this->formatRoute($this->request->requestUri);

        // echo '<br>MethodDictionary: ';
        // print_r($methodDictionary);
        // echo '<br>';
        
        // echo '<br>FormatedRoute: ';
        // print_r($formatedRoute);
        // echo '<br>';

        // Check if route exists
        if(!array_key_exists($formatedRoute, $methodDictionary)){
            $this->defaultRequestHandler();
            return;
        }

        // View call?
        if(!strpos($methodDictionary[$formatedRoute], '@')){
            return view($methodDictionary[$formatedRoute]);
        }

        // Controller Call
        $args = $methodDictionary[$formatedRoute];

        if(empty($args) || sizeof(explode('@', $args), 0) != 2){
            $this->invalidMethodHandler();
            return;
        }

        $controller = explode('@', $args)[0];
        $method     = explode('@', $args)[1];

        if(!file_exists(__DIR__.'/../../Controller/'.$controller.'.php')){
            echo "Controller doesn't exist >> 'App\Controller\\" . $controller."'";
            die(1);
        }

        $temp = 'App\Controller\\'.$controller;
        $controller = new $temp;

        if(!method_exists($controller, $method)){
            $this->invalidMethodHandler();
            return;
        }

        call_user_func_array([$controller, $method], [$this->request]);
    }

    /**
     * The destuctor (method, that will run at the end)
     * 
     * @link http://php.net/manual/en/language.oop5.magic.php
     */
    public function __destruct()
    {
        if($this->routeCount != 0){
            $this->resolve();
        }else{
            $this->invalidMethodHandler();
        }
    }
}
