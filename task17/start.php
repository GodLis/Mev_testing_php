<?php

namespace OlechkaBrajko\Task17;

require 'vendor/autoload.php';

echo "Прямое геокодирвоание:\n";
$xml = simplexml_load_file('https://geocode-maps.yandex.ru/1.x/?geocode=Украина,+Черкассы,+Пушкина+улица,+дом+100)');
print_r($xml);

echo "\nОбратное геокодирвоание:\n";
$xml2 = simplexml_load_file('https://geocode-maps.yandex.ru/1.x/?geocode=30.610803, 59.745966');
print_r($xml2);
