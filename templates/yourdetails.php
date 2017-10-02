<?php 
include 'database.php';
session_start(0);
error_reporting(0);

$user_id = $SESSION['login_id'];
$statement = "select * from UserDetail where userid = $user_id;";
$result = mysqli_query($conn, $statement);
$row = mysqli_fetch_assoc($result);
$name = $row['user_name'];
$email = $row['email'];
$mobilenumber = $row['mobile'];
$address = $row['address'];
$city = $row['city'];
$bloodgroup = $row['bloodgroup'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Details</title>
</head>
<body>
<h1> Details</h1>
<br><br><br>
<h1> Name : <?php echo $name ?></h1>
<h1> Email : <?php echo $email ?></h1>
<h1> Mobile Number : <?php echo $mobilenumber ?> </h1>
<h1> Address : <?php echo $address ?> </h1>
<h1> City : <?php echo $city ?> </h1>
<h1> Blood Group : <?php echo $bloodgroup ?> </h1>


</body>
</html>
