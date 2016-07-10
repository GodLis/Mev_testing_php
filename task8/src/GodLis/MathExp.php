<?php

namespace GodLis\Task8;

/**
 * Class MathExp
 * @package GodLis
 */
class MathExp
{
    /**
     * @return string
     */
    public function mathExp()
    {
        echo "Please enter the expression you want calculate: " ."\n";
        $str = readline();
        if (!empty($str)) {
            eval('$str = ' . $str . ';');
            return "Result: ". $str;
        }
    }
}
