<?php
include "database/write_in_csv.php";
include "database/get_csv.php";

session_start();

if (($data = get_csv("database/user.csv", $_get["user_name"])) !== false) {
	$user = $data[0];
	$newdata($_get["user_name"], $_get["password"], $_get["droits"]);
	foreach ($newdata as $key) {
		if (!($newdata[$key])
			$newdata[$key] = $data[$key];
	}
	overwrite_in_csv("database/user.csv", $user, $newdata);
}
else {
	if ($_get["user_name"] && $_get["password"] && $_get["droits"])
		$newdata($_get["user_name"], $_get["password"], $_get["droits"]);
	write_in_csv("database/user.csv", $newdata);
}
?>