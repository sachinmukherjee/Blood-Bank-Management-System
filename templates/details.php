<?php 
session_start();
include 'database.php';
error_reporting(0);

?>

<!DOCTYPE>
<html>
<head>
<title>Details</title>
</head>

<body>
	<form action="details.php" method="post">
		<h2>Please fill the form</h2>
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
		<label>Blood Group</label>
		<input type="text" name="bloodgroup">
		<br><br>
		<button name="submit">Submit</button>
	</form>
</body>
</html>
<?php

if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobilenumber']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['bloodgroup']))
{
	$name = strtoupper($_POST['name']);
	$email = strtoupper($_POST['email']);
	$mobilenumber = strtoupper($_POST['mobilenumber']);
	$address = strtoupper($_POST['address']);
	$city = strtoupper($_POST['city']);
	$bloodgroup = strtoupper($_POST['bloodgroup']);
	$userid = $_SESSION['login_id'];
	$_SESSION['bloodgroup'] = $bloodgroup;

	$statement = "insert into UserDetails values(?,?,?,?,?,?,?);";
	if($result = mysqli_prepare($statement))
	{
		mysqli_stmt_blind_param($result, "si", $userid, $name, $email, $mobilenumber, $address, $city, $bloodgroup);
		mysqli_stmt_execute($result);
		header("Location:index.php");
	}
}


?>
