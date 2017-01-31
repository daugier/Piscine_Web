<?php
	function auth($login, $passwd)
	{
		$file = "../private/passwd";
		if (file_exists($file))
		{
			$data_base = file_get_contents($file);
			$data_base = unserialize($data_base);
			foreach($data_base as $elem)
			{
				if ($elem['passwd'] == hash("whirlpool", $passwd) &&
					$elem['login'] == $login)
					return (TRUE);
			}
			return (FALSE);
		}
	}
?>
