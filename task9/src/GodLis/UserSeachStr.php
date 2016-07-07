<?php

namespace GodLis;

/**
 * Class UserSeachStr
 * @package OlechkaBrajko\Task9
 */
class UserSeachStr
{
    /**
     * @param $part
     * @param $subject
     * @return bool
     */
    public function userSeachStr($part, $subject)
    {
        if (stristr($subject, $part) === false) {
            echo "Подстрока в строке не найдена" . "\n";
            return false;
        } else {
            echo "Подстрока в строке найдена" . "\n";
            return true;
        }
    }
}
