<?php

namespace GodLis;

/**
 * Class SumElementsOfArrayV2
 *
 * @package GodLis
 */
class SumElementsOfArrayV2
{
    /**
     * @param $arr
     * @return int
     */
    public function arraySum($arr)
    {
        $sum = 0;
        for ($i=0; $i<count($arr); $i++) {
            $sum += $arr[$i];
        }
        return $sum;
    }
}
