<?php
    session_start();

    require_once __DIR__.'/../../vendor/autoload.php';


    use Phpcourse\Myproject\Classes\Controllers\HomeController;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\StartApplication;

    $router = new Router();

    $router->addRoute('/', HomeController::class, 'index');
    $router->addRoute('/home', HomeController::class, 'index');

    $app = StartApplication::getInstance($router, $_SERVER['REQUEST_URI']);
    $app->run();