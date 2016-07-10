<?php

require __DIR__ .'/vendor/autoload.php';

$datetime1 = new \DateTime('1996-01-19');
$datetime2 = new \DateTime('now', new \DateTimeZone('UTC'));

$tmp = new \GodLis\Task12\DataClass();
echo "Difference between 2 dates is ". $tmp->data($datetime1, $datetime2)->format('%R%a days') ."\n";
