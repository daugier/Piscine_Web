<?php
function get_id($file_name)
{
	if (($handle = fopen($file_name, "r")) !== FALSE)
	{
		while (($data = fgetcsv($handle)) !== FALSE)
			$id++;
	}
	$id++;
	return $id;
}

function update_id($file_name)
{
	$i = 0;
	if (($handle = fopen($file_name, "w+")) !== FALSE) {
		while (!feof($handle)) {
			$data = fgetcsv($handle);
			if ($id != $i) {
				$data[0] = $i;
				fputcsv($handle, $data);
			}
			$i++;
		}
	}
	fclose($handle);
}
?>