<?php
function	write_in_csv($file_name, $info_array)
{
	if (($handle = fopen($file_name, 'a+')) !== FALSE) {
		$data[] = $info_array;
		foreach ($data as $array) {
			fputcsv($handle, $array);
	}
	fclose($handle);
	}
}

function overwrite_in_csv($file_name, $id, $new_info_array)
{
	$input = fopen($file_name, 'r');
	$output = fopen("database/tmp.csv", 'w');
	while( false !== ( $data = fgetcsv($input) ) )
	{
		if ($data[0] == $id)
		{
			$data = $new_info_array;
		}
		fputcsv($output, $data);
	}
	fclose($input);
	fclose($output);
	unlink($file_name);
	rename('database/tmp.csv', $file_name);
}
?>
