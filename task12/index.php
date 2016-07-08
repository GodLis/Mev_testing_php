<?php

require __DIR__ .'/vendor/autoload.php';

$datetime1 = new \DateTime('1996-01-19');
$datetime2 = new \DateTime('now', new \DateTimeZone('UTC'));

$tmp = new \GodLis\DataClass();
echo $tmp->data($datetime1, $datetime2)->format('%R%a days') ."\n";
