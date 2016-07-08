<?php

require __DIR__ .'/vendor/autoload.php';

$word = 'kazak';
echo $word ."\n";
$sr = floor(strlen($word)/2);
$k = strlen($word);

echo "Variant 1:" ."\n";
$tmp = new \GodLis\PalindromV1();
echo $tmp->palindromV1($word, $sr, $k) ."\n";

echo "Variant 2:" ."\n";
$tmp = new \GodLis\PalindromV2();
echo $tmp->palindromV2($word) ."\n";
