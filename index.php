<?php

use Classes as classes; 
require 'classes/Autoloader.php';
classes\Autoloader::Register();
include 'Request.php';
include 'Controller/ControllerAbstract.php';
include 'Controller/IndexController.php';

// Nouveau Controller
include 'Controller/PersoController.php';

include 'ContainerInterface.php';
include 'Container.php';
$container = new Container();
$db = new classes\Database();
$container->add('database', $db);

$request = Request::getInstance();

$controller = $request->get('controller', 'index');
$className = UCFirst($controller).'Controller';

$rendered = false;

if (file_exists(sprintf('Controller/%s.php', $className))) {
    if (class_exists($className)) {
        $controller = new $className();
        $action = $request->get('action', 'index');
        if ($action && method_exists($controller, $action)) {
            $controller->$action();
            $rendered = true;
        }
    }
}

if (!$rendered) {
    $controller = new IndexController();
    $controller->notfound();
}
