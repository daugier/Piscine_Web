<?php
	include "database/add_rm_panier.php";
	include "install.php";
	include "database/clear_csv.php";

	session_start();
	if ($_SESSION["logged_on_user"] == 1 || $_SESSION["logged_on_user"] == 2)
	{
		clear_csv("database/commande.csv");
		$input = fopen("database/panier.csv", 'r');
		$output = fopen("database/tmp.csv", 'w');
		while( false !== ( $data = fgetcsv($input) ) ){
			if ($data[0]) {
				fputcsv($output, $data);
			}
		}
		fclose($input);
		fclose($output);
		clear_csv("database/panier.csv");
		rename('database/tmp.csv', "database/commande.csv");

			header( 'Location: '.host().'panier_est_valide.php#' );
			return FALSE;
	}
	else
	{
		header( 'Location: '.host().'panier.php#' );
	}
?>