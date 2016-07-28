<?php
/**
 * ScanDirTest File Doc Comment
 *
 * This file is a part of a task14
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task14\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task14\Tests;

use GodLis\Task14\ScanDir;

/**
 * Class ScanDirTest
 *
 * @category Testing
 * @package  GodLis\Task14\Tests
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ScanDirTest extends \PHPUnit_Framework_TestCase
{
    /**
     * ScanDirTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * ScanDirTest function
     *
     * @return \testing
     */
    public function testScanDir()
    {
        $this->tmp = new ScanDir();
        $this->assertEquals([], $this->tmp->scanDir("../src/"));
        $this->tmp = null;
    }
}
