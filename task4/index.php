<?php

require __DIR__ .'/vendor/autoload.php';

$k = mt_rand(20, 30);
$array1[] = [];
$array2[] = [];

for ($i=0; $i<$k; $i++) {
    $array1[$i] = random_int(1, 30);
    $array2[$i] = random_int(1, 30);
};

echo "Массив 1\n";
for ($i=0; $i<$k; $i++) {
    echo ($array1[$i] ." ");
};

echo "\nМассив 2\n";
for ($i=0; $i<$k; $i++) {
    echo ($array2[$i] ." ");
};

echo "\nНахождение общих елементов функцией 'array_intersect':\n";
print_r($result = array_intersect($array1, $array2));

echo "Нахождение общих елементов функцией пользователя:\n";
$tmp = new \GodLis\UserFunction();
print_r($tmp->userFunction($array1, $array2));

