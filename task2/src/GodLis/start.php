<?php

namespace GodLis;

use GodLis\FindElementsMinAndMax as Solution1;
use GodLis\FindElementsMinAndMaxV2 as Solution2;

$k = random_int(1, 20);
$arr[$k] = [];
for ($i=0; $i<$k; $i++) {
    $arr[$i] = random_int(1, 50);
    echo $arr[$i] ." ";
}
$result = new Solution1();
echo "\n Method1: \n";
echo $result->seachMaxElement($arr) ."\n";
echo $result->seachMinElement($arr) ."\n";

$result2 = new Solution2();
echo " Method2: \n";
echo $result2->seachMaxElement($arr) ."\n";
echo $result2->seachMinElement($arr) ."\n";
