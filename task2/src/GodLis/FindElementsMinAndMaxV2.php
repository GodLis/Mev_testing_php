<?php

namespace GodLis;

/**
 * Class FindElementsMinAndMaxV2
 * @package GodLis
 */
class FindElementsMinAndMaxV2
{

    /**
     * @param $arr
     * @return mixed
     */
    public function seachMinElement($arr)
    {
        if (!empty($arr)) {
            $min = $arr[0];
            for ($i=1; $i<count($arr)-1; $i++) {
                if ($arr[$i]<$min) {
                    $min = $arr[$i];
                }
            }
            return $min;
        }
        return false;
    }

    /**
     * @param $arr
     * @return mixed
     */
    public function seachMaxElement($arr)
    {
        if (!empty($arr)) {
            $max = $arr[0];
            for ($i=1; $i<count($arr)-1; $i++) {
                if ($arr[$i]>$max) {
                    $max = $arr[$i];
                }
            }
            return $max;
        }
        return false;
    }
}
