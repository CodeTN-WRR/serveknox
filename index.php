<?php

    // PHP Request and Response Objects
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    
    require 'vendor/autoload.php';
    //require 'database.php';
    
    $app = new \Slim\App(array(
    'debug' => true));
    
    $container = $app->getContainer();

    $container['view'] = function ($container) {
        $view = new \Slim\Views\Twig('views', [
            'cache' => false
        ]);
        
        // Instantiate and add Slim specific extension
        $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
        $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    
        return $view;
    };
    
    
//AUTHENTICATION    
    
/*   $app->add(new \Slim\Middleware\JwtAuthentication([
       "secret" => "signingsecret",
       "path" => "/dev"
    //    https://www.appelsiini.net/projects/slim-jwt-auth
    //    temporary ^^^^^ final : "secret" => getenv("JWT_SECRET")
    ]));
*/    
    
//END AUTHENTICATION    

    $app->get('/', function ($request, $response) {
        return $this->view->render($response, 'first-time-visitor.html');
    })->setName('profile');
    
    
    $app->get('/org', function ($request, $response) {
        return $this->view->render($response, 'org-home.html');
    });
    
    $app->get('/dev', function ($request, $response) {
        return $this->view->render($response, 'main.twig');
    });
    
    $app->get('/dev/home', function ($request, $response) {
        return $this->view->render($response, 'home.twig');
    });
    
    $app->get('/dev/login', function ($request, $response) {
        return $this->view->render($response, 'login.php');
    });
    
    $app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'profile.html', [
        'name' => $args['name']
    ]);
    })->setName('profile');
    
    $app->run();

?>