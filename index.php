<?php

require __DIR__ .'/vendor/autoload.php';

print( "Please enter number the expression : " ."\n".
"    1 - seach the sum of the elements in the array" ."\n".
"    2 - search the minimum and maximum array elements" ."\n".
"    3 - sort the array (quicksort + built-in function)" ."\n".
"    4 - finds the common elements of two arrays" ."\n".
"    5 - print all of the N-length sequences of the numbers 1,2..M" ."\n".
"    7 - print all numbers of lucky tickets for a given length" ."\n".
"    8 - parses and evaluates mathematical expressions with parentheses" ."\n".
"    9 - сhecks the occurrence of a substring in the string" ."\n".
"    10 - removes the spaces from the string" ."\n".
"    11 - checks whether the word is a palindrome" ."\n".
"    12 - finds the difference between 2 dates" ."\n".
"    13 - defines on which day of the week Programmer's Day drops out for a random year" ."\n".
"    14 - displays a list of the all files in the given directory in the form of deployed tree" ."\n".
"    15 - reads the HTML page (with the real site) and download to your local directory all images that 
         are displayed on it" ."\n".
"    16 - lists all user tweets @nettuts and writes them to an Excel file with 2 columns (Published Date,
         Message)" ."\n".
"    17 - executes direct and reverse geocoding" ."\n".
"    18 - implement a simple console chat server with using sockets" ."\n".
"    19 - create a watermark (logo Mev) on a picture" ."\n");

$num = readline();
if (!empty($num)) {
    eval('$num = ' . $num . ';');
}

switch ($num) {
    case 1:
        $arr[10] = [];
        for ($i = 0;
             $i < count($arr);
             $i++) {
            $arr[$i] = mt_rand(5, 15);
        }
        print_r($arr);
    
        $result1 = new \GodLis\Task1\SumElementsOfArray();
        echo $result1->arraySum($arr)."\n";
    
        $result2 = new \GodLis\Task1\SumElementsOfArrayV2();
        echo $result2->arraySum($arr)."\n";
        break;
    
    case 2:
        $k = random_int(1, 20);
        $arr[$k] = [];
        for ($i=0; $i<$k; $i++) {
            $arr[$i] = random_int(1, 50);
            echo $arr[$i] ." ";
        }
        $result = new \GodLis\Task2\FindElementsMinAndMax();
        echo "\n Method1: \n";
        echo $result->seachMaxElement($arr) ."\n";
        echo $result->seachMinElement($arr) ."\n";
    
        $result2 = new \GodLis\Task2\FindElementsMinAndMaxV2();
        echo " Method2: \n";
        echo $result2->seachMaxElement($arr) ."\n";
        echo $result2->seachMinElement($arr) ."\n";
        break;
    
    case 3:
        $k = mt_rand(5, 20);
        $array[$k] = [];
        for ($i=0; $i<$k; $i++) {
            $arrayToQuickSort[$i] = $array[$i] = random_int(1, 50);
        };

        echo "Массив до сортировки:\n";
        for ($i=0; $i<$k; $i++) {
            echo ($array[$i] ." ");
        }

        echo "\nCортировка встроенной функцией:\n";
        if (!empty($array)) {
            sort($array);
        }
        for ($i=0; $i<$k; $i++) {
            echo $array[$i] ." ";
        }
    
        echo "\nБыстрая сортировка:\n";
        $tmp = new \GodLis\Task3\QuickSort();
        if (!empty($arrayToQuickSort)) {
            $tmp->quickSort($arrayToQuickSort);
        }
        for ($i=0; $i<$k; $i++) {
            echo $arrayToQuickSort[$i] ." ";
        }
        echo "\n";
        break;
    
    case 4:
        $k = mt_rand(20, 30);
        $array1[] = [];
        $array2[] = [];
    
        for ($i=0; $i<$k; $i++) {
            $array1[$i] = random_int(1, 30);
            $array2[$i] = random_int(1, 30);
        };
    
        echo "Массив 1\n";
        for ($i=0; $i<$k; $i++) {
            echo ($array1[$i] ." ");
        };
    
        echo "\nМассив 2\n";
        for ($i=0; $i<$k; $i++) {
            echo ($array2[$i] ." ");
        };
    
        echo "\nНахождение общих елементов функцией 'array_intersect':\n";
        print_r($result = array_intersect($array1, $array2));
    
        echo "Нахождение общих елементов функцией пользователя:\n";
        $tmp = new \GodLis\Task4\UserFunction();
        print_r($tmp->userFunction($array1, $array2));
        break;
    
    case 5:
        $tmp = new \GodLis\Task5\MainClass();
        $mas = [];
        $m = mt_rand(4, 6);
        $n = mt_rand(2, 4);
        $tmp->perebor(0, $mas, $n, $m);
        break;

    case 7:
        $length = 6;
        $Res = new \GodLis\Task7\HappyTickets();
        echo $Res->lNum($length);
        break;
    
    case 8:
        $tmp = new \GodLis\Task8\MathExp();
        echo $tmp->mathExp() ."\n";
        break;

    case 9:
        $subject = "abcdef sdjfvh jbc ";
        $part = 'def';
        $pattern = '/^'.$part.'/';
    
        echo "Строка: ";
        echo $subject ."\n";
        echo "Подстрока: ";
        echo $pattern ."\n";
    
        $tmp = new \GodLis\Task9\RegExpStr();
        echo "Поиск RegExp: ";
        echo $res = $tmp->regExpStr($pattern, $subject) ."\n";
    
        $tmp = new \GodLis\Task9\UserSeachStr();
        echo "Поиск вручную: ";
        $tmp->userSeachStr($part, $subject) ."\n";
        break;
    
    case 10:
        $str = "35435B 5466 3  33A65";
        echo "Строка с пробелами:" ."\n";
        echo $str ."\n";
    
        $tmp = new \GodLis\Task10\StrDeleteV1();
        echo "Способ 1:" ."\n";
        echo $tmp->strDeleteV1($str) ."\n";
    
        $tmp = new \GodLis\Task10\StrDeleteV2();
        echo "Способ 2:" ."\n";
        echo $tmp->strDeleteV2($str) ."\n";
        break;
    
    case 11:
        $word = 'kazak';
        echo $word ."\n";
        $sr = floor(strlen($word)/2);
        $k = strlen($word);
    
        echo "Variant 1:" ."\n";
        $tmp = new \GodLis\Task11\PalindromV1();
        echo $tmp->palindromV1($word, $sr, $k) ."\n";
    
        echo "Variant 2:" ."\n";
        $tmp = new \GodLis\Task11\PalindromV2();
        echo $tmp->palindromV2($word) ."\n";
        break;
    
    case 12:
        $datetime1 = new \DateTime('1996-01-19');
        $datetime2 = new \DateTime('now', new \DateTimeZone('UTC'));
    
        $tmp = new \GodLis\Task12\DataClass();
        echo "Difference between 2 dates is ". $tmp->data($datetime1, $datetime2)->format('%R%a days') ."\n";
        break;

    case 13:
        $y = mt_rand(1996, 2016);
    
        $tmp = new \GodLis\Task13\ProgrammerDay();
        echo $tmp->programerDay($y) ."\n";
        break;
    
    case 14:
        $tmp = new \GodLis\Task14\ScanDir();
        $res = $tmp-> scanDir("/home/godlis/Mev/Mev_testing_php/task14/vendor/");
        for ($i = 0; $i<count($res); $i++) {
            echo $res[$i] ."\n";
        }
        break;
    
    case 15:
        $url = "http://lifeexample.ru/";
        $tmp = new \GodLis\Task15\Parsing();
        $tmp->parsing($url);
        break;
    
    case 16:
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
        break;
    
    case 17:
        $geo = 'https://geocode-maps.yandex.ru/1.x/?geocode=Украина,+Черкассы,+Пушкина+улица,+дом+100)';
        $backGeo = 'https://geocode-maps.yandex.ru/1.x/?geocode=30.610803, 59.745966';
        $tmp = new \GodLis\Task17\Geocoding();
        $tmp->geocoding($geo, $backGeo);
        break;

    case 18:
        $config = [
            'host' => '0.0.0.0',
            'port' => 8000,
            'workers' => 1,
        ];
    
        $WebsocketServer = new \GodLis\Task18\WebsocketServer($config);
        $WebsocketServer->start();
        break;
    
    case 19:
        $sOrigImg = "/home/godlis/Mev/Mev_testing_php/task19/image.jpg";
        $sWmImg = "/home/godlis/Mev/Mev_testing_php/task19/watermark.png";

        $tmp = new \GodLis\Task19\Watermark();
        $tmp->watermark($sOrigImg, $sWmImg);
        break;
}
