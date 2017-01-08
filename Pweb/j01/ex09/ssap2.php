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
	$num = array();
	$letter = array();
	$ascii = array();
	foreach($finish as $elem)
	{
		if (is_numeric($elem))
			$num[] = $elem;
		else if (ctype_alpha($elem))
			$letter[] = $elem;
		else
			$ascii[] = $elem;
	}
	krsort($num);
	natcasesort($letter);
	natcasesort($ascii);
	$end = array();
	$end = array_merge($letter, $num);
	$end = array_merge($end, $ascii);
	foreach($end as $fi)
		echo "$fi\n";
?>
