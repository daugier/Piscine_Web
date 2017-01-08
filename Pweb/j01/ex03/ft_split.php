#!/usr/bin/php
<?php
	function ft_split($elem)
	{ 
		$tab = explode(" ", $elem);
		$end = array_filter($tab);
		sort($end);
		return ($end);
	}
?>
