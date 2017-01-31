<?php
	function my_error()
	{
		echo "ERROR\n";
		exit ();
	}
	function check_good_user($login, $tab)
	{
		foreach ($tab as $elem)
		{
			if ($elem['login'] == $login)
				return (1);
		}
		return (0);
	}
	if ($_POST['login'] != NULL && $_POST['passwd'] != NULL &&
		$_POST['submit'] == "OK")
	{
		$str['login'] = $_POST['login'];
		$str['passwd'] = hash("whirlpool", $_POST['passwd']);
		if (!file_exists('../private/'))
			mkdir('../private/');
		$file = '../private/passwd';
		if (file_exists($file))
			$data_base = file_get_contents($file);
		if (check_good_user($_POST['login'], (array)unserialize($data_base)))
			my_error();
		if ($data_base)
			$data_base = unserialize($data_base);
		$data_base[] = $str;
		$data_base = serialize($data_base);
		file_put_contents($file, $data_base);
		echo "OK\n";
	}
	else
		my_error();
?>
