<?php

const ENVIRONMENT = 'development';

if (file_exists("../vendor/autoload.php")) {
    require_once "../vendor/autoload.php";
}

use Util\Route;

$route = new Route();