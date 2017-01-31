<?php
include "database/add_type.php";
include "install.php";

session_start();
$type_id = $_GET['type_id'];
$carte_id = $_GET['carte_id'];
add_card_type($carte_id, $type_id);
header( 'Location: '.host().'admin.php#' );
?>