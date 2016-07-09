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
     * @return bool|int
     */
    public function arraySum($arr)
    {
        if (!empty($arr)) {
            $sum = 0;
            for ($i=0; $i<count($arr); $i++) {
                $sum += $arr[$i];
            }
            return $sum;
        }
        return false;
    }
}
