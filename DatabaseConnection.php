<!DOCTYPE html>
<html>
<head>
	<title>Database Connection</title>
</head>
<body>

	<h1>Database Connection</h1>

	<?php 

	$hostname = "localhost";
	$username = "wtc";
	$password = "1234";

	$conn1 = new mysqli($hostname, $username, $password);
	if($conn1->connect_errno) {
		echo "1. Database Connection Failed!...";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		echo "1. Database Connection Successful!";
	}
	
	$conn1->close();
	
	?>

</body>
</html>