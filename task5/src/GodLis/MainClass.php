<?php

namespace GodLis;

/**
 * Class MainClass
 * @package OlechkaBrajko\Task5
 */
class MainClass
{
    /**
     * @param $k
     * @param $mas
     * @param $n
     * @param $m
     */
    public function perebor($k, $mas, $n, $m)
    {
        if ($k == $n) {
            for ($i=$k-3; $i<$k; $i++) {
                echo $mas[$i];
            }
            echo "\n";
        } else {
            for ($j = 1; $j <= $m; $j++) {
                $mas[$k] = $j;
                $this->perebor($k + 1, $mas, $n, $m);
            }
        }
    }
}
