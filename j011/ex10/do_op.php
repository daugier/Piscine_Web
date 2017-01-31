#!/usr/bin/php
<?PHP
	if ($argc != 4)
	{
		echo "Incorrect Parameters\n";
	}
	else if ($argv[1] && $argv[2] && $argv[3])
	{	
		$nb1 = trim($argv[1]);
		$ope = trim($argv[2]);
		$nb2 = trim($argv[3]);
		if ($ope == '-' || $ope == '+' || $ope == '/' || $ope == '*' ||
			$ope == '%')
		{
			if ($ope == "-")
				$result = $nb1 - $nb2;
			else if ($ope == "+")
				$result = $nb1 + $nb2;
			else if ($ope == "*")
				$result = $nb1 * $nb2;
			else if ($ope == "/")
			{
				if ($nb2 == 0)
					exit;
				$result = $nb1 / $nb2;
			}
			else if ($ope == "%")
			{
				if ($nb2 == 0)
					exit;
				$result = $nb1 % $nb2;
			}
			echo "$result\n";
		}
	}
?>
