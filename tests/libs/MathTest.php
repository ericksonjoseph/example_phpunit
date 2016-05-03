<?php

namespace App;

require_once './vendor/autoload.php';

class MathTest extends \PHPUnit_Framework_TestCase {

    public function testAdd()
    {
        $result = \App\Libs\Math::add(2, 3);
        $this->assertTrue($result === 5);
    }

}
