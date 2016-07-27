<?php
/**
 * HappyTicketsTest File Doc Comment
 *
 * This file is a part of a task7
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task7
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task7\Tests;

use GodLis\Task7\HappyTickets;
/**
 * Class HappyTicketsTest
 *
 * @category Testing
 * @package  GodLis\Task7\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class HappyTicketsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * HappyTicketsTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * HappyTicketsTest function
     *
     * @return \testing
     */
    public function testHappyTickets()
    {
        $config['numbers'] = 0;
        $this->tmp = new HappyTickets($config);
        $this->assertFalse(false, $this->tmp->lNum());
        $this->tmp = null;

        $config['numbers'] = 3;
        $this->tmp = new HappyTickets($config);
        $this->assertFalse(false, $this->tmp->lNum());
        $this->tmp = null;

        $config['numbers'] = -3;
        $this->tmp = new HappyTickets($config);
        $this->assertFalse(false, $this->tmp->lNum());
        $this->tmp = null;

        $config['numbers'] = 2;
        $this->tmp = new HappyTickets($config);
        $this->assertTrue(true, $this->tmp->lNum());
        $this->tmp = null;
    }
}
