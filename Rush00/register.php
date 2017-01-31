<?php
include "install.php";
include "database/add_user.php";

session_start();

if (!$_GET["login"] || !$_GET["password"])
{
	if ($_SESSION["logged_on_user"] == 2)
	    header( 'Location: '.host().'admin.php#' );
	else
    	header( 'Location: '.host().'index.php#' );
	return false;
}
else
{
	add_user($_GET['login'], $_GET['password']);
	if ($_SESSION["logged_on_user"] == 2)
	    header( 'Location: '.host().'admin.php#' );
	else
	    header( 'Location: '.host().'index.php#' );
}
?>
