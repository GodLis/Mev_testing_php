<?php

namespace GodLis;

ini_set("max_execution_time", "1200");
$from="http://www.jcmm.cz/en/photogallery.html/";
$str = file_get_contents($from);
preg_match_all("'<img\s+src=\"(\S*.(png|jpg))\"'si", $str, $ok);
for ($i=1; $i<count($ok[1]); $i++) {
    $url= $from.$ok[1][$i];
    $destination_folder="/home/godlis/Mev/Mev_testing_php/task15/files/";
    $filename = (($pos = strrpos($url, '/')) !== false)?substr($url, $pos + 1):$url;
    if (!copy($url, $destination_folder . $filename)) {
        echo "не удалось скопировать $filename" . "\n";
    }
    echo "Файл " .$url." cкопирован в: " . $destination_folder.$filename ."\n";
}
