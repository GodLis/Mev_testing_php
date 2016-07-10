<?php

require __DIR__ .'/vendor/autoload.php';

$word = 'kazak';
echo $word ."\n";
$sr = floor(strlen($word)/2);
$k = strlen($word);

echo "Variant 1:" ."\n";
$tmp = new \GodLis\Task11\PalindromV1();
echo $tmp->palindromV1($word, $sr, $k) ."\n";

echo "Variant 2:" ."\n";
$tmp = new \GodLis\Task11\PalindromV2();
echo $tmp->palindromV2($word) ."\n";
