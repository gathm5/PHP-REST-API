<?php

header('Access-Control-Allow-Origin: *');

// Use an autoloader!
require "libs/Bootstrap.php";
require "libs/Controller.php";
require "libs/Model.php";
require "libs/View.php";

// Library
require "libs/Session.php";
require "libs/Database.php";

// Configuration
require 'config/paths.php';
require 'config/database.php';

// Bootstrapping
$bootstrap = new Bootstrap();