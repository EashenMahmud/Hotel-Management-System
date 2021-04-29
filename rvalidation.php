<?php
	 	$hostname = "localhost";
		$username = "wtc";
		$Password = "1234";
		$dbname = "userrrgistration";

		$conn1 = mysqli_connect($hostname, $username, $Password, $dbname);

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
         	if(empty ($_POST['firstname']) || empty($_POST['lastname'])||empty($_POST['address'])||empty($_POST['contactno'])||empty($_POST['date']))
         	{
         		echo "<h2>Fill up the from properly</h2>";
            }
            else
            {

           		$firstname =$_POST['firstname'];
				$lastname =$_POST['lastname'];
				$address =$_POST['address'];
				$contactno =$_POST['contactno'];
				$date=$_POST['date'];
				
				$sql ="insert into reserve values('','{$firstname}','{$lastname}','{$address}','{$contactno}','{$date}')";
		   		$result = mysqli_query($conn1,$sql);
		    	if($result)
		    	{
		    		
		    		
			   		echo "Request Sent Successfully!";
			   		
			  		header('Location:reply_reserve.php');
               		
		    	}
		    	else
		   		{
		   			
		   			
                	echo "Failed to insert";
                	

            	}
			 

         }
		
	}
	mysqli_close($conn1);
	
?>