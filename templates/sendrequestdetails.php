<?php 
# send request for blood

?>
<!DOCTYPE html>
<html>
<head>
<title>Request Blood</title>
</head>

<body>
	<form action = "sendrequestdetails.php" method="post">
		<label>Name</label>
		<input type="text" name="name">
		<br><br>
		<label>Blood Group</label>
		<input type="text" name="bloodgroup">
		<br><br>
		<label>Units</label>
		<input type="text" name="units">
		<br><br>
		<label>Hospital</label>
		<input type="text" name="hospital">
		<br><br>
		<label>City</label>
		<input type="text" name="city">
		<br><br>
		<label>Mobile Number</label>
		<input type="text" name="mobilenumber">
		<br><br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>

<?php 
include 'database.php';
session_start();

if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['bloodgroup']) && isset($_POST['hospital']) && isset($_POST['city']) && isset($_POST['mobilenumber']) && isset($_POST['units']))
{
	$name = $_POST['name'];
	$bloodgroup = $_POST['bloodgroup'];
	$hospital = $_POST['hospital'];
	$city = $_POST['city'];
	$mobilenumber = $_POST['mobilenumber'];
	$units = $_POST['units'];

	$sendrequest = "insert into RequestBlood values(?,?,?,?,?,?);";
	if($stmt = mysqli_prepare($conn, $sendrequest))
	{
		mysqli_stmt_bind_param($stmt, "si", $name, $city, $bloodgroup, $hospital, $mobilenumber, $units);
		mysqli_stmt_execute($stmt);
		echo "Sucess";

	}
	else
	{
		echo "Failed";
	}

}

else 
{
	echo "Please Fill all the details";
}


?>