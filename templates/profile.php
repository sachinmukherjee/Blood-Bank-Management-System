<?php 
include 'database.php';
session_start();
?>

<!DOCTYPE>
<html>
<head>
<title>Profile</title>
</head>

<body>
<form action="profile.php" method="post">
	<label>Name</label>
	<input type="text" name="name">
	<br>
	<br>
	<label>Email</label>
	<input type="text" name="email">
	<br><br>
	<label>Mobile</label>
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
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobilenumber = $_POST['mobilenumber'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$bloodgroup = $_POST['bloodgroup'];

	$statement = "insert into UserDetail values(?, ?, ?, ?, ?, ?, ?);";
	if($result = mysqli_prepare($conn, $statement))
	{
		mysqli_blind_param($result, "si", null, $name, $email, $mobilenumber, $address, $city, $bloodgroup);
		mysqli_stmt_execute($result);
		echo "Success";
	}
	else
	{
		echo "Failed";
	}

}
else 
{
	echo "Please fill all the details";

}
?>