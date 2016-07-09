<?php

namespace GodLis\Tests;

use GodLis\StrDeleteV1;

class StrDeleteV1Test extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new StrDeleteV1();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testStrDeleteV1()
    {
        $str = "  iuy p";
        $result = $this->tmp->strDeleteV1($str);
        $this->assertEquals("iuyp", $result);

        $str = "      ";
        $result = $this->tmp->strDeleteV1($str);
        $this->assertEquals("", $result);

        $str = "";
        $result = $this->tmp->strDeleteV1($str);
        $this->assertEquals("", $result);
    }
}
