<?php

require __DIR__ .'/vendor/autoload.php';

$arr[10] = [];
for ($i = 0;
     $i < count($arr);
     $i++) {
    $arr[$i] = mt_rand(5, 15);
}
print_r($arr);

$result1 = new \GodLis\Task1\SumElementsOfArray();
echo $result1->arraySum($arr)."\n";

$result2 = new \GodLis\Task1\SumElementsOfArrayV2();
echo $result2->arraySum($arr)."\n";
