<?php

namespace GodLis;

/**
 * Class PalindromV2
 * @package OlechkaBrajko\Task11
 */
class PalindromV2
{
    /**
     * @param $word
     * @return string
     */
    public function palindromV2($word)
    {
        $tmp = strrev($word);
        if ($tmp === $word) {
            return "it`s a palindrome";
        }
        return "it`s not a palindrome";
    }
}
