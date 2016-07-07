<?php

namespace GodLis;

use GodLis\DataClass;

$datetime1 = new \DateTime('1996-01-19');
$datetime2 = new \DateTime('now', new \DateTimeZone('UTC'));

$tmp = new DataClass();
echo $tmp->data($datetime1, $datetime2)->format('%R%a days') ."\n";
