<?php
error_reporting(E_ALL ^ E_NOTICE);
define("WEBROOT", "http://localhost/base/Pour%20M.WANE/projetQuizz/");
require_once "libs/Router.php";
$router = new Router();
$router->getRoute();
