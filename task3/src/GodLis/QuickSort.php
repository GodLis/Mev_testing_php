<?php

namespace GodLis;

/**
 * Class QuickSort
 * @package GodLis
 */
class QuickSort
{
    /**
     * @param $array
     */
    public function quickSort(&$array)
    {
        $left = 0;
        $right = count($array) - 1;
        $this->mySort($array, $left, $right);
    }

    /**
     * @param $array
     * @param $left
     * @param $right
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
    }
}
