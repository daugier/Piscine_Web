<?php
	include "database/get_csv.php";
	include "install.php";
	include "database/write_in_csv.php";
	session_start();
	$login = $_GET['login'];
	$dejavu = get_csv(("database/user.csv"), $login);
	if ($dejavu[0] == $login)
	{
		$dejavu[2] = 2;
		overwrite_in_csv("database/user.csv", $login, $dejavu);	
	}
	header( 'Location: '.host().'admin.php#' );
?>