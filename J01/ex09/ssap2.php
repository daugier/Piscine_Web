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
	function is_sort($s1, $s2)
	{
		$s1 = strtolower($s1);
		$s2 = strtolower($s2);
		$i = 0;
		$sort = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
			'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
			'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
		$length = strlen($s1) < strlen($s2) ? strlen($s1) : strlen($s2);
		while  ($i < $length)
		{
			$sa = $s1[$i];
			$sb = $s2[$i];
			$ia = array_search($sa, $sort);
			$ib = array_search($sb, $sort);
			if ($ia === FALSE)
				$ia = ord($sa) + 100;
			if ($ib === FALSE)
				$ib = ord($sb) + 100;
			if ($ib < $ia)
				return false;
			if ($ib > $ia)
				return true;
			$i++;
		}
		if (strlen($s1) <= strlen($s2))
			return (TRUE);
		return (FALSE);
	}
	$i = 1;
	$array = array();
	while($i < count($argv))
	{
		$tab = ft_split($argv[$i]);
		$array = array_merge($array, $tab);
		$i++;
	}
	$i = 0;
	while ($i < count($array) - 1)
	{
		if (is_sort($array[$i], $array[$i + 1])) 
			$i++;
		else
		{
			$tmp = $array[$i];
			$array[$i] = $array[$i + 1];
			$array[$i + 1] = $tmp;
			$i = 0;
		}
	}
	foreach ($array as $elem)
		echo $elem."\n";
?>
