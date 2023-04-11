<?php

namespace Phpcourse\Myproject\Classes;

use Phpcourse\Myproject\Classes\Controllers\NotFoundController;
use Phpcourse\Myproject\Classes\Router\Router;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class StartApplication
{
    use DebugTrait;
    private string $URI;
    private object $routerData;
    const CONTROLLER = 1;
    const ACTION = 2;

    // приватний статичний екземпляр класу
    private static ?StartApplication $instance = null;

    // приватний конструктор
    private function __construct(readonly Router $router, string $URI)
    {
        $this->URI = $URI;
        $this->routerData = $router;
        self::debugConsole($this->URI);
    }

    // публічний статичний метод для отримання єдиного екземпляра класу
    public static function getInstance(Router $router, string $URI): StartApplication
    {
        if (self::$instance === null) {
            self::$instance = new StartApplication($router, $URI);
        }
        return self::$instance;
    }

    public function run(): void {
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('logs/main.log', Level::Debug));

        try{ // спробуємо знайти збіг нашого URI з патерном роутера
            $match = $this->routerData->findRoute($this->URI);
            $controller = $match[self::CONTROLLER];
            $action = $match[self::ACTION];
            (new $controller)->$action();

            // DEBUG
            self::debugDump($match);
            self::debugDump($controller);
            self::debugDump($action);
            $log->info('OK');
            //
        }catch(\Throwable $e){
            $log->error($e->getMessage() . $e->getCode() . " URI=$this->URI");
            (new NotFoundController)->showErrorPage(
                $e->getMessage(),
                $e->getCode(),
            );
        }
    }
}