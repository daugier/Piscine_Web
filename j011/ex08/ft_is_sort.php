#!/usr/bin/php
<?php
	function ft_is_sort($tab)
	{
		$tmp = $tab;
		sort($tab);
		$lol = array_reverse($tab);
		if ($tab != $tmp && $tmp != $lol)
			return (0);
		return (1);
	}
?>
