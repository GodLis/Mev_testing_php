<?php

namespace OlechkaBrajko\Task13;

require 'vendor/autoload.php';
require "ProgrammerDay.php";

$y = mt_rand(1996, 2016);

$tmp = new ProgrammerDay();
echo $tmp->programerDay($y) ."\n";
