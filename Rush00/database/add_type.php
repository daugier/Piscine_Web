<?php
include "write_in_csv.php";
include "get_id.php";
include "database/get_csv.php";

function add_type($type)
{
	$id = get_id("database/type_of_card.csv");
	$type_of_card = array($id, $type);
	write_in_csv("database/type_of_card.csv", $type_of_card);
}

function add_card_type($card_id, $type_id)
{
	$newdata = get_csv("database/type_of_card.csv", $type_id);
	while ($newdata[$i])
		$i++;
	$newdata[$i++] = $card_id;
	overwrite_in_csv("database/type_of_card.csv", $type_id, $newdata);
}
?>