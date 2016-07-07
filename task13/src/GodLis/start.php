<?php

namespace GodLis;

use GodLis\ProgrammerDay;

$y = mt_rand(1996, 2016);

$tmp = new ProgrammerDay();
echo $tmp->programerDay($y) ."\n";
