<?php
// We've created an index.php file
// In the following two lines, we are calling the two dependacies within the Slim which we are going to use of later 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';// This is compulsory for our framework to work, but don't worry too much about how it works

$app = new \Slim\App;// We create an object of the Slim framework main app

$app->get('./', function($request,$response,$args){
   $response->write('Hello World');
})

$app->run();

