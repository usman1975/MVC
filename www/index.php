<?php
echo '<pre>';
var_dump($_SERVER);
$parts = explode('/', $_SERVER['REQUEST_URI']);
var_dump($parts);
//$controllerName = $parts[1];
//$actionName = $parts[2];
//
//$controllerFileName = ucfirst($controllerName);
//include "../App/Controller/$controllerFileName.php";
//var_dump($controllerFileName);
//$controllerObj = new ControllerName();