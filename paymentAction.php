<?php

$conn = mysqli_connect("localhost", "wtc", "1234", "userrrgistration");

if(isset($_POST["card"]) && isset($_POST["expire"]) && isset($_POST["name"])){

	$card = $_POST['card'];
	$expire = $_POST['expire'];
	$name = $_POST['name'];

	$sql = "INSERT INTO payment(card,expire,name) VALUES ('{$card}', '{$expire}', '{$name}')"; 

	if(mysqli_query($conn, $sql)){
		echo 1;
	}else{
		echo 0;
	}

} else{
	echo "All fields are required.";
}

?>