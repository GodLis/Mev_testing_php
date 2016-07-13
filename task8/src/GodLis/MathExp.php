<?php

namespace GodLis\Task8;

/**
 * Class MathExp
 * @package GodLis
 */
class MathExp
{
    /**
     * @return bool|float|int|mixed
     */
    public function mathExp()
    {
        $str = (1+2)*8;
        $str = (float)preg_replace('/([0-9\(\)\*\-\+\/\.]*)/', '\\1', $str);
        if ($str == '/([0-9\(\)\*\-\+\/\.]*)/') {
            $str = eval("=".$str.";");
            return $str;
        }
        return false;
    }
}
