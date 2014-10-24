<?php

class Bootstrap
{

    function __construct()
    {
        $url = $_GET["url"];
        if (!isset($_GET["url"]) || strrpos($_GET["url"], "404")) {
            $url = 'index';
        }
        $url = array_filter(explode("/", $url));
        if (!file_exists("controllers/$url[0].php")) {
            require "controllers/error.php";
            $controller = new Error();
            return false;
        }
        require "controllers/$url[0].php";
        $controller = new $url[0](Controller::$DESKTOPVIEW);
        $controller->loadModel($url[0]);
        if (isset($url[2]) && method_exists($controller, $url[1])) {
            $controller->{$url[1]}($url[2]);
        } else if (isset($url[1]) && method_exists($controller, $url[1])) {
            $controller->{$url[1]}();
        } else {
            $controller->index();
        }
    }

}