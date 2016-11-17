<?php

    // PHP Request and Response Objects
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    
    require 'vendor/autoload.php';

    // Main Instance
    $app = new \Slim\App(array(
    'debug' => true));
    
    $app->get('/', function ($request, $response) {
       return $this->view->render($response, 'example.html');
    })->setName('home');
    
    
    //Will Remove At Production
    
    $configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        ],
    ];
    $c = new \Slim\Container($configuration);
    $app = new \Slim\App($c);
    
    //End of Production Removal
    
    //Run App
    $app->run();
?>