<?php
/**
 * QuickSortTest File Doc Comment
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

use GodLis\Task3\QuickSort;

/**
 * Class QuickSortTest
 *
 * @category Testing
 * @package  GodLis\Task3\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class QuickSortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * QuickSortTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * QuickSortTest function
     *
     * @return \testing
     */
    public function testQuickSort()
    {
        $config['arr'] = [5,3,2,1,4];
        $this->tmp = new QuickSort($config);
        $this->assertEquals([1,2,3,4,5], $this->tmp->quickSort());
        $this->tmp = null;

        $config['arr'] = ['a', 'c', 'b'];
        $this->tmp = new QuickSort($config);
        $this->assertEquals(['a', 'b', 'c'], $this->tmp->quickSort());
        $this->tmp = null;
    }
}

