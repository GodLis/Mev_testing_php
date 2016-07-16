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
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new ArrayAdder();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testArraySum()
    {
        $result = $this->tmp->arrayAdder();
        assertEquals(10, $result);

        $result = $this->tmp->arraySum();
        assertEquals(-4, $result);

        $result = $this->tmp->arraySum();
        assertFalse(false, $result);
    }
}
