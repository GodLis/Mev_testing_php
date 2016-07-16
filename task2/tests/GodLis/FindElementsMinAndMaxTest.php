<?php

namespace GodLis\Task2\Tests;

use GodLis\Task2\FindMinAndMaxElements;

/**
 * Class MinAndMaxFindElementsTest
 * @package OlechkaBrajko\Task2
 */
class FindMinAndMaxElementsTest extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new FindMinAndMaxElements();
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
        
        $arr_test = [];
        $result = $this->tmp->seachMinElement($arr_test);
        $this->assertFalse(false, $result);
    }

    public function testSeachMaxElement()
    {
        $arr_test = [1, 2, 3, 4, 0, 0, 0, 0, 0, 40];
        $result = $this->tmp->seachMaxElement($arr_test);
        $this->assertEquals(40, $result);
        
        $arr_test = [100, 234567];
        $result = $this->tmp->seachMaxElement($arr_test);
        $this->assertEquals(234567, $result);
        
        $arr_test = [];
        $result = $this->tmp->seachMinElement($arr_test);
        $this->assertFalse(false, $result);
    }
}
