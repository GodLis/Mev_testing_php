<?php
/**
 * SortArrayInBuiltFunctionTest File Doc Comment
 *
 * This file is a part of a task3
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task3
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
namespace GodLis\Task3\Tests;

use GodLis\Task3\SortArrayInBuiltFunction;
/**
 * Class SortArrayInBuiltFunctionTest
 *
 * @category Testing
 * @package  GodLis\Task3\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class SortArrayInBuiltFunctionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * SortArrayInBuiltFunctionTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * SortArrayInBuiltFunctionTest function
     *
     * @return \testing
     */
    public function testSortArrayInBuiltFunction()
    {
        $config['arr'] = [5,3,2,1,4];
        $this->tmp = new SortArrayInBuiltFunction($config);
        $this->assertEquals([1,2,3,4,5], $this->tmp->sortArrayInBuiltFunction());
        $this->tmp = null;

        $config['arr'] = ['a', 'c', 'b'];
        $this->tmp = new SortArrayInBuiltFunction($config);
        $this->assertEquals(['a', 'b', 'c'], $this->tmp->sortArrayInBuiltFunction());
        $this->tmp = null;
    }
}
