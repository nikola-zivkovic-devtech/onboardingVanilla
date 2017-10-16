<?php

namespace NZ\Managers;

use NZ\Controllers\Welcome;
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
     * @param $url
     */
    public function add($url)
    {
        $this->routes[] = $url;
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
            if(preg_match("#^$route$#", '/' . $urlSegments[0])) {
                $match = true;

                if(empty($urlSegments[0]) || $urlSegments[0] == 'index') {
                    $this->loadWelcomePage();
                } else {
                    if ($this->classExists($urlSegments[0])) {
                        $this->loadController($urlSegments);
                    } else {
                        $this->loadError('Action not possible.');
                    }
                }
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

    private function loadWelcomePage()
    {
        new Welcome();
    }

    private function classExists($className)
    {
        return file_exists(__DIR__ . '/../Controllers/' . $className . '.php');
    }

    private function loadController($urlSegments)
    {
        $className = NamespacePaths::CONTROLLERS_PATH . $urlSegments[0];

        try {
            if(isset($urlSegments[1])) {
                new $className($urlSegments[1]);
            } else {
                $funriturePiece = new $className();
                $funriturePiece->printName();
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
