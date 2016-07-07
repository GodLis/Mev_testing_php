<?php

namespace GodLis;

use GodLis\RegExpStr;
use GodLis\UserSeachStr;

$subject = "abcdef sdjfvh jbc ";
$pattern = '/^def/';
$part = 'def';

echo "Строка: ";
echo $subject ."\n";
echo "Подстрока: ";
echo $pattern ."\n";

$tmp = new RegExpStr();
echo "Поиск RegExp: ";
echo $res = $tmp->regExpStr($pattern, $subject) ."\n";

$tmp = new UserSeachStr();
echo "Поиск вручную: ";
$tmp->userSeachStr($part, $subject) ."\n";
