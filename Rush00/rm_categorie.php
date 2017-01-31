<?php
include "database/rm_type.php";
include "install.php";

session_start();
$type = $_GET['type'];
rm_type($type);
header( 'Location: '.host().'admin.php#' );
?>