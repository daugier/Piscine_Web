<?php
include "database/add_user.php";
include "install.php";
include "database/clear_csv.php";

session_start();
$login = $_GET['login'];
$password = $_GET['password'];
$dejavu = get_csv("database/user.csv", $login);
if ($dejavu[0] == $login && $dejavu[1] == hash("whirlpool", $password))
{
	rm_user($_GET['login']);
	$_SESSION["logged_on_user"] = 0;
	clear_csv("database/panier.csv");
	header( 'Location: '.host().'index.php#' );
}
else
	header( 'Location: '.host().'modif_count.php#' );
?>