#!/usr/bin/php
<?php
	function ft_split($elem)
	{
		$tab = explode(" ", $elem);
		$end = array_filter($tab);
		return ($end);
	}
	$finish = ft_split($argv[1]);
	$first  =  array_shift($finish);
	foreach($finish as $fi)
		echo "$fi ";
	echo "$first\n";
?>
