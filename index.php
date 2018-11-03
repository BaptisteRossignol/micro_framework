<?php

use Classe as classe; 

require 'classe/Autoloader.php';
classe\Autoloader::Register();

include 'Request.php';
include 'Controller/ControllerAbstract.php';
include 'Controller/IndexController.php';
include 'Controller/PersoController.php';
include 'ContainerInterface.php';
include 'Container.php';

$container = new Container();
$db = new classe\Database();
$container->add('database', $db);

$request = Request::getInstance();

$controller = $request->get('controller', 'index');
$className = UCFirst($controller).'Controller';

$rendered = false;

if (file_exists(sprintf('Controller/%s.php', $className))) {
    if (class_exists($className)) {
        $controller = new $className(null, $container->get('database'));
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
