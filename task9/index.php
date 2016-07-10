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
echo $res = $tmp->regExpStr($pattern, $subject) ."\n";

$tmp = new \GodLis\Task9\UserSeachStr();
echo "Поиск вручную: ";
$tmp->userSeachStr($part, $subject) ."\n";
