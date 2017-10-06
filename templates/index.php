<!DOCTYPE>
<html>
<head>
<title>Blood Bank</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<img src="images/save blood.jpeg" alt="save blood" height="290px" width="1295px" style="background-color: red;">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="camps.php">Camps</a></li>
<li><a href="profile.php">Profile</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="signup.php">SignUp</a></li>
<li><a href="about.php">About</a></li>
</ul>
<p> Blood is universally recognized as the most precious elements that sustain life. It saves innumerable lives across the world in a variety of condition. The need of blood is great- on any given day, approximately 39,000 units of Red blood cells are needed. More than 29 million units of blood component are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to lack of information and accessibility. We positively belive this tool can overcome most of these challenges by effectively connecting the blood donors with blood recipients. </p>
<br>
<h6 style="color: blue;">Latest Blood Queries</h6>

<div class="bloodquery">

<?php
include 'database.php';
session_start();
error_reporting(0);

## Latest Blood Querries ##
$bloodrequest = "select * from RequestBlood;";
$result = mysqli_query($conn, $bloodrequest);
if(mysqli_num_rows($result)>0)						# if their are any result
{
	echo "<table style=width:1000px; color:blue;>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>City</th>";
	echo "<th>Blood Group</th>";
	echo "<th>Hospital</th>";
	echo "<th>Mobile Number</th>";
	echo "<th>Units</th>";
	echo "</tr>";
	echo "<tr></tr>";
	echo "<tr></tr>";

	while($row = mysqli_fetch_assoc($result))		# untill all results are fetched
	{
		echo "<tr>";
		$username = $row['username'];				# take result one by one
		echo "<td>$username</td>";
		$city = $row['city'];
		echo "<td>$city</td>";
		$bloodgroup = $row['bloodgroup'];
		echo "<td>$bloodgroup</td>";
		$hospitalname = $row['hospitalname'];
		echo "<td>$hospitalname</td>";
		$mobilenumber = $row['mobilenumber'];
		echo "<td>$mobilenumber</td>";
		$units = $row['units'];
		echo "<td>$units</td>";
		echo "</tr>";
	}
	echo "</table>";

}
else 
   echo "Currently No Blood Requirement";
?>
</div>
<div class="ongoingcamps">
<h5 style="color: blue;">On Going Camp</h5>
<?php 
$camps = "select * from Camps";
$camps_result = mysqli_query($conn, $camps);
if(mysqli_num_rows($camps_result)>0)
{
	echo "<table>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Address</th>";
	echo "<th>City</th>";
	echo "<th>Date</th>";
	echo "<th>Time</th>";
	echo "</tr>";
	echo "<tr></tr>";
	echo "<tr></tr>";
	while($details = mysqli_fetch_assoc($camps_result))
	{
		echo "<tr>";
		$name = $details['name'];
		echo "<td>$name</td>";
		$address = $details['address'];
		echo "<td>$address</td>";
		$city = $details['city'];
		echo "<td>$city</td>";
		$date = $details['date_e'];
		echo "<td>$date</td>";
		$time = $details['time_e'];
		echo "<td>$time</td>";
		echo "</tr>";
	}
	echo "</table>";
}
else
{
	echo "No Camps";
}
?>
</div>
</body>
</html>
