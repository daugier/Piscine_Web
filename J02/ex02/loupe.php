#!/usr/bin/php
<?php
	$file = file_get_contents($argv[1]);
	preg_match_all('/<a(.*?)<\/a>/', $file, $match);
	$i = 0;
	while ($i < count($match[0]))
	{
		preg_match_all('/>(.*?)</', $match[0][$i], $title);
		$j = 0;
		while ($j < count($title[1]))
		{
			$file = str_replace($title[1][$j],strtoupper($title[1][$j]),$file);
			$j++;
		}
		$i++;
	}
	$i = 0;
	while ($i < count($match[1]))
	{
		preg_match_all('/title="(.*?)"/', $match[1][$i], $title);
		$j = 0;
		while ($j < count($title[1]))
		{
			$file = str_replace($title[1][$j],strtoupper($title[1][$j]),$file);
			$j++;
		}
		$i++;
	}
	echo "$file";
?>