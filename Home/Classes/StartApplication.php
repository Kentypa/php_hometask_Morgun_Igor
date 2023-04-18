<?php

/**
 * Class StartApplication
 * @package Phpcourse\Myproject\Classes
 */

namespace Phpcourse\Myproject\Classes; // простір імен

use Phpcourse\Myproject\Classes\Controllers\NotFoundController;
use Phpcourse\Myproject\Classes\Router\Router;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;
<<<<<<< HEAD
use Phpcourse\Myproject\Classes\Traits\MonologTrait;
=======

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
>>>>>>> fe83195d1ba034e0494bc52861a4111d2a7677e3

class StartApplication
{
    use DebugTrait, MonologTrait; // використовуємо трейти
    private string $URI;
<<<<<<< HEAD

    private object $routerData; // об'єкт класу Router буде записаний в цю змінну

    const CONTROLLER = 1; // константа для індексу масиву з контролером
    const ACTION = 2; // константа для індексу масиву з екшеном

    private static ?StartApplication $instance = null; // Статична змінна для зберігання екземпляру класу

=======
    private object $routerData;
    const CONTROLLER = 1;
    const ACTION = 2;

    // приватний статичний екземпляр класу
    private static ?StartApplication $instance = null;

    // приватний конструктор
>>>>>>> fe83195d1ba034e0494bc52861a4111d2a7677e3
    private function __construct(readonly Router $router, string $URI)
    {
        $this->URI = $URI; // записуємо URI в змінну
        $this->routerData = $router; //
        self::debugConsole($this->URI); // викликаємо метод debugConsole() з трейту DebugTrait
        self::debugLog($this->URI); //
    }

    public static function getInstance(Router $router, string $URI): StartApplication
    {
        if (self::$instance === null) {
            self::$instance = new StartApplication($router, $URI);
        }
        return self::$instance; // повертаємо екземпляр класу
    }

<<<<<<< HEAD
    public function run(): void{
        try{ // спробуємо знайти збіг нашого URI з патерном роутера
            $match = $this->routerData->findRoute($this->URI); // записуємо масив з контролером та екшеном в змінну
            $controller = $match[self::CONTROLLER]; // записуємо контролер в змінну
            $action = $match[self::ACTION]; // записуємо екшен в змінну
            (new $controller)->$action(); // створюємо об'єкт класу контролера та викликаємо метод екшену
=======
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
>>>>>>> fe83195d1ba034e0494bc52861a4111d2a7677e3
        }catch(\Throwable $e){
            $log->error($e->getMessage() . $e->getCode() . " URI=$this->URI");
            (new NotFoundController)->showErrorPage(
                $e->getMessage(), // повідомлення про помилку
                $e->getCode() // код помилки
            );
        }
    }
}