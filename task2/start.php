<?php

namespace OlechkaBrajko\Task2;

require 'vendor/autoload.php';
require "FindElementsMinAndMax.php";
require "FindElementsMinAndMaxV2.php";

$k = random_int(1, 20);
$arr[$k] = [];
for ($i=0; $i<$k; $i++) {
    $arr[$i] = random_int(1, 50);
    echo $arr[$i] ." ";
}
$result = new FindElementsMinAndMax();
echo "\n Method1: \n";
echo $result->seachMaxElement($arr) ."\n";
echo $result->seachMinElement($arr) ."\n";

$result2 = new FindElementsMinAndMaxV2();
echo " Method2: \n";
echo $result2->seachMaxElement($arr) ."\n";
echo $result2->seachMinElement($arr) ."\n";
