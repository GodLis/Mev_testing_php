<?php

require __DIR__ .'/vendor/autoload.php';

$config = [
    'host' => '0.0.0.0',
    'port' => 8000,
    'workers' => 2,
];

$WebsocketServer = new \GodLis\Task18\WebsocketServer($config);
$WebsocketServer->start();
