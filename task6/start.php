<?php

namespace OlechkaBrajko\Task6;

require 'vendor/autoload.php';
require 'MainClass.php';

$mas = [];
$n = mt_rand(3, 4);
$yes = false;

function next($mas, $yes, $n)
{
    function swap($a, $b)
    {
        $c = $a;
        $a = $b;
        $b = $c;
    }
    $i = $n-1;
    while (($j<$n) && ($mas[$j+1]>$mas[$i])) {
        ++$j;
    }
    if ($i>0) {
        $j = $i+1;
        while (($j<$n) and ($mas[$j+1]>$mas[$i])) {
            ++$j;
        }
        swap($mas[$i], $mas[$j]);
        for ($j = $i+1; $j<($n+$i)/2; $j++) {
            swap($mas[$j], $mas[$n-$j+$i+1]);
        }
        $yes = true;
    } else {
        $yes = false;
    }
}

for ($i=1; $i<=$n; $i++) {
    $mas[$i] = $i;
}
do {
    for ($i=1; $i<=$n; $i++) {
        echo $mas[$i];
    }
    echo "\n";
    next($mas, $yes, $n);
} while (!$yes);
