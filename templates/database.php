<?php

# Database Connection # 

$username = "root";
$password = "root";
$servername = "localhost";
$databasename = "BloodBank";

$conn = mysqli_connect($servername, $username, $password, $databasename);
if(!$conn)
	die("Could not connect" .mysqli_error($conn));

?>
