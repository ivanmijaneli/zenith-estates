<?php

namespace Core;


use Exception;
use RuntimeException;

class Router
{

    protected array $routes
        = [
            'GET'  => [],
            'POST' => [],
        ];

    public static function load($routes): Router
    {
        $router = new self;

        require $routes;

        return $router;
    }

    public function get($uri, $controller): void
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller): void
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->callAction(...
                explode('@', $this->routes[$method][$uri]));
        }

        throw new RuntimeException('No route defined.');
    }

    public function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if ( ! method_exists($controller, $action)) {
            throw new RuntimeException("No action {$action} defined on {$controller}");
        }

        return $controller->$action();
    }

}