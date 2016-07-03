<?php
//
//namespace OlechkaBrajko\task16;
//
//require "vendor/autoload.php";
//
//$username = "olechkabrajko";
//$maxpost = '10';
//$html = file_get_html("https://twitter.com/" .$username);
//$i = '0';
//foreach ($html->find('li.expanding-stream-item') as $article) {
//    $item['time'] = $article->find('small.time', 0)->innertext;
//    $item['text'] = $article->find('p.js-tweet-text', 0)->innertext;
//
//    $article[]=$item;
//    $i++;
//    if ($i == $maxpost) {
//        break;
//    }
//}

//$username = 'TutsPlusCode';
//$user_info = simplexml_load_file('https://twitter.com/TutsPlusCode');
//$user_id = $user_info[0]->id;
//$timeline = simplexml_load_file('http://twitter.com/statuses/user_timeline/'.$user_id.'.rss');
//$count = 3;
//for ($i=0; $i<$count; $i++) {
//    echo date('d.m.Y G:i', strtotime($timeline->channel->item[$i]->pubDate));
//    echo $timeline->channel->item[$i]->title;
//    echo $timeline->channel->item[$i]->link;
//}
//@file_get_contents('http://google.ru');
//var_dump($http_response_header);
//
//urlencode('http://twitter.com/statuses/user_timeline/id.format?count=20');
//$link = 'http://twitter.com/statuses/user_timeline/iwebwin.json';
//$json = file_get_contents($link);
//$massive = array();
//$massive = json_decode($json);
//print_r($massive);


//@file_get_contents('https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=<olechkabrajko>');
//var_dump($http_response_header);
//

//$str = file_get_contents ('https://twitter.com/TutsPlusCode');
//print_r($str);

