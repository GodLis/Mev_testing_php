<?php

namespace GodLis\Task4\Tests;

use GodLis\Task4\UserFunction;

class UserFunctionTest extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new UserFunction();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testUserFunction()
    {
        $arr1 = [23,8,30,21];
        $arr2 = [26,5,23,30];
        $result = $this->tmp->userFunction($arr1, $arr2);
        $this->assertEquals([23,30], $result);

        $arr1 = [23,8,30,21,30];
        $arr2 = [26,5,23,30];
        $result = $this->tmp->userFunction($arr1, $arr2);
        $this->assertEquals([23,30,30], $result);

        $arr1 = [23,8,30,21];
        $arr2 = [26,5,23,30,8];
        $result = $this->tmp->userFunction($arr1, $arr2);
        $this->assertEquals([23,30,8], $result);        

        $arr1 = [];
        $arr2 = [26,5,28,24,20,18,26,23,11,22,16,20,22,19,12,12,29,19,26,24,27];
        $result = $this->tmp->userFunction($arr1, $arr2);
        $this->assertFalse(false, $result);
    }
}
