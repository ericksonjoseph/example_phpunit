<?php

namespace App;

use \App\Complex as Complex;

class App {

    public function index(){

        $Math = new \App\Libs\Math();

        echo $Math->add(1, 2);
    }
}

