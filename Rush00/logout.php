<?php
include "install.php";
include "database/clear_csv.php";
session_start();

$_SESSION["logged_on_user"] = "";
clear_csv("database/panier.csv");
header( 'Location: '.host().'index.php#' );
?>
