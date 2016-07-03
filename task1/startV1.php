<?php
namespace OlechkaBrajko\Task1;

require 'vendor/autoload.php';
require "SumElementsOfArray.php";
require "SumElementsOfArrayV2.php";

$arr[10] = [];
for ($i = 1;
     $i <= count($arr);
     $i++) {
    $arr[$i] = mt_rand(5, 15);
}
$result2 = $result = new SumElementsOfArray();
echo $result->arraySum($arr)."\n";
echo $result2->arraySum($arr)."\n";
