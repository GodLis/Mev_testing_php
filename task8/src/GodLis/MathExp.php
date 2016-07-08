<?php

namespace GodLis;

/**
 * Class MathExp
 * @package GodLis
 */
class MathExp
{
    /**
     * @param $var1
     * @param $var2
     * @param $var3
     * @param $var4
     * @return string
     */
    public function mathExp($var1, $var2, $var3, $var4)
    {
        if ($var1 !== 0) {
            return (($var1 + $var2) * $var3) - ($var4 + $var2) / $var1;
        }
        return false;
    }
}
