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
 * @package  Test
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
/**
 * Class SumElementsOfArray
 * @package GodLis
 */
class SumElementsOfArray
{
    /**
     * @param $arr
     * @return bool|number
     */
    public function arraySum($arr)
    {
        if (!empty($arr)) {
            return array_sum($arr);
        }
        return false;
    }
}
