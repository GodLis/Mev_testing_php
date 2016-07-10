<?php

namespace GodLis\Task9;

/**
 * Class UserSeachStr
 * @package GodLis
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
