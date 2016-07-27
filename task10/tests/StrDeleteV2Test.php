<?php
/**
 * StrDeleteV2Test File Doc Comment
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

use GodLis\Task10\StrDeleteV2;

/**
 * Class StrDeleteV2
 *
 * @category Testing
 * @package  GodLis\Task10\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class StrDeleteV2Test extends \PHPUnit_Framework_TestCase
{
    /**
     * StrDeleteV2Test variable
     *
     * @var
     */
    protected $tmp;

    /**
     * StrDeleteV2Test function
     *
     * @return \testing
     */
    public function testStrDeleteV2()
    {
        $config['str'] = "  iuy p";
        $this->tmp = new StrDeleteV2($config);
        $this->assertEquals("iuyp", $this->tmp->strDeleteV2());
        $this->tmp = null;

        $config['str'] = "       ";
        $this->tmp = new StrDeleteV2($config);
        $this->assertEquals("", $this->tmp->strDeleteV2());
        $this->tmp = null;

        $config['str'] = "";
        $this->tmp = new StrDeleteV2($config);
        $this->assertEquals("", $this->tmp->strDeleteV2());
        $this->tmp = null;
    }
}
