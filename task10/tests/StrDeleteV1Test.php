<?php
/**
 * StrDeleteV1Test File Doc Comment
 *
 * This file is a part of a task10
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task10\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task10\Tests;

use GodLis\Task10\StrDeleteV1;

/**
 * Class StrDeleteV1
 *
 * @category Testing
 * @package  GodLis\Task10\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class StrDeleteV1Test extends \PHPUnit_Framework_TestCase
{
    /**
     * StrDeleteV1Test variable
     *
     * @var
     */
    protected $tmp;

    /**
     * StrDeleteV1Test function
     *
     * @return \testing
     */
    public function testStrDeleteV1()
    {
        $config['str'] = "  iuy p";
        $this->tmp = new StrDeleteV1($config);
        $this->assertEquals("iuyp", $this->tmp->strDeleteV1());
        $this->tmp = null;

        $config['str'] = "       ";
        $this->tmp = new StrDeleteV1($config);
        $this->assertEquals("", $this->tmp->strDeleteV1());
        $this->tmp = null;

        $config['str'] = "";
        $this->tmp = new StrDeleteV1($config);
        $this->assertEquals("", $this->tmp->strDeleteV1());
        $this->tmp = null;
    }
}
