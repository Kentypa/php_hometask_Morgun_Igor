<?php

namespace Phpcourse\Myproject\Classes\Rendering;

use Latte;


class Rendering{
    public function __construct(){
        $latte = new Latte\Engine;
        $latte->setTempDirectory('/tempdir');

        $mainParams = ['name' => 'Kentik'];
        $latte->render('templates/default/index.latte', $mainParams);
    }
}
