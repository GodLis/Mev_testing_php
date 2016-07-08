<?php

require __DIR__ .'/vendor/autoload.php';

$k = mt_rand(5, 20);
$array[$k] = [];
for ($i=0; $i<$k; $i++) {
    $arrayToQuickSort[$i] = $array[$i] = random_int(1, 50);
};

echo "Массив до сортировки:\n";

for ($i=0; $i<$k; $i++) {
    echo ($array[$i] ." ");
}

echo "\nCортировка встроенной функцией:\n";

sort($array);

for ($i=0; $i<$k; $i++) {
    echo $array[$i] ." ";
}

echo "\nБыстрая сортировка:\n";

$tmp = new \GodLis\QuickSort();
$tmp->quickSort($array);

for ($i=0; $i<$k; $i++) {
    echo $array[$i] ." ";
}

echo "\n";
