<?php

namespace OlechkaBrajko\Task18;

//пример реализации чата
/**
 * Class WebsocketHandler
 * @package OlechkaBrajko\Task18
 */
class WebsocketHandler extends WebsocketWorker
{
    /**
     * @param $client
     * @param $info
     */
    protected function onOpen($client, $info)
    {
        //вызывается при соединении с новым клиентом
    }

    /**
     * @param $client
     */
    protected function onClose($client)
    {
        //вызывается при закрытии соединения клиентом
    }

    /**
     * @param $client
     * @param $data
     */
    protected function onMessage($client, $data)
    {
        //вызывается при получении сообщения от клиента
        $data = $this->decode($data);

        if (!$data['payload']) {
            return;
        }

        if (!mb_check_encoding($data['payload'], 'utf-8')) {
            return;
        }
        //шлем всем сообщение, о том, что пишет один из клиентов
        $message = 'пользователь #' . intval($client) . ' (' . $this->pid . '): ' . strip_tags($data['payload']);
        $this->send($message);

        $this->sendHelper($message);
    }

    /**
     * @param $data
     */
    protected function onSend($data)
    {
        //вызывается при получении сообщения от мастера
        $this->sendHelper($data);
    }

    /**
     * @param $message
     */
    protected function send($message)
    {
        //отправляем сообщение на мастер, чтобы он разослал его на все воркеры
        @fwrite($this->master, $message);
    }

    /**
     * @param $data
     */
    private function sendHelper($data)
    {
        $data = $this->encode($data);

        $write = $this->clients;
        if (stream_select($read, $write, $except, 0)) {
            foreach ($write as $client) {
                @fwrite($client, $data);
            }
        }
    }
}
