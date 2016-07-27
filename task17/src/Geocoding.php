<?php

namespace GodLis\Task17;

class Geocoding
{
    public function geocoding($geo, $backGeo)
    {
        echo "Прямое геокодирвоание:\n";
        $xml = simplexml_load_file($geo);
        print_r($xml);

        echo "\nОбратное геокодирвоание:\n";
        $xml2 = simplexml_load_file($backGeo);
        print_r($xml2);
    }
}