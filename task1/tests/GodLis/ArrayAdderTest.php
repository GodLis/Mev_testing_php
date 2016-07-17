<?php
/**
 * ArrayAdderTest File Doc Comment
 *
 * This file is a part of a task1
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task1\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
namespace GodLis\Task1\Tests;

use GodLis\Task1\ArrayAdder;

/**
 * Class ArrayAdderTest
 *
 * @category Testing
 * @package  GodLis\Task1\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ArrayAdderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * ArrayAdderTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * ArrayAdderTest function
     *
     * @return \testing
     */
    public function testArrayAdder()
    {
        $config['arr'] =  [1, 2, 3, 4];
        $this->tmp = new ArrayAdder($config);
        $result = $this->tmp->arrayAdder();
        $this->assertEquals(10, $result);
        $this->tmp = null;

        $config['arr'] =  [-1, 0, -3];
        $this->tmp = new ArrayAdder($config);
        $result = $this->tmp->arrayAdder();
        $this->assertEquals(-4, $result);
        $this->tmp = null;

        $config['arr'] =  [];
        $this->tmp = new ArrayAdder($config);
        $result = $this->tmp->arrayAdder();
        $this->assertEquals(false, $result);
        $this->tmp = null;
    }
}
