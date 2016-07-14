<?php

namespace GodLis\Task1;

/**
 * Class SumElementsOfArrayV2
 *
 * @package GodLis
 */
class SumElementsOfArrayV2
{
    /**
     * @var
     */
    public $arr;

    /**
     * SumElementsOfArray constructor.
     * @param $arr
     */
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function __destruct()
    {
        $this->arr;
    }
    /**
     * @return bool|int
     */
    public function arraySum()
    {
        if (!empty($this->arr)) {
            $sum = 0;
            for ($i=0; $i<count($this->arr); $i++) {
                $sum += $this->arr[$i];
            }
            return $sum;
        }
        return false;
    }
}
