<?php
/**
 * PalindromV1Test File Doc Comment
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

use GodLis\Task11\PalindromV1;

/**
 * Class PalindromV1Test
 *
 * @category Testing
 * @package  GodLis\Task11\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class PalindromV1Test extends \PHPUnit_Framework_TestCase
{
    /**
     * PalindromV1Test variable
     *
     * @var
     */
    protected $tmp;

    /**
     * PalindromV1Test function
     *
     * @return \testing
     */
    public function testPalindromV1()
    {
        $config['word'] = "alex";
        $this->tmp = new PalindromV1($config);
        $this->assertEquals("it`s not a palindrome", $this->tmp->palindromV1());
        $this->tmp = null;

        $config['word'] = "ale";
        $this->tmp = new PalindromV1($config);
        $this->assertEquals("it`s not a palindrome", $this->tmp->palindromV1());
        $this->tmp = null;

        $config['word'] = "alikaakila";
        $this->tmp = new PalindromV1($config);
        $this->assertEquals("it`s a palindrome", $this->tmp->palindromV1());
        $this->tmp = null;

        $config['word'] = "alikakila";
        $this->tmp = new PalindromV1($config);
        $this->assertEquals("it`s a palindrome", $this->tmp->palindromV1());
        $this->tmp = null;

        $config['word'] = "a";
        $this->tmp = new PalindromV1($config);
        $this->assertEquals("it`s a palindrome", $this->tmp->palindromV1());
        $this->tmp = null;
    }
}
