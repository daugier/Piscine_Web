<?php
	function check_user($file, $login, $oldpw, $newpw, $data_base)
	{
		$i = 0;
		$len = count($data_base);
		while ($i < $len + 1)
		{
			if ($data_base[$i]['login'] == $login &&
				$data_base[$i]['passwd'] == hash("whirlpool",$oldpw))
			{
				$data_base[$i]['passwd']= hash("whirlpool", $newpw);
				$data_base = serialize($data_base);
				file_put_contents($file, $data_base);
				return (1);
			}
			$i++;
		}
		return (0);
	}
	function my_error()
	{
		echo "ERROR\n";
		exit ();
	}
	if ($_POST['login'] != NULL && $_POST['oldpw'] != NULL &&
		$_POST['newpw'] != NULL && $_POST['submit'] == "OK")
	{
		$file = '../private/passwd';
		$data_base = file_get_contents($file);
		if (!check_user($file, $_POST['login'], $_POST['oldpw'], $_POST['newpw'],(array)unserialize($data_base)))
			my_error();
		echo "OK\n";
	}
	else
		my_error();
?>
