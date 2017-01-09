#!/usr/bin/php
<?php
	function my_cmp($s1, $s2)
	{
		$i = 0;
		$s1 = strtolower($s1);
		$s2 = strtolower($s2);
		if (!strcmp($s1, $s2))
			return (0);
		while ($s1[$i] && $s1[$i] == $s2[$i])
			$i++;
		$s1 = $s1[$i];
		$s2 = $s2[$i];
		$s1 = ord($s1);
		$s2 = ord($s2);
		if ($s1 > 96 && $s1 < 123)
			$s1 += 10000;
		if ($s2 > 96 && $s2 < 123)
			$s2 += 10000;
		if ($s1 > 47 && $s1 < 58)
			$s1 += 1000;
		if ($s2 > 47 && $s2 < 58)
			$s2 += 1000;
		if ($s1 > $s2)
			return (-1);
		return (1);
	}
	$i = 0;
	$finish = array();
	foreach($argv as $elem)
	{
		if ($i > 0)
		{
			$tab = trim($elem);
			$tab1 = explode(" ", $tab);
			$tab2 = array_filter($tab1);
			$finish = array_merge($finish, $tab2);
		}
		$i++;
	}
	usort($finish, "my_cmp");
	foreach($finish as $fi)
		echo "$fi\n";
?>
