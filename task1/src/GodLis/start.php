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

namespace GodLis;

use GodLis\SumElementsOfArray as Sum1;
use GodLis\SumElementsOfArrayV2 as Sum2;

$arr[10] = [];
for ($i = 0;
     $i < count($arr);
     $i++) {
    $arr[$i] = mt_rand(5, 15);
}
$result = new Sum1();
$result2 = new Sum2();
echo $result->arraySum($arr)."\n";
echo $result2->arraySum($arr)."\n";
