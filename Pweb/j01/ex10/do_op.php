#!/usr/bin/php
<?PHP
	if ($argc != 4)
	{
		echo "Incorrect Parameters\n";
	}
	else if ($argv[2] == "-")
	{
		$result = $argv[1] - $argv[3];
		echo "$result\n";
	}
	else if ($argv[2] == "+")
	{
		$result = $argv[1] + $argv[3];
		echo "$result\n";
	}
	else if ($argv[2] == "*")
	{
		$result = $argv[1] * $argv[3];
		echo "$result\n";
	}
	else if ($argv[2] == "/")
	{
		$result = $argv[1] / $argv[3];
		echo "$result\n";
	}
	else if ($argv[2] == "%")
	{
		$result = $argv[1] % $argv[3];
		echo "$result\n";
	}
?>
