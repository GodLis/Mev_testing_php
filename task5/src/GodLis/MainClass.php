<?php

namespace GodLis\Task5;

/**
 * Class MainClass
 * @package GodLis
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
            for ($i=$k-$n; $i<$k; $i++) {
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
