<?php

namespace GodLis;

/**
 * Class FindElementsMinAndMax
 * @package GodLis
 */
class FindElementsMinAndMax
{
    /**
     * @param $arr
     * @return bool|int
     */
    public function seachMinElement($arr)
    {
        if (!empty($arr)) {
            $min = (int)(min($arr));
            return $min;
        }
        return false;
    }

    /**
     * @param $arr
     * @return bool|int
     */
    public function seachMaxElement($arr)
    {
        if (!empty($arr)) {
            $max = (int)(max($arr));
            return $max;
        }
        return false;
    }
}
