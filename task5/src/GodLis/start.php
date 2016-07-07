<?php

namespace GodLis;

use GodLis\MainClass;

$tmp = new MainClass();
$mas = [];
$m = mt_rand(4, 6);
$n = mt_rand(2, 4);
$tmp->perebor(0, $mas, $n, $m);
