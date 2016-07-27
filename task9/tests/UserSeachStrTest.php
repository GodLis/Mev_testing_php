<?php
/**
 * UserSeachSrtrTest File Doc Comment
 *
 * This file is a part of a task9
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task9
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
namespace GodLis\Task9\Tests;

use GodLis\Task9\UserSeachStr;

/**
 * Class UserSeachSrtrTest
 *
 * @category Testing
 * @package  GodLis\Task9\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class UserSeachStrTest extends \PHPUnit_Framework_TestCase
{
    /**
     * UserSeachSrtrTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * UserSeachSrtrTest function
     *
     * @return \testing
     */
    public function testUserSeachStr()
    {
        $config['subject'] = "abcdef sdjfvh jbc ";
        $config['part'] = 'def';
        $this->tmp = new UserSeachStr($config);
        $this->assertEquals(true, $this->tmp->userSeachStr());
        $this->tmp = null;

        $config['subject'] = "abcdef sdjfvh jbc ";
        $config['part'] = 'del';
        $this->tmp = new UserSeachStr($config);
        $this->assertEquals(false, $this->tmp->userSeachStr());
        $this->tmp = null;

        $config['subject'] = "abcdef sdjfvh jbc ";
        $config['part'] = ' ';
        $this->tmp = new UserSeachStr($config);
        $this->assertEquals(true, $this->tmp->userSeachStr());
        $this->tmp = null;

        $config['subject'] = "abcdef sdjfvh jbc. ";
        $config['part'] = '.';
        $this->tmp = new UserSeachStr($config);
        $this->assertEquals(true, $this->tmp->userSeachStr());
        $this->tmp = null;
    }
}
