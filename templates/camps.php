<!DOCTYPE>
<html>
<head>
<title>Camps</title>
</head>

<body>

<?php 
include 'database.php';
session_start();
$statement = "select * from Camps;";
$result = mysqli_query($conn, $statement);
if(mysqli_num_rows($result)>0)
{
	while($rows = mysqli_fetch_assoc($result))
	{
		$name = $rows['name'];
		echo $name;
		echo "<br>";
		$address = $rows['address'];
		echo $address;
		echo "<br>";
		$city = $rows['city'];
		echo $city;
		echo "<br>";
		$time = $rows['time_e'];
		echo $time;
		echo "<br>";
		$date = $rows['date_e'];
		echo $date;
		echo "<br>";
	}
}
else
{
	echo "There no on going camps";

}

?>
</body>
</html>
