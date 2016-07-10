<?php

require __DIR__ .'/vendor/autoload.php';

$tmp = new \GodLis\Task5\MainClass();
$mas = [];
$m = mt_rand(4, 6);
$n = mt_rand(2, 4);
$tmp->perebor(0, $mas, $n, $m);
