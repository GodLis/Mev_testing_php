<?php

namespace GodLis\Task7;

/**
 * Class HappyTickets
 * @package GodLis
 */
class HappyTickets
{
    /**
     * @var
     */
    protected $numbers;

    /**
     * HappyTickets constructor.
     * @param $numbers
     */
    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function __destruct()
    {
        $this->numbers;
    }

    /**
     * @return bool|int
     */
    public function lNum()
    {
        if ($this->numbers % 2 != 0 || $this->numbers<=0) {
            return false;
        }
        $maxNum = (int)str_repeat('9', $this->numbers);
        $half = $this->numbers / 2;

        for ($i = 0; $i <= $maxNum; $i++) {
            $str = sprintf('%0' . $this->numbers . 's', $i);
            $arr = str_split($str, $half);
            if (array_sum(str_split($arr[0], 1))==array_sum(str_split($arr[1], 1))) {
                echo $arr[0], $arr[1] ."\n";
            }
        }
    }
}
