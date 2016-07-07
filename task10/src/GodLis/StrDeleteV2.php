<?php

namespace GodLis;

/**
 * Class StrDeleteV2
 * @package OlechkaBrajko\Task10
 */
class StrDeleteV2
{
    /**
     * @param $str
     * @return mixed
     */
    public function strDeleteV2($str)
    {
        $strN = preg_replace('/\s/', '', $str);
        return $strN;
    }
}
