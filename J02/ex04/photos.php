#!/usr/bin/php
<?php
if ($argc > 1)
{
	$site = curl_init($argv[1]);
	curl_setopt($site, CURLOPT_RETURNTRANSFER, true);
	curl_setopt( $site, CURLOPT_HEADER, FALSE);
	$str = curl_exec($site);
	preg_match_all('/<img.*?src=\"(.*?)\"/si', $str, $match);
	$url = (strstr($argv[1], "http://")) ?  substr($argv[1], strlen("http://"))
		: substr($argv[1], strlen("https://"));
	if (file_exists($url) == FALSE)
		mkdir($url);
	foreach ($match[1] as $elem)
	{
		$elem = preg_replace( '/^\/\//', "http://".$url."/", $elem);
		$elem = preg_replace( '/^\//', "http://".$url."/", $elem);
		$imgname =  substr(strrchr($elem,"/" ), 1 );
		$img = curl_init($elem);
		curl_setopt($img, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($img, CURLOPT_HEADER, 0);
		curl_setopt($img, CURLOPT_BINARYTRANSFER,1);
		$end = curl_exec($img);
		$fd = fopen($url."/".$imgname,'wb');
		fwrite($fd, $end);
	}
	curl_close($site);
}
?>
