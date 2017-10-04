<?php
error_reporting(0);
if($_REQUEST['error']=='nologin')
	$loginerror = "Please Login First";

?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
<title>Login</title>
</head>

<body>
<?php 
if(isset($loginerror))
{
	echo"<h4 style=color:pink;position:relative;left:640px;top:70px;font-weight:bolder;>$loginerror</h4>";
}
?>

<form method="post" action="login.php">
<h1> Login</h1>
<br><br>
<label>Email</label>
<input type="text" name="email">
<br><br><br><br>
<label>Password</label>
<input type="password" name="password">
<br><br><br><br>
<button name="submit">Submit</button>
</form>
</body>
</html>

<?php
include 'database.php';
session_start();
if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password']))
{

	$email = strtoupper($_POST['email']);
	$password = strtoupper($_POST['password']);
	$validation = "select username, pass from LogIn where username = $email  and pass = $password;";
	$result = mysqli_query($conn, $validation);
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['login_id'] = $row['login_id'];
		header("Location:index.php");
	}
	else
	{
		header("Location:signup.php?error=noaccount");
	}
}
?>