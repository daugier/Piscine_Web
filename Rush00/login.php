<?php

include "database/get_csv.php";
include "install.php";

function auth($login, $password)
{
	if (!$login || !$password)
		return false;
	if (!file_exists("database/user.csv"))
		return false;
	if (($data = get_csv("database/user.csv", $login)) !== false)
	{
		if ($data[1] == hash("whirlpool", $password))
			return $data[2];
	}
	return false;
}

session_start();

$_SESSION["logged_on_user"] = auth($_GET["login"], $_GET["password"]);
header( 'Location: '.host().'index.php#' );

?>
