#!/usr/bin/php
<?php
	function ft_split($elem)
	{ 
		if ($elem)
		{
			$tab = trim($elem);
			while (strstr($tab, "  "))
				$tab = str_ireplace("  ", " ", $tab);
			$end = explode(" ", $tab);
			sort($end);
			return ($end);
		}
	}
?>
