<?php
session_start();
include 'database.php';

if(isset($_SESSION['login_id']))
{
	header("Location:sendrequestdetails.php");
}

else
{
	header("Location:login.php");
}


?>