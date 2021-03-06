<?php

    // PHP Request and Response Objects
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    use \Firebase\JWT\JWT;
    
    require 'vendor/autoload.php';
    require 'database.php';
    
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
    
    
   $app->add(new \Slim\Middleware\JwtAuthentication([
       "secret" => "signingsecret",
       "cookie" => "serveknox",
       "path" => ["/dev/login/org", "/dev/login/vol"] 
    //    https://www.appelsiini.net/projects/slim-jwt-auth
    //    temporary ^^^^^ final : "secret" => getenv("JWT_SECRET")
    ]));
    
//END AUTHENTICATION    

    $app->get('/', function ($request, $response) {
        return $this->view->render($response, 'main.twig');
    });
    
    $app->get('/dev', function ($request, $response) {
        return $this->view->render($response, 'home.twig');
    });
    
    $app->get('/dev/home', function ($request, $response) {
        return $this->view->render($response, 'home.twig');
    });
    
    $app->get('/dev/about', function ($request, $response) {
        return $this->view->render($response, 'about.twig');
    });
    
    $app->get('/dev/events', function ($request, $response) use ($app, $events) {
        $response = $this->view->render($response, "events.twig", ["events" => $events]);
        return $response;
    });

    $app->get('/dev/featured', function ($request, $response) {
        return $this->view->render($response, 'featured.twig');
    });
    
    //$app->get('/dev/login', function ($request, $response) {
        //return $this->view->($response, 'login.php');
        //return $app->render('login.php');
    //});
    
    $app->get('/dev/login/org', function ($request, $response) {
        return $this->view->render($response, 'create-org-acc.twig');
    });
    
    $app->get('/dev/login/vol', function ($request, $response) {
        return $this->view->render($response, 'create-vol-acc.twig');
    });
    
    $app->get('/dev/events/det', function ($request, $response) {
        return $this->view->render($response, 'event-detail.twig');
    }); 
     
     
    
    $app->run();

?>