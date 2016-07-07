<?php

namespace GodLis;

/**
 * Class ProgrammerDay
 * @package OlechkaBrajko\Task13
 */
class ProgrammerDay
{
    /**
     * @param $y
     * @return string
     */
    public function programerDay($y)
    {
        if ($y%4 == 0) {
            $date = ''.$y.'-09-12';
            return strftime("%a, %d/%m/%Y", strtotime($date));
        } else {
            $date = '' . $y . '-09-13';
            return strftime("%a, %d/%m/%Y", strtotime($date));
        }
    }
}
