<?php

namespace OlechkaBrajko\Task2;

/**
 * Class FindElementsMinAndMax
 * @package OlechkaBrajko\Task2
 */
class FindElementsMinAndMax
{
    /**
     * @param $arr
     * @return int
     */
    public function seachMinElement($arr)
    {
        $min = (int)(min($arr));
        return $min;
    }

    /**
     * @param $arr
     * @return int
     */
    public function seachMaxElement($arr)
    {
        $max = (int)(max($arr));
        return $max;
    }
}
