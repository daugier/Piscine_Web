<?php

$prix = 0;
if (($handle = fopen("database/card.csv", "r")) !== FALSE)
	{
		while (($data = fgetcsv($handle)) !== FALSE)
		{
			$prix = $prix + $data[];
		}
	}
fclose($handle);
?>