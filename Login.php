<?php
  
 session_start(); 
   
?>

<!DOCTYPE html>
<html>
<head>
	<title> User Login And Sign Up </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
.login-box{
	max-width: 700px;
	float: none;
	margin: 150px auto;
}
.login-left{
	background: rgba(255, 160, 122);
	padding: 30px;
}
h1{
	color: #581845 !important;
	margin-top: 200px !important;
	text-align: center;
	text-transform: uppercase;
}
</style>
</head>
<body style="background-color:lavender";>	


	
	<?php
	
			$username = $password = "";
		$usernameErr = $passwordErr = "";
		
	
			if($_SERVER['REQUEST_METHOD'] == "POST")
				{
			if (empty($_POST['username'])){
				$usernameErr = "Please fill up the form properly";
			}
			else{
				$username = $_POST['username'];
			}
			
			if (empty($_POST['password'])){
				$passwordErr = "Please fill up the form properly";
			}
			
			else{
					
				$password = $_POST['password'];
			}
				$conn1 = new mysqli('localhost','wtc','1234','userrrgistration');

					mysqli_select_db($conn1, 'userrrgistration');

					$username = $_POST['username'];
					$password = $_POST['password'];
						$s = " select * from usertable where username = '$username' && password = '$password'";
						
					 $result = mysqli_query($conn1, $s);
					 $num = mysqli_num_rows($result);
					 if($num == 1)
					 {
						$_SESSION['username'] = $username;
						header('location:Home.php');
					 }
					 else{
						 echo "Wrong username or password";
						 //header('location:login.php');
						}
			
				}
	
	?>

	<h1> Login </h1>
	<div class="login-box">
	<div class="col-md-6 login-left">
	
	<p id="errorMsg"></p>
	<form name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validation()" method="POST">
	
	<label>Username</label>
	<input type="text" name="username" value="<?php echo $username ?>">
		<p><?php echo $usernameErr; ?></p>
			
		<br>
	<label>Password</label>
	<input type="Password" name="password" value="<?php echo $password ?>">
		<p><?php echo $passwordErr; ?></p>
	<br>
	<button type="submit" class="btn btn-primary"> Login </button>
	
	
	</form>
	</body>
	<script>
    function validation()
    {
      var isValid=false;
      var username=document.forms["login"]["username"].value;
      var password=document.forms["login"]["password"].value;
      if(username==""||password=="")
      {
        
          document.getElementById('errorMsg').innerHTML = "<h2>Please fill up the form properly</h2>";
          document.getElementById('errorMsg').style.color ="yellow";
      }
      else
      {
        isValid=true;
	  }
      return isValid;
    }
	
	
  </script>
  </div>
  </div>
	</html>