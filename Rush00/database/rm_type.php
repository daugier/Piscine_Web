<?php
include "write_in_csv.php";
include "get_id.php";

function rm_type($id)
{
	$empty = array("");
	overwrite_in_csv("database/type_of_card.csv", $id, $empty);
}
?>