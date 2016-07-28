<?php
/**
 * DataClassTest File Doc Comment
 *
 * This file is a part of a task12
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task12\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task12\Tests;

use GodLis\Task12\DataClass;

/**
 * Class DataClassTest
 *
 * @category Testing
 * @package  GodLis\Task12\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class DataClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * DataClassTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * DataClassTest function
     *
     * @return \testing
     */
    public function testData()
    {
        $datetime1 = new \DateTime('1996-01-19');
        $datetime2 = new \DateTime('1996-01-23');
        $this->tmp = new DataClass();
        $this->assertEquals('+4 days', $this->tmp->data($datetime1, $datetime2)->format('%R%a days'));
        $this->tmp = null;

        $datetime1 = new \DateTime('1996-01-23');
        $datetime2 = new \DateTime('1996-01-18');
        $this->tmp = new DataClass();
        $this->assertEquals('-5 days', $this->tmp->data($datetime1, $datetime2)->format('%R%a days'));
        $this->tmp = null;

        $datetime1 = new \DateTime('1996-01-19');
        $datetime2 = new \DateTime('1996-01-19');
        $this->tmp = new DataClass();
        $this->assertEquals('+0 days', $this->tmp->data($datetime1, $datetime2)->format('%R%a days'));
        $this->tmp = null;
    }
}
