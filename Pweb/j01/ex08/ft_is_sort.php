#!/usr/bin/php
<?php
	function ft_is_sort($tab)
	{
		$tmp = $tab;
		sort($tab);
		if ($tmp != $tab)
			return (0);
		return (1);
	}
?>
