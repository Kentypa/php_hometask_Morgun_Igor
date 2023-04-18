<?php

/**
 * Class NewsController
 * @package Phpcourse\Myproject\Classes\Controllers
 */

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class NewsController {
    
    public function index() : void {
        $news = array(
            array(
                'title' => 'Dobrie den everybody',
                'text' => 'London is Capital of America!',
                'date' => '2077-32-00'
            ),
            array(
                'title' => 'I want pizza',
                'text' => 'I really want it',
                'date' => '2023-08-23'
            ),
            array(
                'title' => 'I drink koffa',
                'text' => 'With croussan',
                'date' => '2023-04-18'
            )
        );
        $data = ['news' => $news, 'page' => 'news'];
        new Rendering($data);
    }
}
?>