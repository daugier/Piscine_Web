<?php
include "database/write_in_csv.php";
include "database/get_csv.php";
include "install.php";

session_start();
$login = $_GET['login'];
$password = hash("whirlpool", $_GET['password']);
$newpass = hash("whirlpool", $_GET['newpassword']);
$dejavu = get_csv("database/user.csv", $login);
if ($dejavu[0] == $login && $dejavu[1] == $password)
{
	$dejavu[1] = $newpass;
	overwrite_in_csv("database/user.csv", $login, $dejavu);
	header( 'Location: '.host().'modif_count.php#' );
}
else
	header( 'Location: '.host().'modif_count.php#' );
?>