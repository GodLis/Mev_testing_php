<?php
/**
 * PalindromV2Test File Doc Comment
 *
 * This file is a part of a task11
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task11\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task11\Tests;

use GodLis\Task11\PalindromV2;

/**
 * Class PalindromV2Test
 *
 * @category Testing
 * @package  GodLis\Task11\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class PalindromV2Test extends \PHPUnit_Framework_TestCase
{
    /**
     * PalindromV2Test variable
     *
     * @var
     */
    protected $tmp;

    /**
     * PalindromV2Test function
     *
     * @return \testing
     */
    public function testPalindromV2()
    {
        $config['word'] = "alex";
        $this->tmp = new PalindromV2($config);
        $this->assertEquals("it`s not a palindrome", $this->tmp->palindromV2());
        $this->tmp = null;

        $config['word'] = "ale";
        $this->tmp = new PalindromV2($config);
        $this->assertEquals("it`s not a palindrome", $this->tmp->palindromV2());
        $this->tmp = null;

        $config['word'] = "alikaakila";
        $this->tmp = new PalindromV2($config);
        $this->assertEquals("it`s a palindrome", $this->tmp->palindromV2());
        $this->tmp = null;

        $config['word'] = "alikakila";
        $this->tmp = new PalindromV2($config);
        $this->assertEquals("it`s a palindrome", $this->tmp->palindromV2());
        $this->tmp = null;

        $config['word'] = "a";
        $this->tmp = new PalindromV2($config);
        $this->assertEquals("it`s a palindrome", $this->tmp->palindromV2());
        $this->tmp = null;
    }
}
