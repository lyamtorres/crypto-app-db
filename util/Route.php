<?php

namespace Util;

use Util\View;
use Configuration\Config;

class Route
{
    public function __construct()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']); // Break the url into an array
        $nbParam = count($url);

        $namespace = Config::$default_namespace;
        $controller = $url[$nbParam - 2];
        $method = $url[$nbParam - 1]; // TO DO: Find how to get the method
        $class = $namespace."\\".$controller;

        if (! class_exists($class)) {
            return $this->not_found();
        }

        if (! method_exists($class, $method)) {
            return $this->not_found();
        }

        $classInstance = new $class;

        call_user_func_array(array($classInstance, $method), $args=[]);
    }

    public function not_found()
    {
        $namespace = Config::$default_namespace;
        $controller = Config::$default_class_name;
        $method = Config::$default_function_name;
        $class = $namespace."\\".$controller;


        $classInstance = new $class;
        call_user_func_array(array($classInstance, $method), $args=[]);

        $view = new View();
        return $view->render('404');
    }
}