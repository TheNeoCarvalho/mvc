<?php

require '../config/config.php';

$app = new \Slim\App;

$app->get('/', function (){
    include 'views/home.php';
});

$app->run();

