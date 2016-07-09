<?php

namespace GodLis\Tests;

use GodLis\SumElementsOfArray;

/**
 * Class SumElementsOfArrayTest
 * @package GodLis\Tests
 */
class SumElementsOfArrayTest extends \PHPUnit_Framework_TestCase
{
    private $tmp;
    
    protected function setUp()
    {
        $this->tmp = new SumElementsOfArray();
    }
    
    protected function tearDown()
    {
        $this->tmp = null;
    }
    
    public function testArraySum()
    {
        $arr_test = [1,2,3,4,0,0,0,0,0,0];
        $result = $this->tmp->arraySum($arr_test);
        $this->assertEquals(10, $result);

        $arr_test = [-4];
        $result = $this->tmp->arraySum($arr_test);
        $this->assertEquals(-4, $result);
        
        $arr_test = [];
        $result = $this->tmp->arraySum($arr_test);
        $this->assertFalse(false, $result);
    }
}
