<?php

namespace OlechkaBrajko\Task4;

/**
 * Class UserFunction
 * @package OlechkaBrajko\Task4
 */
class UserFunction
{
    /**
     * @param $array1
     * @param $array2
     */
    public function userFunction($array1, $array2)
    {
        for ($i=0; $i<count($array1)-1; $i++) {
            for ($j=0; $j<count($array2)-1; $j++) {
                if ($array1[$i] == $array2[$j]) {
                    print ($array1[$i] . " ");
                }
            }
        }
    }
}
