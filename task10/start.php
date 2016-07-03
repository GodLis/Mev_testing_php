<?php

namespace OlechkaBrajko\Task10;

require 'vendor/autoload.php';
require 'StrDeleteV1.php';
require 'StrDeleteV2.php';


$str = "35435B 5466 3  33A65";
echo "Строка с пробелами:" ."\n";
echo $str ."\n";

$tmp = new StrDeleteV1();
echo "Способ 1:" ."\n";
echo $tmp->strDeleteV1($str) ."\n";

$tmp = new StrDeleteV2();
echo "Способ 2:" ."\n";
echo $tmp->strDeleteV2($str) ."\n";
