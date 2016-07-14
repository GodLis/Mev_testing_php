<?php

/**
 * This file is a part of a task1
 *
 * PHP version 7
 *
 * @category Testing
 * @package  Test
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task1;

/**
 * Class SumElementsOfArray
 *
 * @category Testing
 * @package  GodLis\Task1
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class SumElementsOfArray
{
    /**
     * @var
     */
    public $arr;

    /**
     * SumElementsOfArray constructor.
     * @param $arr
     */
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function __destruct()
    {
        $this->arr;
    }

    /**
     * @return bool|number
     */
    public function arraySum()
    {
        if (!empty($this->arr)) {
            return array_sum($this->arr);
        }
        return false;
    }
}
