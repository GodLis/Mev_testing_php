<?php
/**
 * ArrayIntersectFunctionTest File Doc Comment
 *
 * This file is a part of a task4
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task4
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task4\Tests;

use GodLis\Task4\ArrayIntersectFunction;
/**
 * Class ArrayIntersectFunctionTest
 *
 * @category Testing
 * @package  GodLis\Task3\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ArrayIntersectFunctionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * ArrayIntersectFunctionTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * ArrayIntersectFunctionTest function
     *
     * @return \testing
     */
    public function testArrayIntersectFunction()
    {
        $config['array1'] = [23,8,30,21];
        $config['array2'] = [26,5,23,30];
        $this->tmp = new ArrayIntersectFunction($config);
        $this->assertEquals([23,30], $this->tmp->arrayIntersectFunction());
        $this->tmp = null;

        $config['array1'] = [23,8,30,21,30];
        $config['array2'] = [26,5,23,30];
        $this->tmp = new ArrayIntersectFunction($config);
        $this->assertEquals([23,30,30], $this->tmp->arrayIntersectFunction());
        $this->tmp = null;

        $config['array1'] = [23,8,30,21];
        $config['array2'] = [26,5,23,30,8];
        $this->tmp = new ArrayIntersectFunction($config);
        $this->assertEquals([23,30,8], $this->tmp->arrayIntersectFunction());
        $this->tmp = null;

        $config['array1'] = [];
        $config['array2'] = [26,5,28,24,20,18,26,23,11,22,16,20,22,19,12,12,29,19,26,24,27];
        $this->tmp = new ArrayIntersectFunction($config);
        $this->assertFalse(false, $this->tmp->arrayIntersectFunction());
        $this->tmp = null;
    }
}
