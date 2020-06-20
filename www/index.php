<?php
echo '<pre>';
//var_dump($_SERVER);
$parts = explode('/', $_SERVER['REQUEST_URI']);
//var_dump($parts);
$controllerName = $parts[1];
$actionName = $parts[2];
$controllerFileName = ucfirst($controllerName);
include "../App/Controller/$controllerFileName.php";
//var_dump($controllerFileName);
$controllerObj = new $controllerName();
//var_dump($controllerObj);
$actionFunkName = $actionName . 'Action';

if (!method_exists($controllerObj, $actionFunkName)) {
    echo '404';
    die;
}

$tpl = include '../App//Templates/' . $controllerFileName .  '/' . $actionName . '.phtml';
include '../Base/View.php';
$view = new View();
$controllerObj->view = $view;
$controllerObj->$actionFunkName();
$view->render($tpl);
