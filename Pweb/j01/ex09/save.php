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
	$num_a = array();
	$letter_n = array();
	$ascii = array();
	foreach($finish as $elem)
	{
		if (ctype_alpha($elem))
			$letter[] = $elem;
		else if (ctype_alpha($elem[0]))
			$letter_n[] = $elem;
		else if (is_numeric($elem))
			$num[] = $elem;
		else if (is_numeric($elem[0]))
			$num_a[] = $elem;
		else
			$ascii[] = $elem;
	}
	$i = 0;
	while ($num[$i + 1])
	{
		$s1 = $num[$i];
		$s2 = $num[$i + 1];
		if (strcmp($s1, $s2) > 0)
		{
			$num[$i] = $s2;
			$num[$i + 1] = $s1;
			$i = 0;
		}
		$i++;
	}
	natcasesort($letter);
	sort($letter_n, SORT_NUMERIC);
	natcasesort($num_a);
	natcasesort($ascii);
	natcasesort($letter_n);
	$end = array();
	$end = array_merge($letter, $letter_n);
	$end = array_merge($end, $num);
	$end = array_merge($end, $num_a);
	$end = array_merge($end, $ascii);
	foreach($end as $fi)
		echo "$fi\n";
?>
