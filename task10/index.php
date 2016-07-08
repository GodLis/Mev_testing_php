<?php

require __DIR__ .'/vendor/autoload.php';

$str = "35435B 5466 3  33A65";
echo "Строка с пробелами:" ."\n";
echo $str ."\n";

$tmp = new \GodLis\StrDeleteV1();
echo "Способ 1:" ."\n";
echo $tmp->strDeleteV1($str) ."\n";

$tmp = new \GodLis\StrDeleteV2();
echo "Способ 2:" ."\n";
echo $tmp->strDeleteV2($str) ."\n";
