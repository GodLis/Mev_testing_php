<?php

namespace GodLis;

/**
 * Class WebsocketWorker
 * @package OlechkaBrajko\Task18
 */
abstract class WebsocketWorker
{
    /**
     * @var array
     */
    protected $clients = [];
    /**
     * @var
     */
    protected $server;
    /**
     * @var
     */
    protected $master;
    /**
     * @var int
     */
    protected $pid;
    /**
     * @var array
     */
    protected $handshakes = [];
    /**
     * @var array
     */
    protected $ips = [];

    /**
     * WebsocketWorker constructor.
     * @param $server
     * @param $master
     */
    public function __construct($server, $master)
    {
        $this->server = $server;
        $this->master = $master;
        $this->pid = posix_getpid();
    }

    /**
     *
     */
    public function start()
    {
        while (true) {
            //подготавливаем массив всех сокетов, которые нужно обработать
            $read = $this->clients;
            $read[] = $this->server;
            $read[] = $this->master;

            $write = [];
            if ($this->handshakes) {
                foreach ($this->handshakes as $clientId => $clientInfo) {
                    if ($clientInfo) {
                        $write[] = $this->clients[$clientId];
                    }
                }
            }

            stream_select($read, $write, $except, null);//обновляем массив сокетов, которые можно обработать

            if (in_array($this->server, $read)) { //на серверный сокет пришёл запрос от нового клиента
                //подключаемся к нему и делаем рукопожатие, согласно протоколу вебсокета
                if ($client = stream_socket_accept($this->server, -1)) {
                    $address = explode(':', stream_socket_get_name($client, true));
                    if (isset($this->ips[$address[0]]) && $this->ips[$address[0]] > 5) {
                        //блокируем более пяти соединий с одного ip
                        @fclose($client);
                    } else {
                        @$this->ips[$address[0]]++;

                        $this->clients[intval($client)] = $client;
                        $this->handshakes[intval($client)] = [];//отмечаем, что нужно сделать рукопожатие
                    }
                }

                //удаляем сервеный сокет из массива, чтобы не обработать его в этом цикле ещё раз
                unset($read[array_search($this->server, $read)]);
            }

            if (in_array($this->master, $read)) { //пришли данные от мастера
                $data = fread($this->master, 1000);

                $this->onSend($data);//вызываем пользовательский сценарий

                //удаляем мастера из массива, чтобы не обработать его в этом цикле ещё раз
                unset($read[array_search($this->master, $read)]);
            }

            if ($read) {
                //пришли данные от подключенных клиентов
                foreach ($read as $client) {
                    if (isset($this->handshakes[intval($client)])) {
                        if ($this->handshakes[intval($client)]) {
                            //если уже было получено рукопожатие от клиента
                            continue;
                            //то до отправки ответа от сервера читать здесь пока ничего не надо
                        }

                        if (!$this->handshake($client)) {
                            unset($this->clients[intval($client)]);
                            unset($this->handshakes[intval($client)]);
                            $address = explode(':', stream_socket_get_name($client, true));
                            if (isset($this->ips[$address[0]]) && $this->ips[$address[0]] > 0) {
                                @$this->ips[$address[0]]--;
                            }
                            @fclose($client);
                        }
                    } else {
                        $data = fread($client, 1000);

                        if (!$data) {
                            //соединение было закрыто
                            unset($this->clients[intval($client)]);
                            unset($this->handshakes[intval($client)]);
                            $address = explode(':', stream_socket_get_name($client, true));
                            if (isset($this->ips[$address[0]]) && $this->ips[$address[0]] > 0) {
                                @$this->ips[$address[0]]--;
                            }
                            @fclose($client);
                            $this->onClose($client);
                            //вызываем пользовательский сценарий
                            continue;
                        }

                        $this->onMessage($client, $data);
                        //вызываем пользовательский сценарий
                    }
                }
            }

            if ($write) {
                foreach ($write as $client) {
                    if (!$this->handshakes[intval($client)]) {
                        //если ещё не было получено рукопожатие от клиента
                        continue;
                        //то отвечать ему рукопожатием ещё рано
                    }
                    $info = $this->handshake($client);
                    $this->onOpen($client, $info);
                    //вызываем пользовательский сценарий
                }
            }
        }
    }

    /**
     * @param $client
     * @return bool|mixed
     */
    protected function handshake($client)
    {
        $key = $this->handshakes[intval($client)];

        if (!$key) {
            //считываем загаловки из соединения
            $headers = fread($client, 10000);
            preg_match("/Sec-WebSocket-Key: (.*)\n/", $headers, $match);

            if (empty($match[1])) {
                return false;
            }

            $key = $match[1];

            $this->handshakes[intval($client)] = $key;
        } else {
            //отправляем заголовок согласно протоколу вебсокета
            $SecWebSocketAccept = base64_encode(pack('H*', sha1($key . '258EAFA5-E914-47DA-95CA-C5AB0DC85B11')));
            $upgrade = "HTTP/1.1 101 Web Socket Protocol Handshake\n" .
                "Upgrade: websocket\n" .
                "Connection: Upgrade\n" .
                "Sec-WebSocket-Accept:$SecWebSocketAccept\n\n";
            fwrite($client, $upgrade);
            unset($this->handshakes[intval($client)]);
        }

        return $key;
    }

    /**
     * @param $payload
     * @param string $type
     * @param bool $masked
     * @return string
     */
    protected function encode($payload, $type = 'text', $masked = false)
    {
        $frameHead = [];
        $payloadLength = strlen($payload);

        switch ($type) {
            case 'text':
                $frameHead[0] = 129;
                break;

            case 'close':
                $frameHead[0] = 136;
                break;

            case 'ping':
                $frameHead[0] = 137;
                break;

            case 'pong':
                $frameHead[0] = 138;
                break;
        }

        if ($payloadLength > 65535) {
            $payloadLengthBin = str_split(sprintf('%064b', $payloadLength), 8);
            $frameHead[1] = ($masked === true) ? 255 : 127;
            for ($i = 0; $i < 8; $i++) {
                $frameHead[$i + 2] = bindec($payloadLengthBin[$i]);
            }
            if ($frameHead[2] > 127) {
                return ['type' => '', 'payload' => '', 'error' => 'frame too large (1004)'];
            }
        } elseif ($payloadLength > 125) {
            $payloadLengthBin = str_split(sprintf('%016b', $payloadLength), 8);
            $frameHead[1] = ($masked === true) ? 254 : 126;
            $frameHead[2] = bindec($payloadLengthBin[0]);
            $frameHead[3] = bindec($payloadLengthBin[1]);
        } else {
            $frameHead[1] = ($masked === true) ? $payloadLength + 128 : $payloadLength;
        }

        foreach (array_keys($frameHead) as $i) {
            $frameHead[$i] = chr($frameHead[$i]);
        }
        if ($masked === true) {
            $mask = [];
            for ($i = 0; $i < 4; $i++) {
                $mask[$i] = chr(rand(0, 255));
            }

            $frameHead = array_merge($frameHead, $mask);
        }
        $frame = implode('', $frameHead);

        for ($i = 0; $i < $payloadLength; $i++) {
            $frame .= ($masked === true) ? $payload[$i] ^ $mask[$i % 4] : $payload[$i];
        }

        return $frame;
    }

    /**
     * @param $data
     * @return array|bool
     */
    protected function decode($data)
    {
        $unmaskedPayload = '';
        $decodedData =[];

        $firstByteBinary = sprintf('%08b', ord($data[0]));
        $secondByteBinary = sprintf('%08b', ord($data[1]));
        $opcode = bindec(substr($firstByteBinary, 4, 4));
        $isMasked = ($secondByteBinary[0] == '1') ? true : false;
        $payloadLength = ord($data[1]) & 127;

        if (!$isMasked) {
            return ['type' => '', 'payload' => '', 'error' => 'protocol error (1002)'];
        }

        switch ($opcode) {
            case 1:
                $decodedData['type'] = 'text';
                break;

            case 2:
                $decodedData['type'] = 'binary';
                break;

            case 8:
                $decodedData['type'] = 'close';
                break;

            case 9:
                $decodedData['type'] = 'ping';
                break;

            case 10:
                $decodedData['type'] = 'pong';
                break;

            default:
                return ['type' => '', 'payload' => '', 'error' => 'unknown opcode (1003)'];
        }

        if ($payloadLength === 126) {
            $mask = substr($data, 4, 4);
            $payloadOffset = 8;
            $dataLength = bindec(sprintf('%08b', ord($data[2])) . sprintf('%08b', ord($data[3]))) + $payloadOffset;
        } elseif ($payloadLength === 127) {
            $mask = substr($data, 10, 4);
            $payloadOffset = 14;
            $tmp = '';
            for ($i = 0; $i < 8; $i++) {
                $tmp .= sprintf('%08b', ord($data[$i + 2]));
            }
            $dataLength = bindec($tmp) + $payloadOffset;
            unset($tmp);
        } else {
            $mask = substr($data, 2, 4);
            $payloadOffset = 6;
            $dataLength = $payloadLength + $payloadOffset;
        }
        
        
        if (strlen($data) < $dataLength) {
            return false;
        }

        if ($isMasked) {
            for ($i = $payloadOffset; $i < $dataLength; $i++) {
                $j = $i - $payloadOffset;
                if (isset($data[$i])) {
                    $unmaskedPayload .= $data[$i] ^ $mask[$j % 4];
                }
            }
            $decodedData['payload'] = $unmaskedPayload;
        } else {
            $payloadOffset = $payloadOffset - 4;
            $decodedData['payload'] = substr($data, $payloadOffset);
        }

        return $decodedData;
    }

    /**
     * @param $client
     * @param $info
     * @return mixed
     */
    abstract protected function onOpen($client, $info);

    /**
     * @param $client
     * @return mixed
     */
    abstract protected function onClose($client);

    /**
     * @param $client
     * @param $data
     * @return mixed
     */
    abstract protected function onMessage($client, $data);

    /**
     * @param $data
     * @return mixed
     */
    abstract protected function onSend($data);

    /**
     * @param $data
     * @return mixed
     */
    abstract protected function send($data);
}
