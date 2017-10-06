<?php
if(!isset($_SESSION['login_id']))
{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>


<body>
<ul>
<li><a href="updatedetails.php">Update Details</a></li>
<li><a href="yourdetails.php">Details</a></li>
<li><a href="changepassword.php">Change Password</a></li>
<li><a href="sendrequest.php">Send Blood Request</a></li>
<li><a href="viewrequest.php">View Blood Request</a></li>
</ul>
</body>
</html>