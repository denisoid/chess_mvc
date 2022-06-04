<?php

use Denis\Chess\Core\Bootstrap;

require 'vendor/autoload.php';

Bootstrap::init(include 'config.inc.php');


$controller = 'position';
$action = 'index';

$params = $_GET;


foreach (['controller', 'action'] as $key) {

    if (array_key_exists($key, $_GET)) {
        ${$key} = $params[$key];
        unset($params[$key]);
    }
}


$controllerClass = '\Denis\Chess\Controller\\' . $controller . 'Controller';

if (!class_exists($controllerClass)) {
    throw new \Exception('Controller ' . $controller . ' not found');
}

$Controller = new $controllerClass;

if (!method_exists($Controller, $action)) {
    throw new \Exception('Action ' . $action . ' not found in controller ' . $controller);
}

$Controller->$action($params);
