#!/usr/bin/php
<?php
	$explode = explode(" ", $argv[1]);
	$tab = array_filter($explode);
	foreach($tab as $elem)
	{
		echo "$elem";
		if(end($tab) == $elem)
			echo"\n";
		else
			
			echo " ";
	}
?>
