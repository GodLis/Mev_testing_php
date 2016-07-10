<?php

namespace GodLis\Task11;

/**
 * Class Palindromv1
 * @package GodLis
 */
class Palindromv1
{
    /**
     * @param $word
     * @param $sr
     * @param $k
     * @return string
     */
    public function palindromV1($word, $sr, $k)
    {
        $arr1 = str_split($word);
        for ($i=0; $i<$sr; $i++) {
            if (!empty($arr1[$k - $i - 1])) {
                if ($arr1[$i] != $arr1[$k-$i-1]) {
                    return "it`s not a palindrome";
                }
            }
        }
        return "it`s a palindrome";
    }
}
