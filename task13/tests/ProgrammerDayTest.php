<?php
/**
 * ProgrammerDayTest File Doc Comment
 *
 * This file is a part of a task13
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task13\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task13\Tests;

use GodLis\Task13\ProgrammerDay;

/**
 * Class ProgrammerDayTest
 *
 * @category Testing
 * @package  GodLis\Task13\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ProgrammerDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * ProgrammerDayTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * ProgrammerDayTest function
     *
     * @return \testing
     */
    public function testProgrammerDay()
    {
        $config['year'] = 2016;
        $this->tmp = new ProgrammerDay($config);
        $this->assertEquals('Mon, 12/09/2016', $this->tmp->programerDay($config));
        $this->tmp = null;

        $config['year'] = 2015;
        $this->tmp = new ProgrammerDay($config);
        $this->assertEquals('Sun, 13/09/2015', $this->tmp->programerDay($config));
        $this->tmp = null;
    }
}
