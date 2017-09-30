<?php 
# Blood Bank Management System
# Index Page
session_start();
include('database.php');

?>

<!DOCTYPE>
<html>
<head>
<title>Blood Bank</title>
<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>

<body>
<---- Image for Blood Bank Management System --- >
<ul>
<li><a href="signup.php">SignUp</a></li>
<li><a href="sendrequest.php">Send Request</a></li>
<li><a href="viewrequest.php">View Request</a></li>
<li><a href="camps.php">Camps</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="about.php">About</a></li>
</ul>
<h6>Latest Blood Queries</h6>
<?php

## Latest Blood Querries ##
$bloodrequest = "select top 5 from BloodRequest;";
$result = mysqli_querry($conn, $bloodrequest);
if(mysqli_num_rows($result)>0)						# if their are any result
{
	while($row = mysqli_fetch_assoc($result))		# untill all results are fetched
	{
		$username = $row['username'];				# take result one by one
		echo $username;
		echo "<br>";				
		$city = $row['city'];
		echo $city;
		echo "<br>";
		$bloodgroup = $row['bloodgroup'];
		echo $bloodgroup;
		echo "<br>";
		$hospitalname = $row['hospitalname'];
		echo $hospitalname;
		echo "<br>";
		$mobilenumber = $row['mobilenumber'];
		echo $mobilenumber;
		echo "<br>";
	}

}
else 
   echo "Currently No Blood Requirement";

$camps = "select * from Camps";
$camps_result = mysqli_querry($conn, $camps);
if(mysqli_num_rows($camps_result)>0)
{
	while($details = mysqli_fetch_assoc($camps_result))
	{
		$name = $details['name'];
		echo $name;
		echo "<br>";
		$address = $details['address'];
		echo $address;
		echo "<br>";
		$city = $details['city'];
		echo $city;
		echo "<br>";
		$date = $details['date_e'];
		echo $date;
		echo "<br>";
		$time = $details['time_e'];
		echo $time;
		echo "<br>";
	}
}
else
{
	echo "No Camps";
}
?>
</body>
</html>
