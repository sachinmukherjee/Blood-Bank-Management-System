<?php 
session_start();
include 'database.php';
error_reporting(0);
if($_REQUEST['error'] == 'noaccount');
	$pageerror = "Please Register First";
?>

<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/signup.css">
	<title>Sign Up</title>
</head>
<body>
<?php 
if(isset($pageerror))
{
	echo "<h4 style=color:pink;position:relative;left:680px;top:10px;font-weight:bolder;>$pageerror</h4>";
}
?>
<form action="signup.php" method="post">
<h1>Sign Up</h1>
<br><br>
	<label>Please Enter Email</label>
	<input type="text" name="email">
	<br>
	<br>
	<br>
	<label>Enter Password</label>
	<input type="password" name="password">
	<br>
	<br>
	<br>
	<label>Enter Password Once Again</label>
	<input type="password" name="password1">
	<br>
	<br>
	<br>
	<br>
	<button name="submit">Submit</button>
</form>
</body>
</html>
<?php 
include 'database.php';
if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password1']) && isset($_POST['password']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
	$login_id = null;
	if($password == $password1)
	{
		$register = "insert into LogIn values(?,?, ?);";
		if($stmt = mysqli_prepare($conn, $register))
		{
			mysqli_stmt_blind_param($stmt, "ss",$login_id, $email, $password);
			mysqli_stmt_execute($stmt);
			echo "success";
			# to generate session variable for login id
			$authentication = "select * from LogIn where email = $email and pass = $password;";
			# Location("profile.php");
		}
		else
		{
			echo "failed";
		}

	}
	else
	{
		echo "failed password missmatch";

		#Location("login.php");
	}
}

?>