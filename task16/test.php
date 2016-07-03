<?php

	require 'vendor/autoload.php';
	require 'MyCurl.php';
	use PHPHtmlParser\Dom;

	$dom = new Dom;
	$dom->loadFromUrl('https://twitter.com/poroshenko', [], new MyCurl);
	$html = $dom->outerHtml;
	$tweets = $dom->find('#timeline .tweet-text');
	foreach($tweets as $tweet) {
		print iconv('UTF-8', 'CP866//IGNORE', $tweet->text);
		print "\n\n";
	}

?>