<?php
/**
 * ArrayAdderV2Test File Doc Comment
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

use GodLis\Task1\ArrayAdderV2;

/**
 * Class ArrayAdderV2Test
 *
 * @category Testing
 * @package  GodLis\Task1\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ArrayAdderV2Test extends \PHPUnit_Framework_TestCase
{
    /**
     * ArrayAdderV2Test variable
     *
     * @var
     */
    protected $tmp;

    /**
     * ArrayAdderV2Test function
     *
     * @return \testing
     */
    public function testArrayAdder()
    {
        $config['arr'] = [1,2,3,4,0,0,0,0,0,10];
        $this->tmp = new ArrayAdderV2($config);
        $result = $this->tmp->ArrayAdder();
        $this->assertEquals(20, $result);
        $this->tmp = null;

        $config['arr'] = [5];
        $this->tmp = new ArrayAdderV2($config);
        $result = $this->tmp->ArrayAdder();
        $this->assertEquals(5, $result);
        $this->tmp = null;

        $config['arr'] = [];
        $this->tmp = new ArrayAdderV2($config);
        $result = $this->tmp->ArrayAdder();
        $this->assertEquals(0, $result);
        $this->tmp = null;
    }
}
