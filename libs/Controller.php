<?php

class Controller
{
    public static $DESKTOPVIEW = 0, $MOBILEVIEW = 1, $TABLETVIEW = 2, $SERVERVIEW = 3;

    function __construct($view = null)
    {
        $this->view = new DesktopView();
    }

    public function loadModel($name)
    {
        $path = "models/$name-model.php";
        if (file_exists($path)) {
            require "$path";
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}