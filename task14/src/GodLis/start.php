<?php

namespace GodLis;

use GodLis\ScanDir;

$tmp = new ScanDir();
$res = $tmp-> scanDir("/home/godlis/Mev/Mev_testing_php/task14/vendor/");
for ($i = 0; $i<count($res); $i++) {
    echo $res[$i] ."\n";
}
