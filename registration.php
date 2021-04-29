
<!DOCTYPE html>
<html>
<head>
	<title> User Login And Sign Up </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.login-box{
	max-width: 700px;
	float: none;
	margin: 150px auto;
}
.reg-left{
	background: rgba(255, 160, 122);
	padding: 30px;
}
h2{
	color: #581845 !important;
	margin-top: 200px !important;
	text-align: center;
	text-transform: uppercase;
}
</style>
<body style="background-color:lavender";>
<?php
	
			
		$firstname = $lastname = $gender = $email = $username = $password = "";
		$firstnameErr = $lastnameErr = $genderErr = $emailErr = $usernameErr = $passwordErr = "";
		
		
	
			if($_SERVER['REQUEST_METHOD'] == "POST")
				{
			if (empty($_POST['firstname'])){
				$firstnameErr = "Please fill up the form properly";
			}	
			if (empty($_POST['lastname'])){
				$lastnameErr = "Please fill up the form properly";
			}	
			if (empty($_POST['mail'])){
				$emailErr = "Please fill up the form properly";
			}
					
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
			$hostname = "localhost";
	$username = "wtc";
	$password = "1234";
	$dbname = "userrrgistration";

	$conn1 = new mysqli($hostname, $username, $password, $dbname);
			if($firstnameErr == "" && $lastnameErr == "" && $genderErr == "" && $emailErr =="" && $usernameErr=="" && $passwordErr=="") 
	    	
	
		
         {

            $firstname=$_POST['firstname'];
	        $lastname=$_POST['lastname'];
	        $gender=$_POST['gender'];
	        $email =$_POST['mail'];
	        $username=$_POST['username'];
	        $password=$_POST['password'];
	        
	        $sql1 ="insert into usertable values('{$firstname}','{$lastname}','{$gender}','{$email}','{$username}','{$password}')";
		    $result = mysqli_query($conn1,$sql1);
		    if($result)
		    {
			   echo "Successfully inserted!";
			   header('location:Login.php');
			   exit;
		    }
		    else
		    {
			echo "Failed to insert";
			echo "<br>";
			echo $conn1->error;

            }
		}
			}
		
		 
	?>
	
	<h2> SignUp Here</h2>
	<div class="login-box">
	<div class="col-md-6 reg-left">
		<p id="errorMsg"></p>
	<form name="registration" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validate()" method="POST">
		
		<fieldset>
		<label> Information: </label>
		<br>
		<label for="firstname">First name: </label>
		<input type="text" name="firstname" id="firstname" value="<?php echo $firstname ?>">
		<p><?php echo $firstnameErr; ?></p>
		<br>
		<label for="lastname">Last name: </label>
		<input type="text" name="lastname" id="lastname" value="<?php echo $lastname ?>">
		<p><?php echo $lastnameErr; ?></p>
		<br>
		<label> Gender: </label>
	    <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="male") echo "checked";?>
             value="male">Male
             <input type="radio" name="gender"
             <?php if (isset($gender) && $gender=="female") echo "checked";?>
             value="female">Female</td>
             <p><?php echo $genderErr;?></p>
	    <br>
	    <label for="email">Email: </label>
	    <input type="email" name="mail" id="email" value="<?php echo $email ?>">
		<p><?php echo $emailErr; ?></p>
	    <br>
	    </fieldset>
	    <fieldset>
	    	<label>Account Information</label>
	    	<br>
	    	<label for="username">username</label>
	    	<input type="text" name="username" id="username" value="<?php echo $username ?>">
		<p><?php echo $usernameErr; ?></p>
	    	<br>
	    	<label for="password">password: </label>
	    	<input type="password" name="password" id="password" value="<?php echo $password ?>">
		<p><?php echo $passwordErr; ?></p>
	    	<br>
	    	
	    </fieldset>
	    <input type="submit" value="submit">
		
	</form>
	
	
		<script>
		function validate()
		{
			var isValid=false;
			var firstname=document.forms["registration"]["firstname"].value;
			
			var lastname=document.forms["registration"]["lastname"].value;
			
			var gender=document.forms["registration"]["gender"].value;
			
			var email=document.forms["registration"]["email"].value;
			
			var username=document.forms["registration"]["username"].value;
			
			var password=document.forms["registration"]["password"].value;
			
			
			if(firstname==""||lastname==""||gender==""||email==""||username==""||password=="")
			{
				
				  document.getElementById('errorMsg').innerHTML = "<h3>Please Fill up the from properly</h3>";
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
	</body>
	</html>