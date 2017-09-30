<!DOCTYPE>
<html>
<head>
<title>Login</title>
</head>

<body>
<h1> Login</h1>
<form method="post" action="login.php">
<label>Email</label>
<input type="text" name="email">
<br><br>
<label>Password</label>
<input type="password" name="password">
<br><br>
<button name="submit">Submit</button>
</form>
</body>
</html>

<?php
include 'database.php';
session_start();
if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password']))
{

	$email = $_POST['email'];
	$password = $_POST['password'];
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
		header("Location:signup.php");
	}
}
?>