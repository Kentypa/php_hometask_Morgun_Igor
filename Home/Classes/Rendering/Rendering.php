<?php

/**
 * Class Rendering
 * @package Phpcourse\Myproject\Classes\Rendering
 */

namespace Phpcourse\Myproject\Classes\Rendering;

<<<<<<< HEAD
use Latte\Engine;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;
use Phpcourse\Myproject\Classes\Traits\MonologTrait;

class Rendering{
    use DebugTrait, MonologTrait; // використовуємо трейти для налагодження та логування
    public function __construct(array $data){

        self::debugConsole($data); // викликаємо метод debugConsole() з трейту DebugTrait
        self::debugLog($data); // викликаємо метод debugLog() з трейту MonologTrait

        $latte = new Engine(); // створюємо об'єкт класу Latte\Engine

        $latte->render('templates/default/index.latte', $data); // відображаємо шаблон

=======
use Latte;


class Rendering{
    public function __construct(){
        $latte = new Latte\Engine;
        $latte->setTempDirectory('/tempdir');

        $mainParams = ['name' => 'Kentik'];
        $latte->render('templates/default/index.latte', $mainParams);
>>>>>>> fe83195d1ba034e0494bc52861a4111d2a7677e3
    }
}
