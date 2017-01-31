<?php
include "database/add_type.php";
include "install.php";

session_start();
add_type($_get["type de carte"]);
header( 'Location: '.host().'admin.php#' );
?>