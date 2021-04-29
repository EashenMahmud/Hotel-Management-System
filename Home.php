<?php


session_start();
if(!isset($_SESSION['username'])){
	header('location:Login.php');
}


?>

<!DOCTYPE html>
<html>
<head>

<title> Home Page</title>
<script type="text/javascript">
function togglemenu(){
	document.getElementById('sidebar').classList.toggle('active');
}
</script>

</head>

<style>
header{
	background-color: black;
	height: 90px;
}

*{
	margin: 0;
	padding: 0;
}
#sidebar{
	position: fixed;
	width: 30%;
	height: 100%;
	left: -30%;
	background-color: black;
}
#sidebar li{
	color: white;
	font-size: 30px;
	border-bottom: 1px solid gray;
	text-align: center;
}
.toggle-btn{
	position: absolute;
	left: 105%;
	top: 15px;
}
.toggle-btn span{
	display: block;
	background-color: black;
	width: 30px;
	height: 5px;
	margin: 3px;	
}
#sidebar.active{
	left: 0;
}
a{
	color: lavender;
}
p{
	color: lavender;
	text-align: center;
	
}
h1{
	color: #581845 !important;
	margin-top: 200px !important;
	text-align: center;
	text-transform: uppercase;
}
footer{
	background-color: #581845;
	height: 90px;
}
li{
	color: white;
}

</style>

<body>
<header>
	<li><a href="Home.php">Home</a></li>
		<p> Enjoy Your Stay</p>
</header>
<div id="sidebar" onclick="togglemenu()">
<div class="toggle-btn">
	<span></span>
	<span></span>
	<span></span>
	
</div>



 <ul>
	<li><a href="Home.php">Home</a></li>
	<li><a href="Login.php">Login</a></li>
	<li><a href="registration.php">SignUp</a></li>
	<li><a href="Logout.php">Logout</a></li>
	<li><a href="RoomService.php">Room Service</a></li>
	<li><a href="Payment.php">Payment</a></li>
	<li><a href="Reservation.php">Reservation</a></li>
	<li><a href="Preview.php">Preview Rooms</a></li>
	<li><a href="rating.php">Review</a></li>
	<li>About Us</li>
</ul>	

</div>
<br></br>
<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
<br></br><br></br><br></br><br></br><br></br>
<footer>
	<li>About Us</li>
	<li>Contact With Us</li>
	
	
		
</footer>
</body>

</html>
