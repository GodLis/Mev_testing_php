<?php

namespace OlechkaBrajko\Task9;

/**
 * Class UserSeachStr
 * @package OlechkaBrajko\Task9
 */
class UserSeachStr
{
    /**
     * @param $part
     * @param $subject
     */
    public function userSeachStr($part, $subject)
    {
        if (stristr($subject, $part) === false) {
            echo 'Подстрока не найдена в строке' ."\n";
        } else {
            echo 'Подстрока найдена в строке' ."\n";
        }
    }
}
