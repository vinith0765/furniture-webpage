<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:basic.html");
?>
