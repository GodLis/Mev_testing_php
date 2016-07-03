<?php

namespace OlechkaBrajko\Task11;

require 'vendor/autoload.php';
require 'Palindromv1.php';
require 'PalindromV2.php';

$word = 'kazak';
echo $word ."\n";
$sr = floor(strlen($word)/2);
$k = strlen($word);

echo "Variant 1:" ."\n";
$tmp = new Palindromv1();
echo $tmp->palindromV1($word, $sr, $k) ."\n";

echo "Variant 2:" ."\n";
$tmp = new PalindromV2();
echo $tmp->palindromV2($word) ."\n";
