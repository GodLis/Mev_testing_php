<?php

namespace test;

class MainClass
{
    public function perebor($k)
    {
        $m = 4;
        $n = 3;
        $mas = [];
        if ($k == $n) {
            for ($i=$k; $i<$k+3; $i++) {
                print( $mas[$i]);
//                $k = 0;
            }
            echo "\n";
        } else {
            for ($j = 1; $j <= $m; $j++) {
                $mas[$k] = $j;
                echo $mas[$k];
                $this->perebor($k + 1);
            }
        }
    }
}