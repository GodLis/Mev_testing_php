<?php

namespace GodLis\Task15;

/**
 * Class Parsing
 * @package GodLis
 */
class Parsing
{
    public function parsing($url)
    {
//        $url="http://lifeexample.ru/";

        /**
         * @param $url
         * @return mixed
         */
        function getContentPage($url)
        {
            $url2 = $url;
            $c = curl_init($url);
            curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
            $text = curl_exec($c);
            curl_close($c);
            return $text;
        }
        
        preg_match_all("'<img\s+src=\"(\S*.(png|jpg))\"'si", getContentPage($url), $result);
        foreach ($result[1] as $name) {
            $row['image'][]=$name;
        }
        $k=0;

        if (!empty($row)) {
            while ($k<=(count($row['image'])-1)) {
                $url=$row['image'][$k];
                $name= $row['image'][$k];
                $name=str_replace("http://lifeexample.ru/", "", $name);
                echo ($k+1).") Image save: ".$name."\n";
                $dir="";
                $result1=explode("/", $name);
                for ($i=0; $i<=(count($result1)-2); $i++) {
                    if (!file_exists($dir.$result1[$i])) {
                        mkdir($dir.$result1[$i], 0777);
                    }
                    $dir.=$result1[$i]."/";
                }
                copy($url, $name);
                $k++;
            }
        }
    }
}
