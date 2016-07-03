<?php

namespace OlechkaBrajko\Task2;

require "FindElementsMinAndMaxV2.php";

class FindElementsMinAndMaxV2Test extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new FindElementsMinAndMaxV2();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testSeachMinElement()
    {
        $arr_test = [10, 2, 3, 4, -3, 101, 6, 5, 8, 40];
        $result = $this->tmp->seachMinElement($arr_test);
        $this->assertEquals(-3, $result);
    }

    public function testSeachMaxElement()
    {
        $arr_test = [10, 2, 3, 4, -3, 101, 6, 101, 8, 40];
        $result = $this->tmp->seachMaxElement($arr_test);
        $this->assertEquals(101, $result);
    }
}
