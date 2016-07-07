<?php

namespace GodLis;

use GodLis\WebsocketMaster;
use GodLis\WebsocketServer;
use GodLis\WebsocketWorker;
use GodLis\WebsocketHandler;

$config = [
'host' => '0.0.0.0',
'port' => 8000,
'workers' => 1,
];

$WebsocketServer = new WebsocketServer($config);
$WebsocketServer->start();
