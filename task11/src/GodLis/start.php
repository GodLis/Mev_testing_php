<?php

namespace GodLis;

use GodLis\PalindromV1;
use GodLis\PalindromV2;

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
