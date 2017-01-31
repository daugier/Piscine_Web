<?php
function get_csv($file_name, $id)
{
	if (($handle = fopen($file_name, "r")) !== FALSE)
	{
		while (($data = fgetcsv($handle)) !== FALSE)
		{
			if ($data[0] == $id)
				return ($data);
		}
	}
	fclose($handle);
	return false;
}
?>