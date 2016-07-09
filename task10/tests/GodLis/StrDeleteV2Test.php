<?php

namespace GodLis\Tests;

use GodLis\StrDeleteV2;

class StrDeleteV2Test extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new StrDeleteV2();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testStrDeleteV2()
    {
        $str = "  iuy p  1 ";
        $result = $this->tmp->strDeleteV2($str);
        $this->assertEquals("iuyp1", $result);

        $str = "      ";
        $result = $this->tmp->strDeleteV2($str);
        $this->assertEquals("", $result);

        $str = "";
        $result = $this->tmp->strDeleteV2($str);
        $this->assertEquals("", $result);
    }
}
