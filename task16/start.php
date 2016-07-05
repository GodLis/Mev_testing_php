<?php

namespace OlechkaBrajko\Task16;

require 'vendor/autoload.php';
include_once 'twitteroauth.php';

define('TWITTER_KEY', 'Fkg005U8zwXZ4CmbSPuXkZdsa');
define('TWITTER_SECRET', '427IHJZALKu3PYpUvUpDn7qHQPvrIcdfPDdRq9x9rTN8xPKXtE');

/**
 * Шаг 1
 * Получаем ссылку для регистрации нашего приложения к нужному аккаунту
 *
 * @return void
 */
function generateAuthLink()
{
    $oauth = new TwitterOAuth(TWITTER_KEY, TWITTER_SECRET);

    $request = $oauth->getRequestToken();

    $requestToken       = $request['oauth_token'];
    $requestTokenSecret = $request['oauth_token_secret'];

    $requestStr = 'request_token=' . $requestToken . "\n";
    $requestStr .= 'request_token_secret=' . $requestTokenSecret . "\n";

    $filename = fopen("request.txt", "a+");
//    fwrite($filename, $requestStr);

    if (is_writable($filename)) {
        if (!$handle = fopen($filename, 'a')) {
            echo "Не могу открыть файл ($filename)";
            exit;
        }

        if (fwrite($handle, $requestStr) ===false) {
            echo "Не могу произвести запись в файл ($filename)";
            exit;
        }

        echo "Ура! Записали ($requestStr) в файл ($filename)";
        fclose($handle);

    } else {
        echo "Файл $filename недоступен для записи";
    }



    // Создаем ссылку
    $registerURL = $oauth->getAuthorizeURL($request);
    // Показываем ссылку
    var_dump($registerURL);
}

generateAuthLink();

/**
 * Шаг 2
 * Получаем коды доступа
 *
 * @param  $requestToken Токен для запроса кодов дсотупа
 * @param  $requestTokenSecret Секретный токен для запроса кодов доступа
 * @param  $pin PIN доступа
 * @return void
 */
function generateOauthToken($requestToken, $requestTokenSecret, $pin)
{

    $oauth = new TwitterOAuth(TWITTER_KEY, TWITTER_SECRET, $requestToken, $requestTokenSecret);

    // Создаем коды доступа по PIN коду
    $request = $oauth->getAccessToken($pin);
    $accessToken       = $request['oauth_token'];
    $accessTokenSecret = $request['oauth_token_secret'];

    $requestStr = 'accessToken=' . $accessToken . "\n";
    $requestStr .= 'accessTokenSecret=' . $accessTokenSecret . "\n";

    file_put_contents('access.txt', $requestStr);

    echo "ok";
}