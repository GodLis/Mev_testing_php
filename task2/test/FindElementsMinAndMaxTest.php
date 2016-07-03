<?php

namespace OlechkaBrajko\Task2;

require "FindElementsMinAndMax.php";

/**
 * Class FindElementsMinAndMaxTest
 * @package OlechkaBrajko\Task2
 */
class FindElementsMinAndMaxTest extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new FindElementsMinAndMax();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testSeachMinElement()
    {
        $arr_test = [1, 2, 3, 4, 0, 0, 0, 0, 0, 40];
        $result = $this->tmp->seachMinElement($arr_test);
        $this->assertEquals(0, $result);
        $arr_test = [-100, -2, 3, 4, 0, 0, 0, 0, 0, -40];
        $result = $this->tmp->seachMinElement($arr_test);
        $this->assertEquals(-100, $result);
        $arr_test = [0];
        $result = $this->tmp->seachMinElement($arr_test);
        $this->assertEquals(0, $result);

    }

    public function testSeachMaxElement()
    {
        $arr_test = [1, 2, 3, 4, 0, 0, 0, 0, 0, 40];
        $result = $this->tmp->seachMaxElement($arr_test);
        $this->assertEquals(40, $result);
        $arr_test = [100, 234567];
        $result = $this->tmp->seachMaxElement($arr_test);
        $this->assertEquals(234567, $result);
    }
}
