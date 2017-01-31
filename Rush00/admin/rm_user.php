<?php
include "database/add_user.php";
include "install.php";
//session_start();
rm_user($_GET['login']);
//header( 'Location: '.host().'admin.php#' );
?>