#!/usr/bin/php
<?php
	function ft_split($elem)
	{ 
		$tab = trim($elem);
		while (strstr($tab, "  "))
			$tab = str_ireplace("  ", " ", $tab);
		$end = explode(" ", $tab);
		sort($end);
		return ($end);
	}
	$finish = array();
	$i = 1;
	while ($i < count($argv))
	{
		$tab = ft_split($argv[$i]);
		$finish = array_merge($finish, $tab);
		$i++;
	}
	sort($finish);
	foreach($finish as $fi)
		echo "$fi\n";
?>
