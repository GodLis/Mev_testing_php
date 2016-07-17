<?php

require __DIR__ .'/vendor/autoload.php';

$subject = "abcdef sdjfvh jbc ";
$pattern = '/^def/';
$part = 'def';

echo "Строка: ";
echo $subject ."\n";
echo "Подстрока: ";
echo $pattern ."\n";

$tmp = new \GodLis\Task9\RegExpStr();
echo "Поиск RegExp: ";
print_r($res = $tmp->regExpStr($pattern, $subject));

$tmp = new \GodLis\Task9\UserSeachStr();
echo "\nПоиск вручную: ";
$tmp->userSeachStr($part, $subject) ."\n";
