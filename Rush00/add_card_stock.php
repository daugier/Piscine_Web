<?php
include "database/get_csv.php";
include "install.php";
include "database/add_rm_card.php";

session_start();

add_card($_GET["nom_de_la_carte"], $_GET["img"], $_GET["license"], $_GET["prix"], $_GET["stock_disponible"]);
header( 'Location: '.host().'admin.php#' );
?>