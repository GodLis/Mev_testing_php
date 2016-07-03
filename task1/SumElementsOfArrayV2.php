<?php

namespace OlechkaBrajko\Task1;

/**
 * Class SumElementsOfArrayV2
 * @package OlechkaBrajko\Task1
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
        for ($i=0; $i<count($arr)-1; $i++) {
            $sum =+ $arr[$i];
        }
        return $sum;
    }
}
