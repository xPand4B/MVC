<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core;

use App\Core\Bootstrap\EnvironmentVariables;
use App\Core\Routing\Request;
use App\Core\Routing\Router;

class Application
{
    /**
     * The application version.
     * 
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * The environment path.
     *
     * @var string
     */
    private $environmentPath = __DIR__.'/../../';

    /**
     * The environment file to load during bootstrapping.
     *
     * @var string
     */
    private $environmentFile = '.env';

    /**
     * The Router
     *
     * @var App\Core\Routing\Router
     */
    private $router;

    /**
     * Creates a new Application instance.
     */
    public function __construct()
    {
        $this->bootstrapSelf();
    }

    /**
     * Bootstrap the application.
     *
     * @return void
     */
    private function bootstrapSelf(): void
    {
        EnvironmentVariables::load($this->environmentPath, $this->environmentFile);
        $this->router = new Router(new Request);
    }

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public static function version(): string
    {
        return static::VERSION;
    }

    /**
     * Get the router instance.
     *
     * @return App\Core\Routing\Router
     */
    public function Router()
    {
        return $this->router;
    }
}
