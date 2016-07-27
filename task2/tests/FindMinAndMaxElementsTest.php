<?php
/**
 * FindMinAndMaxElementsTest File Doc Comment
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

use GodLis\Task2\FindMinAndMaxElements;

/**
 * Class FindMinAndMaxElementsTest
 *
 * @category Testing
 * @package  GodLis\Task2\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class FindMinAndMaxElementsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * FindMinAndMaxElementsTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * FindMinAndMaxElementsTest function
     *
     * @return \testing
     */
    public function testSeachMinElement()
    {
        $config['arr'] = [1, 2, 3, 4, 0, 0, 0, 0, 0, 40];
        $this->tmp = new FindMinAndMaxElements($config);
        $result = $this->tmp->seachMinElement();
        $this->assertEquals(0, $result);
        $this->tmp = null;

        $config['arr'] = [-100, -2, 3, 4, 0, 0, 0, 0, 0, -40];
        $this->tmp = new FindMinAndMaxElements($config);
        $result = $this->tmp->seachMinElement();
        $this->assertEquals(-100, $result);
        $this->tmp = null;

        $config['arr'] = [0];
        $this->tmp = new FindMinAndMaxElements($config);
        $result = $this->tmp->seachMinElement();
        $this->assertEquals(0, $result);
        $this->tmp = null;

        $config['arr'] = [];
        $this->tmp = new FindMinAndMaxElements($config);
        $result = $this->tmp->seachMinElement();
        $this->assertEquals(false, $result);
        $this->tmp = null;
    }

    /**
     * FindMinAndMaxElementsTest function
     *
     * @return \testing
     */
    public function testSeachMaxElement()
    {
        $config['arr'] = [1, 2, 3, 4, 0, 0, 0, 0, 0, 40];
        $this->tmp = new FindMinAndMaxElements($config);
        $result = $this->tmp->seachMaxElement();
        $this->assertEquals(40, $result);
        $this->tmp = null;

        $config['arr'] = [];
        $this->tmp = new FindMinAndMaxElements($config);
        $result = $this->tmp->seachMaxElement();
        $this->assertEquals(false, $result);
        $this->tmp = null;
    }
}
