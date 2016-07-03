<?php

namespace OlechkaBrajko\Task7;

require 'vendor/autoload.php';
require "HappyTickets.php";

$Res = new HappyTickets();
echo $Res->lNum(6) ."\n";
