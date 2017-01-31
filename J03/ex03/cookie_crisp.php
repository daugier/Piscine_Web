<?php
	if ($_GET)
	{
		if ($_GET['action'] == "set")
			setcookie($_GET['name'], $_GET['value'], time() + (7 * 24 * 60 * 60));
		if ($_GET['action'] == "get")
		{
			if ($_COOKIE[$_GET['name']] != NULL)
				echo ($_COOKIE[$_GET['name']])."\n";
		}
		if ($_GET['action'] == "del")
			setcookie($_GET['name'], "", -1);
	}
?>
