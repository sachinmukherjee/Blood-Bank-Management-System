<!DOCTYPE html>
<html>
<head>
	<title>Update Details</title>
	<link rel="stylesheet" type="text/css" href="css/updatedetails.css">
</head>
<body style="background-image: url("images/bloodcell.jpg");">
<form method="post" action="updatedetails.php">
	<h2>Fill all the details</h2>
	<label>Name</label>
	<input type="text" name="name">
	<br><br>
	<label>Email</label>
	<input type="text" name="email">
	<br><br>
	<label>Mobile Number</label>
	<input type="text" name="mobilenumber">
	<br><br>
	<label>Address</label>
	<input type="textarea" name="address">
	<br><br>
	<label>City</label>
	<input type="text" name="city">
	<br><br>
	<button name="submit">Submit</button>
</form>
</body>
</html>

<?php 
include 'database.php';
session_start();
error_reporting(0);

if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobilenumber']) && isset($_POST['address']) && isset($_POST['city']))
{
	$name = strtoupper($_POST['name']);
	$email = strtoupper($_POST['email']);
	$mobilenumber = strtoupper($_POST['mobilenumber']);
	$address = strtoupper($_POST['address']);
	$city = $_POST['city'];
	$user_id = $_SESSION['login_id'];

	$statement = "update UserDetail set user_name = $name, email = $email, mobile = $mobilenumber, address = $address, city = $city where  userid = $user_id;";
	mysqli_query($conn, $statement);
	header("Location:profile.php");
}