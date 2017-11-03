<?php

require '../Config/Config.php';

$app = new \Slim\App(["settings" => $config]);

$container = $app->getContainer();

$container['view'] = new \Slim\Views\PhpRenderer("views/");

$app->get('/', function($request, $response){
    $response = $this->view->render($response, 'home.php');
    return $response;
});
    
$app->run();