<?php

namespace OlechkaBrajko\Task8;

require 'vendor/autoload.php';
require 'MathExp.php';

$var1 = mt_rand(1, 20);
$var2 = mt_rand(1, 20);
$var3 = mt_rand(1, 20);
$var4 = mt_rand(1, 20);

$tmp = new MathExp();
echo $tmp->mathExp($var1, $var2, $var3, $var4) ."\n";
