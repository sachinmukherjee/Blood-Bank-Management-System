<?php

# Database Connection # 

$username = "root";
$password = "bhilai@123";
$servername = "localhost";
$databasename = "BloodBank";

$conn = mysqli_connect($servername, $username, $password, $databasename);
if(!$conn)
	die("Could not connect" .mysqli_error($conn));

?>