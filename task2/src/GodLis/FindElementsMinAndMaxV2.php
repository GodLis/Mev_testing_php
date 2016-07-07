<?php

namespace GodLis;

/**
 * Class FindElementsMinAndMaxV2
 * @package OlechkaBrajko\Task2
 */
class FindElementsMinAndMaxV2
{

    /**
     * @param $arr
     * @return mixed
     */
    public function seachMinElement($arr)
    {
        $min = $arr[0];
        for ($i=1; $i<count($arr)-1; $i++) {
            if ($arr[$i]<$min) {
                $min = $arr[$i];
            }
        }
        return $min;
    }

    /**
     * @param $arr
     * @return mixed
     */
    public function seachMaxElement($arr)
    {
        $max = $arr[0];
        for ($i=1; $i<count($arr)-1; $i++) {
            if ($arr[$i]>$max) {
                $max = $arr[$i];
            }
        }
        return $max;
    }
}
