<?php
	include "database/write_in_csv.php";
	include "install.php";
	include "database/get_csv.php";
function rm_card_in_type($card_name, $type)
{
	if (is_numeric($card_name) == true)
		$id = $card_name;
	else 
	{
		if (($handle = fopen("database/card.csv", "r")) !== FALSE)
		{
			while (($data = fgetcsv($handle)) !== FALSE)
			{
				if ($data[1] == $card_name)
					break ;
			}
		}
		fclose($handle);
		$id = $data[0];
	}
	$i = 1;
	$type = get_csv("database/type_of_card.csv", $type);
	if ($type)
	{
		while ($type[$i])
		{
			if ($type[$i] == $id)
			{
				$type[$i] = "";
				overwrite_in_csv("database/type_of_card.csv", $i, $type);
			}
			$i++;
		}
	}
}
session_start();
$id_carte = $_GET['carte_id'];
$id_type = $_GET['type_id'];
rm_card_in_type($id_carte, $id_type);
header( 'Location: '.host().'admin.php#' );
?>
