<?php
/**
 * QuickSort File Doc Comment
 *
 * This file is a part of a task3
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task3
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
namespace GodLis\Task3;

/**
 * Class QuickSort
 *
 * @category Testing
 * @package  GodLis\Task3
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class QuickSort
{
    /**
     * QuickSort variable
     *
     * @var
     */
    protected $array;

    /**
     * QuickSort constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->array = $config['arr'];
    }

    /**
     * QuickSort destructor.
     */
    public function __destruct()
    {
        $this->array;
    }

     /**
     * QuickSort function
     *
     * @return array $array
     */
    public function quickSort()
    {
        $left = 0;
        $right = count($this->array) - 1;
        $this->mySort($this->array, $left, $right);
        return $this->array;
    }

    /**
     * MySort function
     *
     * @param array  $array Array that`s sorted
     * @param number $left  Temp variable
     * @param number $right Temp variable
     *
     * @return array $array
     */
    public function mySort(&$array, $left, $right)
    {
        $l = $left;
        $r = $right;
        $center = $array[($left + $right)/2];
        do {
            while ($array[$r]>$center) {
                $r--;
            }
            if (!empty($array)) {
                while ($array[$l]<$center) {
                    $l++;
                }
            }
            if ($l <= $r) {
                list($array[$r], $array[$l]) = [$array[$l], $array[$r]];
                $l++;
                $r--;
            }
        } while ($l <= $r);

        if ($r > $left) {
            $this->mySort($array, $left, $r);
        }

        if ($l < $right) {
            $this->mySort($array, $l, $right);
        }
        return $array;
    }
}
