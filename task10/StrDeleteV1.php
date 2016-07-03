<?php

namespace OlechkaBrajko\Task10;

/**
 * Class StrDeleteV1
 * @package OlechkaBrajko\Task10
 */
class StrDeleteV1
{
    /**
     * @param $str
     * @return mixed
     */
    public function strDeleteV1($str)
    {
        $n_str = str_replace(" ", "", $str);
        return $n_str;
    }
}
