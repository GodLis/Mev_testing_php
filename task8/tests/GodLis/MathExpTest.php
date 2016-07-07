<?php

namespace GodLis\Tests;

class MathExpTest extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new MathExp();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testArraySum()
    {
        $var1 = 2;
        $var2 = 3;
        $var4 = 4;
        $var3 = 3;
        $result = $this->tmp->mathExp($var1, $var2, $var3, $var4);
        $this->assertEquals('11.5', $result);

        $var1 = 0;
        $var2 = 1;
        $var4 = 1;
        $var3 = 0;
        $result = $this->tmp->mathExp($var1, $var2, $var3, $var4);
        $this->assertEquals(false, $result);

        

    }
}
