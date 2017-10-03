<?php 
# Blood Bank Management System
# Index Page
session_start();
include 'database.php';

?>

<!DOCTYPE>
<html>
<head>
<title>Blood Bank</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<img src="images/save blood.jpeg" alt="save blood" height="290px" width="1295px">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="camps.php">Camps</a></li>
<li><a href="profile.php">Profile</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="signup.php">SignUp</a></li>
<li><a href="about.php">About</a></li>
</ul>
<div>
<p> Blood is universally recognized as the most precious elements that sustain life. It saves innumerable lives across the world in a variety of condition. The need of blood is great- on any given day, approximately 39,000 units of Red blood cells are needed. More than 29 million units of blood component are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to lack of information and accessibility. We positively belive this tool can overcome most of these challenges by effectively connecting the blood donors with blood recipients. </p>
<br>
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
</div>
</body>
</html>
