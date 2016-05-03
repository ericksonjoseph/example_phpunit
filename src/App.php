<?php

namespace App;

use \App\Complex as Complex;

class App {

    public function index(){

        $Math = new \App\Libs\Math();
        $Complex = new Complex();

        return $Math->add($Complex->a, $Complex->b);
    }
}

