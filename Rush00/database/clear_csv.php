<?php
function clear_csv($file_name)
{
	$output = fopen("tmp.csv", 'w');
	unlink($file_name);
	rename('tmp.csv', $file_name);
}
?>