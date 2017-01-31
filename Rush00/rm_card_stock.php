<?php
	include "database/get_csv.php";
	include "install.php";
	include "database/write_in_csv.php";
	session_start();
	$id = $_GET['id'];
	$dejavu = get_csv(("database/card.csv"), $id);
	$empty = array("");
	if ($dejavu[0] == $id)
	{
		overwrite_in_csv("database/card.csv", $id, $empty);	
	}
	header( 'Location: '.host().'admin.php#' );
?>