<?php

require __DIR__ .'/vendor/autoload.php';

$config = [
    'host' => '0.0.0.0',
    'port' => 8000,
    'workers' => 1,
];

$WebsocketServer = new \GodLis\WebsocketServer($config);
$WebsocketServer->start();
