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
<li><a href="donorregistration.php">Donor Registration</a></li>
<li><a href="sendrequest.php">Send Request</a></li>
<li><a href="viewrequest.php">View Request</a></li>
<li><a href="camps.php">Camps</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="about.php">About</a></li>
</ul>
<h6>Latest Blood Queries</h6>
<?php

## Latest Blood Querries ##
$sql = "select top 5 from BloodRequest;";
$result = mysqli_querry($conn, $sql);
if(mysqli_num_rows($result)>0)						# if their are any result
{
	while($row = mysqli_fetch_assoc($result))		# untill all results are fetched
	{
		$username = $row['username'];				# take result one by one
		$city = $row['city'];
		$bloodgroup = $row['bloodgroup'];
		$hospitalname = $row['hospitalname'];
		$mobilenumber = $row['mobilenumber'];
	}

}
else 
   echo "Currently No Blood Requirement";

?>
</body>
</html>
