<?php

namespace OlechkaBrajko\Task9;

require 'vendor/autoload.php';
require "RegExpStr.php";
require "UserSeachStr.php";

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
echo $res = $tmp->userSeachStr($part, $subject) ."\n";
