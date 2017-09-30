<!DOCTYPE>
<html>
<head>
<title>Blood Requests</title>
</head>

<body>
<?php
include 'database.php';
session_start();

if(isset($_SESSION['login_id']))
{
	$bloodgroup = $_SESSION['bloodgroup'];
	$statement = "select * from RequestBlood where bloodgroup = $bloodgroup;";
	$result = mysqli_query($conn, $statement);
	if(mysqli_num_rows($result)>0)
	{
		while($rows = mysqli_fetch_assoc($result))
		{
			$name = $rows['username'];
			echo $name;
			echo "<br>";
			$city = $rows['city'];
			echo $rows;
			echo "<br>";
			$blood_group = $rows['bloodgroup'];
			echo $bloodgroup;
			echo "<br>";
			$hospitalname = $rows['hospitalname'];
			echo $hospitalname;
			echo "<br>";
			$mobilenumber = $rows['mobilenumber'];
			echo $mobilenumber;
			echo "<br>";
			$units = $rows['units'];
			echo $units;
			echo "<br>";
		}

	}
	else
	{
		echo "<h2>NO Blood Request</h2>";
	}
}
else
{
	header("Location:login.php");
}

?>
</body>
</html>