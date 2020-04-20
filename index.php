<?php


session_start();

spl_autoload_register(function ($className){
    $fileName = str_replace("\\", "/", $className).".php";
    require_once $fileName;
});

$router = new application\components\Router();
$router->run();

