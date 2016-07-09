<?php

namespace GodLis;

/**
 * Class UserFunction
 * @package GodLis
 */
class UserFunction
{
    /**
     * @param $array1
     * @param $array2
     * @return array
     */
    public function userFunction($array1, $array2)
    {
        $arr[] = [];
        $k = 0;
        if (count($array1)>=count($array2)) {
            for ($i = 0; $i < count($array1); $i++) {
                for ($j = 0; $j < count($array2); $j++) {
                    if ($array1[$i] == $array2[$j]) {
                        $arr[$k] = $array1[$i];
                        $k++;
                        break;
                    }
                }
            }
            return $arr;
        } elseif (count($array2)>count($array1)) {
            for ($i = 0; $i < count($array2); $i++) {
                for ($j = 0; $j < count($array1); $j++) {
                    if ($array2[$i] == $array1[$j]) {
                        $arr[$k] = $array2[$i];
                        $k++;
                        break;
                    }
                }
            }
            return $arr;
        }
        return false;
    }
}
