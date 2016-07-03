<?php

namespace OlechkaBrajko\Task3;

require 'vendor/autoload.php';
require 'QuickSort.php';

$k = mt_rand(5, 20);
$array[$k] = [];
for ($i=0; $i<$k; $i++) {
    $arrayToQuickSort[$i] = $array[$i] = random_int(1, 50);
};

echo "Массив до сортировки:\n";

for ($i=0; $i<$k; $i++) {
    echo ($array[$i] ." ");
}

sort($array);

echo "\nCортировка встроенной функцией:\n";

for ($i=0; $i<$k; $i++) {
    echo $array[$i] ." ";
}

$tmp = new QuickSort();
$tmp->quickSort($array);

echo "\nБыстрая сортировка:\n";

for ($i=0; $i<$k; $i++) {
    echo $array[$i] ." ";
}

echo "\n";
