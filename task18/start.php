<?php

namespace OlechkaBrajko\Task18;

require 'vendor/autoload.php';
require 'WebsocketMaster.php';
require 'WebsocketServer.php';
require 'WebsocketWorker.php';
require 'WebsocketHandler.php';

$config = [
'host' => '0.0.0.0',
'port' => 8000,
'workers' => 1,
];

$WebsocketServer = new WebsocketServer($config);
$WebsocketServer->start();
