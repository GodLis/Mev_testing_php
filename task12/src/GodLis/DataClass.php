<?php

namespace GodLis;

/**
 * Class DataClass
 * @package GodLis
 */
class DataClass
{
    /**
     * @param $datetime1
     * @param $datetime2
     * @return mixed
     */
    public function data($datetime1, $datetime2)
    {
        $interval = $datetime1->diff($datetime2);
        return $interval;
    }
}
