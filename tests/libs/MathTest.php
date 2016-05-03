<?php

namespace App\Libs;

require_once './vendor/autoload.php';

class MathTest extends \PHPUnit_Framework_TestCase {

    public $out;

    public function setUp()
    {
        // Setup a handle for output
        $this->out = fopen('php://stdout', 'w');
    }

    /**
     * testAdd
     * @dataProvider providerTestAdd
     *
     * @access public
     * @return void
     */
    public function testAdd($a, $b, $expected)
    {
        $msg = "$a + $b = $expected ?\n\r";
        fwrite($this->out, $msg);

        $result = \App\Libs\Math::add($a, $b);
        $this->assertTrue($result === $expected);
    }

    /**
     * providerTestAdd
     *
     * @access public
     * @return void
     */
    public function providerTestAdd()
    {
        return array(
            [1,2,3],
            [2,3,5],
        );
    }

}
