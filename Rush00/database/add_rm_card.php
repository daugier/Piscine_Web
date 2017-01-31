<?php
include "write_in_csv.php";
include "get_id.php";

function add_card($card_name, $img, $license, $price, $stock)
{
	$id = get_id("database/card.csv");
	$cardinfo = array($id, $card_name, $img, $license, $price, $stock);
	write_in_csv("database/card.csv", $cardinfo);
}

function rm_card($id)
{
	$empty = array("");
	overwrite_in_csv("database/card.csv", $id, $empty);
	update_id("database/card.csv");
	if (($handle = fopen("type.csv", "r")) !== FALSE)
		{
			while (($data = fgetcsv($handle)) !== FALSE)
			{
				rm_card_in_type($id, $data[0]);
			}
		}
	fclose($handle);
}
?>