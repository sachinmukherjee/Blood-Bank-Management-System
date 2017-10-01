<?php
session_start();
include 'database.php';
error_reporting();

if(isset($_SESSION['login_id']))
{
	header("Location:sendrequestdetails.php");
}

else
{
	header("Location:login.php?error=nologin");
}


?>