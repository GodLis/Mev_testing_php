<?php

require __DIR__ .'/vendor/autoload.php';

$y = mt_rand(1996, 2016);

$tmp = new \GodLis\ProgrammerDay();
echo $tmp->programerDay($y) ."\n";
