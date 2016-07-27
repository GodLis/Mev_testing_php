<?php
/**
 * FindMinAndMaxElementsV2Test File Doc Comment
 *
 * This file is a part of a task2
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task2\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
namespace GodLis\Task2\Tests;

use GodLis\Task2\FindMinAndMaxElementsV2;

/**
 * Class FindMinAndMaxElementsV2Test
 *
 * @category Testing
 * @package  GodLis\Task2\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class FindElementsMinAndMaxV2Test extends \PHPUnit_Framework_TestCase
{
    /**
     * FindMinAndMaxElementsV2Test variable
     *
     * @var
     */
    protected $tmp;

    /**
     * FindMinAndMaxElementsV2Test function
     *
     * @return \testing
     */
    public function testSeachMinElement()
    {
        $config['arr'] = [10, 2, 3, 4, -3, 101, 6, 5, 8, 40];
        $this->tmp = new FindMinAndMaxElementsV2($config);
        $result = $this->tmp->seachMinElement();
        $this->assertEquals(-3, $result);
        $this->tmp = null;

        $config['arr'] = [];
        $this->tmp = new FindMinAndMaxElementsV2($config);
        $result = $this->tmp->seachMinElement();
        $this->assertEquals(false, $result);
        $this->tmp = null;
    }

    /**
     * FindMinAndMaxElementsV2Test function
     *
     * @return \testing
     */
    public function testSeachMaxElement()
    {
        $config['arr'] = [10, 2, 3, 4, -3, 101, 6, 5, 8, 40];
        $this->tmp = new FindMinAndMaxElementsV2($config);
        $result = $this->tmp->seachMaxElement();
        $this->assertEquals(101, $result);
        $this->tmp = null;

        $config['arr'] = [];
        $this->tmp = new FindMinAndMaxElementsV2($config);
        $result = $this->tmp->seachMaxElement();
        $this->assertEquals(false, $result);
        $this->tmp = null;
    }
}
