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
if (!empty($array)) {
    sort($array);
}
for ($i=0; $i<$k; $i++) {
    echo $array[$i] ." ";
}

echo "\nБыстрая сортировка:\n";
$tmp = new \GodLis\Task3\QuickSort();
if (!empty($arrayToQuickSort)) {
    $tmp->quickSort($arrayToQuickSort);
}
for ($i=0; $i<$k; $i++) {
    echo $arrayToQuickSort[$i] ." ";
}
echo "\n";
