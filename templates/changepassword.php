<?php 
session_start();
include 'database.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>

<form action="changepassword.php" method="post">
	<h4>Change Password</h4>
	<br><br>
	<label>Previous Password</label>
	<input type="password" name="previouspassword">
	<br><br>
	<label>New Password</label>
	<input type="password" name="newpassword">
	<br><br>
	<label>New Password</label>
	<input type="password" name="newpassword2">
	<br><br>
	<button name="submit">Submit</button>
</form>

</body>
</html>

<?php 

if (isset($_POST['submit']) && isset($_POST['previouspassword']) && isset($_POST['newpassword']) && isset($_POST['newpassword2'])) 
{
	$previouspassword = strtoupper($_POST['previouspassword']);
	$newpassword = strtoupper($_POST['newpassword']);
	$newpassword2 = strtoupper($_POST['newpassword2']);

	$statement = "select * from LogIn where pass = $previouspassword;";
	$result = mysqli_query($conn, $statement);
	if(mysqli_num_rows($result)>0)
	{
		if($newpassword == $newpassword2)
		{
			$changepassword = "update LogIn set pass = $newpassword2 where pass = $previouspassword;";
			$execute = mysqli_query($conn, $changepassword);
		}
		else
		{
			header("Location:changepassword.php?error=newmismatch");
		}
	}
	else
	{
		header("Location:changepassword.php?error=oldmismatch");

	}	

	
}
else
{
	header("Location:changepassword.php?error=fillalldetails");
}