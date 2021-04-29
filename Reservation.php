<!DOCTYPE html>
<html>
<head>
	<title>Reservation </title>
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

</style>
<body style="background-color:lavender";>
			<div class="login-box">
	<div class="col-md-6 reg-left">
				<h3>MAKE A RESERVATION</h3>
				
				<div class="form-popup" id="book">
			<form name="reserve" onsubmit="valid(event)">
			<p id="errorMsg"></p>
			<tr>
            <td><label>Firstname</label></td>
            <td><input type="text" name="firstname" id="firstname" /></td>
          </tr>
		  <br></br>
		  <tr>
            <td><label>Lastname</label></td>
            <td><input type="text" name="lastname" id="lastname" /></td>
          </tr>
		  <br></br>
			<tr>
            <td><label>Address</label></td>
            <td><input type="text" name="address" id="address" /></td>
          </tr>	
		  <br></br>
			<tr>
            <td><label>Contact No</label></td>
            <td><input type="text" name="contactno" id="contactno" /></td>
          </tr>
		  <br></br>
			<tr>
            <td><label>Check in</label></td>
            <td><input type="date" name="date" id="date" /></td>
          </tr>			
						
			<br></br>			
			<tr>
            <td></td>
            <td><input type="button" id="submit" value="Submit" /></td>
          </tr>
						
		</form>
			  
    </div>
	</div>
	</div>
	<script>
		function openForm() {
		  document.getElementById("book").style.display = "block";
		}

		function closeForm() {
		  document.getElementById("book").style.display = "none";
		}
		</script>
	
<script>
		 function valid(event)
    {
      
      
      var firstname=document.getElementById("firstname").value;
      var lastname=document.getElementById("lastname").value;
      var address=document.getElementById("address").value;
      var contactno=document.getElementById("contactno").value;
      var date=document.getElementById("date").value;
      event.preventDefault();
      
      if(||firstname==""||lastname==""||address==""||contactno==""||date=="")
      {
        
          document.getElementById('errorMsg').innerHTML = "<h3>Please fill up the form properly</h3>";
          document.getElementById('errorMsg').style.color ="yellow";
          
      }
      else
      {
    
       var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200) {
            document.getElementById('errorMsg').innerHTML = xhttp.responseText;
            document.getElementById('errorMsg').style.color = "yellow";
          }
        }
        xhttp.open("POST", "rvalidation.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("firstname="+firstname+"&lastname="+lastname+"&address="+address+"&contactno="+contactno+"&date="+date);

        
        
      }
      
     
    }
			
</script>		
		
	
	
</body>
	
</html>