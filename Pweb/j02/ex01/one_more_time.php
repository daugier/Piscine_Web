#!/usr/bin/php
<?php
	if ($argc == 1)
	{
		echo "\n";
		return (0);
	}
	else
	{
		$str = trim($argv[1]);
		$str2 = explode(" ", $str);
		$str = array_filter($str2);
		$i = 0;
		$len = count($str);
		foreach($str as $elem)
		{
			echo "$elem";
			if ($i < $len - 1)
				echo " ";
			$i++;
		}
	}
	echo "\n";
?>
