<?php
include "write_in_csv.php";
include "get_csv.php";
function add_user($login, $password)
{
	$dejavu = get_csv("database/user.csv", $login);
	if ($dejavu[0] == $login)
		return false;
	$user = array($login, hash("whirlpool", $password), "1");
	write_in_csv("database/user.csv", $user);
}

function rm_user($login)
{
	$empty = array("");
	overwrite_in_csv("database/user.csv", $login, $empty);	
}
?>
