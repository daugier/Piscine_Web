#!/usr/bin/php
<?php
	function ft_split($elem)
	{ 
		$tab = trim($elem);
		while (strstr($tab, "  "))
			$tab = str_ireplace("  ", " ", $tab);
		$end = explode(" ", $tab);
		return ($end);
	}
	if ($argv[1])
	{
		$finish = ft_split($argv[1]);
		$first  =  array_shift($finish);
		foreach($finish as $fi)
			echo "$fi ";
		echo "$first\n";
	}
?>
