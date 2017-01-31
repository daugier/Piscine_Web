<?php
	include "database/add_rm_panier.php";
	include "install.php";

	session_start();
	$id = $_GET['id'];
	$num = $_GET['page'];
	rm_carte_du_panier($id);
	if ($num == 1)
		header( 'Location: '.host().'index.php#' );
	else if ($num == 2)
		header( 'Location: '.host().'produits.php#' );
	else if ($num == 3)
		header( 'Location: '.host().'panier.php#' );
	else if ($num == 4)
		header( 'Location: '.host().'franchise.php#' );
?>