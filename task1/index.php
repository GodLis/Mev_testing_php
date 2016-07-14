<?php

require __DIR__ .'/vendor/autoload.php';

$arr[10] = [];
for ($i = 0;
     $i < count($arr);
     $i++) {
    $arr[$i] = mt_rand(5, 15);
}
print_r($arr);

// Consumes the configuration array
//$config = new Zend\Config\Config(require 'config/config.php');
//$config = Zend\Config\Factory::fromFile(__DIR__ . '/config/config.php');

$result = new \GodLis\Task1\SumElementsOfArray($arr);
echo $result->arraySum() ."\n";

$result = new \GodLis\Task1\SumElementsOfArrayV2($arr);
echo $result->arraySum()."\n";
