<?php
/**
 * SortingEmbodiments File Doc Comment
 *
 * This file is a part of a task4
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task4
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
namespace GodLis\Task5;

/**
 * Class SortingEmbodiments
 *
 * @category Testing
 * @package  GodLis\Task3
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class SortingEmbodiments
{
    /**
     * SortingEmbodiments function
     *
     * @param number $k   Counter
     * @param array  $mas
     * @param number $n   Temporary variable
     * @param number $m   Temporary variable
     */
    public function sortingEmbodiments($k, $mas, $n, $m)
    {
        if ($k == $n) {
            for ($i=$k-$n; $i<$k; $i++) {
                echo $mas[$i];
            }
            echo "\n";
        } else {
            for ($j = 1; $j <= $m; $j++) {
                $mas[$k] = $j;
                $this->sortingEmbodiments($k + 1, $mas, $n, $m);
            }
        }
    }
}
