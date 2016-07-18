<?php
/**
 * SortingEmbodimentsTest File Doc Comment
 *
 * This file is a part of a task5
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task5
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task5\Tests;

use GodLis\Task5\SortingEmbodiments;
/**
 * Class SortingEmbodimentsTest
 *
 * @category Testing
 * @package  GodLis\Task5
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class SortingEmbodimentsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * SortingEmbodimentsTest variable
     *
     * @var
     */
    protected $tmp;

    /**
     * SortingEmbodimentsTest function
     *
     * @return \testing
     */
    public function testSortingEmbodiments()
    {
        $mas = [];
        $this->tmp = new SortingEmbodiments();
        $this->assertEquals(false, $this->tmp->sortingEmbodiments(0, $mas, 0, 1));
        $this->tmp = null;

        $mas = [];
        $this->tmp = new SortingEmbodiments();
        $this->assertEquals(false, $this->tmp->sortingEmbodiments(0, $mas, 2, 0));
        $this->tmp = null;

        $mas = [];
        $this->tmp = new SortingEmbodiments();
        $this->assertEquals(true, $this->tmp->sortingEmbodiments(0, $mas, 2, 3));
        $this->tmp = null;
    }
}
