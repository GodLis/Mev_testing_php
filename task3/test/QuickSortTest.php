<?php

namespace OlechkaBrajko\Task3;

require "QuickSort.php";

/**
 * Class QuickSortTest
 * @package OlechkaBrajko\Task3
 */
class QuickSortTest extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new QuickSort();
    }

    protected function tearDown()
    {
        $this->tmp=null;
    }

    public function testQuickSort()
    {
        $arr2 = [5,3,2,1,4];
        if (!empty($arr2)) {
            $this->tmp->quickSort($arr2);
        }
        $this->assertEquals([1,2,3,4,5], $arr2);

        $arr2 = ['a', 'c', 'b'];
        if (!empty($this->tmp)) {
            $this->tmp->quickSort($arr2);
        }
        $this->assertEquals(['a', 'b', 'c'], $arr2);

    }
}

