<?php
include "write_in_csv.php";
include "get_csv.php";

function add_carte_au_panier($id)
{
	if (($handle = fopen("database/panier.csv", "r")) !== FALSE) {
		while ($data = fgetcsv($handle)) {
		if ($data[0] == $id)
			break ;
		}
	}
	fclose($handle);
	if ($data[0] == $id){
		$data[1]++;
		overwrite_in_csv("database/panier.csv", $id, $data);
	}
	else {
		$newarray = array($id, 1);
		write_in_csv("database/panier.csv", $newarray);
	}
}

function rm_carte_du_panier($id)
{
	$empty = array("");
	if (($handle = fopen("database/panier.csv", "r")) !== FALSE) {
		while ($data = fgetcsv($handle)) {
		if ($data[0] == $id)
			break ;
		}
	}
	fclose($handle);
	if ($data[0] == $id) {
		$data[1]--;
		overwrite_in_csv("database/panier.csv", $id, $data);
	}
	if ($data[1] == 0)
		overwrite_in_csv("database/panier.csv", $id, $empty);
}
?>