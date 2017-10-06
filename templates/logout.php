<?php 

if(isset($_SESSION['login_id']))
{
	session_destroy();
	header("Location:index.php");
}
else
{
	header("Location:index.php");
}

?>