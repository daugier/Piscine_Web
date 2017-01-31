<?php
include "database/add_type.php";
include "install.php";

session_start();
$type = $_GET['type'];
add_type($type);
header( 'Location: '.host().'admin.php#' );
?>