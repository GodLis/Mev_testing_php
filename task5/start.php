<?php

namespace OlechkaBrajko\Task5;

require 'vendor/autoload.php';
require 'MainClass.php';

$tmp = new MainClass();
$mas = [];
$m = mt_rand(4, 10);
$n = mt_rand(1, 4);
$tmp->perebor(0, $mas, $n, $m);
