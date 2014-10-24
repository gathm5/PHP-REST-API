<?php

class View
{

    function __construct()
    {

    }

    public function render($name)
    {
        require "views/$name.php";
    }

}

class DesktopView extends View
{

    function __construct()
    {
        parent::__construct();
        $this->path = 'views/DESKTOP/';
    }

    public function render($name)
    {
        require_once 'views/DESKTOP/TEMPLATES/HEADER-HTML.php.inc';
        require "views/DESKTOP/$name.php";
        require_once 'views/DESKTOP/TEMPLATES/END-BODY-FOOTER.php.inc';
    }

}

class MobileView extends View
{

    function __construct()
    {
        parent::__construct();
        $this->path = 'views/MOBILE/';
    }

    public function render($name)
    {
        require "views/MOBILE/$name.php";
    }

}

class TabletView extends View
{

    function __construct()
    {
        parent::__construct();
        $this->path = 'views/TABLET/';
    }

    public function render($name)
    {
        require "views/TABLET/$name.php";
    }

}

class ServerView extends View
{

    function __construct()
    {
        parent::__construct();
        $this->path = 'views/SERVER/';
    }

    public function render($name)
    {
        require "views/SERVER/$name.php";
    }

}