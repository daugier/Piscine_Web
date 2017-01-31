#!/usr/bin/php
<?php
	function my_exit()
	{
		echo "Wrong Format\n";
		exit (0);
	}
	function check_month($month)
	{
		$res = 0;
		if ($month == "Janvier" || $month == "janvier")
			$res = 1;
		if ($month == "fevrier" || $month == "Fevrier" || $month == "Février"
			|| $month == "février")
			$res = 2;
		if ($month == "Mars" || $month == "mars")
			$res = 3;
		if ($month == "Avril" || $month == "avril")
			$res = 4;
		if ($month == "Mai" || $month == "mai")
			$res = 5;
		if ($month == "Juin" || $month == "juin")
			$res = 6;
		if ($month == "Juillet" || $month == "juillet")
			$res = 7;
		if ($month == "Aout" || $month == "aout" || $month == "Août"
			|| $month == "août")
			$res = 8;
		if ($month == "Septembre" || $month == "septembre")
			$res = 9;
		if ($month == "Octobre" || $month == "octobre")
			$res = 10;
		if ($month == "Novembre" || $month == "novembre")
			$res = 11;
		if ($month == "decembre" || $month == "Décembre"
			|| $month == "Decembre" || $month == "décembre")
			$res = 12;
		return ($res);
	}
	function check_annee($annee)
	{
		if (!is_numeric($annee))
			return (0);
		if ($annee > 9999 || $annee < 0)
			return (0);
		return (1);
	}
	function check_day($day)
	{
		$day_ref = array("Lundi","lundi","Mardi","mardi","Mercredi","mercredi",
			"Jeudi","jeudi","Vendredi","vendredi","Samedi","samedi","Dimanche",
			"dimanche");
		$i = 0;
		$res = 0;
		while ($i < count($day_ref))
		{
			if ($day == $day_ref[$i])
				$res = 1;
			$i++;
		}
		return ($res);
	}
	function check_num_day($num)
	{
		if (!is_numeric($num) || strlen($num) > 2)
			return (0);
		if ($num < 1 || $num > 31)
			return (0);
		return ($num);
	}
	function check_hour($hour)
	{
		$tab = explode(":", $hour);
		$res = -1;
		if (count($tab) != 3)
			return (-1);
		if (!is_numeric($tab[0]) || !is_numeric($tab[1]) ||
			!is_numeric($tab[2]))
			return (-1);
		if (strlen($tab[0]) != 2 || strlen($tab[1]) != 2||
			strlen($tab[2]) != 2)
			return (-1);
		if ($tab[0] > 23 || $tab[0] < 0)
			return (-1);
		if ($tab[1] > 59 || $tab[1] < 0)
			return (-1);
		if ($tab[2] > 59 || $tab[2] < 0)
			return (-1);
		$res = $tab[2] + ($tab[1] * 60) + ($tab[0] * 3600);
		return ($res);
	}
	if ($argc == 2)
	{
		$tab = explode(" ", $argv[1]);
		if (count($tab) != 5)
			my_exit();
		$month = check_month($tab[2]);
		if (!$month)
			my_exit();
		if (!check_annee($tab[3]))
			my_exit();
		if ((!check_day($tab[0])))
			my_exit();
		if ((!($day = check_num_day($tab[1]))))
			my_exit();
		if ((($hour = check_hour($tab[4])) == -1))
			my_exit();
		$res = $tab[3]."/".$month."/".$tab[1];
		date_default_timezone_set('Europe/Paris');
		$time = strtotime($res);
		$time = $time + $hour;
		echo "$time\n";
	}
	else
		my_exit();
?>
