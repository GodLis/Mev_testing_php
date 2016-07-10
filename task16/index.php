<?php

ini_set('display_errors', 1);

require __DIR__ .'/vendor/autoload.php';

$xls = new PHPExcel();
$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
$sheet->setTitle('GetTweets');

$sheet->getColumnDimension('A')->setWidth(20);
$sheet->getColumnDimension('B')->setWidth(140);

$k =1;
// Вставляем текст в ячейку A1
//$sheet->setCellValue("A".$k, 'Published Date');
//$sheet->setCellValue("B".$k, 'Message');
//
//$objWriter = new PHPExcel_Writer_Excel5($xls);
//$objWriter->save('tweets.xls');
//$k=2;

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = [
    'oauth_access_token' => "2282217062-7NdX0yvn90OpvZMgcieGdrkzlLHK2pepkIf8g5W",
    'oauth_access_token_secret' => "oBHJEMM1fvntVH86rCoXgV2zj2VySPAxjO2WNiUnvh7sJ",
    'consumer_key' => "0zbeGaglBMBjmk8K5ps9yZncm",
    'consumer_secret' => "ILaPrj7xKdpBlqq8q3Dw3kcJKnIL1tVFipNy5cVeP7ulcZsboY"
];

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

$requestMethod = 'GET';
$twitter = new \j7mbo\Task16\TwitterAPIExchange($settings);

$getfield = '?screen_name=TutsPlusCode';
$json = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
$data = json_decode($json, true);
$id = $data[0]["id"];

$id++;

$LIMIT = 200;
do {
    $reqestID = $id - 1;
    $getfield = "?screen_name=TutsPlusCode
		&count={$LIMIT}
		&max_id={$reqestID}";
    $json = $twitter->setGetfield($getfield)
         ->buildOauth($url, $requestMethod)
         ->performRequest();
    $data = json_decode($json, true);
    $id = end($data)["id"];
    foreach ($data as $record) {
        $text = $record["text"];
        $datetime = new DateTime($record["created_at"]);
        $strdate = $datetime->format('Y-m-d H:i:s');
        $sheet->setCellValue("A".$k, "{$strdate}");
        $sheet->setCellValue("B".$k, "{$text}");
        $k++;
        $objWriter = new PHPExcel_Writer_Excel5($xls);
        $objWriter->save('tweets.xls');
        print("{$strdate}: {$text}\n");
    }
} while (count($data == $LIMIT));
