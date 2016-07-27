<?php
/**
 * FindMinAndMaxElementsV2 File Doc Comment
 *
 * This file is a part of a task2
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task2
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task2;

/**
 * Class FindMinAndMaxElementsV2
 *
 * @category Testing
 * @package  GodLis\Task2
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class FindMinAndMaxElementsV2
{
    /**
     * FindMinAndMaxElementsV2 variable
     *
     * @var
     */
    protected $arr;

    /**
     * FindElementsMinAndMaxV2 constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->arr = $config['arr'];
    }

    /**
     * FindMinAndMaxElementsV2 destructor
     */
    public function __destruct()
    {
        $this->arr;
    }

    /**
     * FindMinAndMaxElementsV2 function
     *
     * @return bool|int
     */
    public function seachMinElement()
    {
        if (!empty($this->arr)) {
            $min = $this->arr[0];
            for ($i=0; $i<count($this->arr); $i++) {
                if ($this->arr[$i]<$min) {
                    $min = $this->arr[$i];
                }
            }
            return $min;
        }
        return false;
    }

    /**
     * FindMinAndMaxElementsV2 function
     *
     * @return bool|int
     */
    public function seachMaxElement()
    {
        if (!empty($this->arr)) {
            $max = $this->arr[0];
            for ($i=0; $i<count($this->arr); $i++) {
                if ($this->arr[$i]>$max) {
                    $max = $this->arr[$i];
                }
            }
            return $max;
        }
        return false;
    }
}
