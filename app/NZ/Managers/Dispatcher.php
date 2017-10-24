<?php

namespace NZ\Managers;

use NZ\Controllers\ErrorMsg;
use NZ\Enums\NamespacePaths;

/**
 * Class Dispatcher
 * Stores routes and connects them to their respective handlers.
 */
class Dispatcher
{
    /**
     * @var array   Contains defined routes.
     */
    private $routes = array();

    /**
     * Adds routes to a local array.
     *
     * @param $uri
     * @param $controller
     */
    public function add($uri, $controller)
    {
        $this->routes[] = [
            'uri' =>$uri,
            'controller' => $controller
        ];
    }

    /**
     * Handles routes by pointing them to handler classes.
     *
     * @return void
     */
    public function run()
    {
        $urlSegments = $this->getParsedUrl();
        $match = false;

        foreach ($this->routes as $route) {
            if(preg_match("#^$route[uri]$#", '/' . $urlSegments[0])) {
                $match = true;
                $this->loadController($route, $urlSegments);
                break;
            }
        }

        if(!$match) {
            $this->loadError('No such action.');
        }
    }

    private function getParsedUrl()
    {
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
        return explode('/', trim($url, '/'));
    }

    private function loadController($route, $urlSegments)
    {
        try{
            $className = NamespacePaths::CONTROLLERS_PATH . $route['controller'];

            if(isset($urlSegments[1])) {
                new $className($urlSegments[1]);
            } elseif($urlSegments[0] == 'hello') {
                new $className();
            } else {
                new $className($urlSegments[0]);
            }
        } catch (\Exception $e) {
            $this->loadError($e->getMessage());
        }
    }

    private function loadError($msg)
    {
        new ErrorMsg($msg);
        return false;
    }
}
