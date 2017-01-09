#!/usr/bin/php
<?php
	function ft_split($elem)
	{
		$tab = explode(" ", $elem);
		$end = array_filter($tab);
		return ($end);
	}
	$finish = array();
	$i = 0;
	foreach($argv as $elem)
	{
		if ($i > 0)
		{
			$tab = ft_split($elem);
			$finish = array_merge($finish, $tab);
		}
		$i++;
	}
	sort($finish);
	foreach($finish as $fi)
		echo "$fi\n";
?>
