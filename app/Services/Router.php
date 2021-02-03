<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;

class Router
{
    public $routes;
    public $request;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($uri, $callback)
    {
        $this->add('GET', $uri, $callback);
    }

    private function add($method, $uri, $callback)
    {
        $this->routes[] = [
            'method'   => $method,
            'uri'      => $uri,
            'callback' => $callback
        ];
    }

    private function search($method, $uri)
    {
        foreach ($this->routes as $route) {
            if ($method == $route['method'] && $uri == $route['uri']) {
                return $route;
            }
        }

        die('Api not found.');
    }

    public function mount()
    {
        $request     = $this->request;
        $uri         = $request->getPathInfo();
        $method      = $request->getMethod();
        $route       = $this->search($method, $uri);
        $className   = $route['callback'][0];
        $classMethod = $route['callback'][1];

        $func = "$className::$classMethod";
        return $func();
    }
}
