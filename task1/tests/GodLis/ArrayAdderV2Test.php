<?php

namespace GodLis\Task1\Tests;

use GodLis\Task1\SumElementsOfArrayV2;

/**
 * Class ArrayAdderV2Test
 * @package GodLis\Tests
 */
class ArrayAdderV2Test extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new SumElementsOfArrayV2();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testArraySum()
    {
        $arr_test = [1,2,3,4,0,0,0,0,0,10];
        $result = $this->tmp->arraySum($arr_test);
        $this->assertEquals(20, $result);

        $arr_test = [5];
        $result = $this->tmp->arraySum($arr_test);
        $this->assertEquals(5, $result);

        $arr_test = [];
        $result = $this->tmp->arraySum($arr_test);
        $this->assertFalse(false, $result);
    }
}
