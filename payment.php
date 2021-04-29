<html>
<head>
	<title>Payment </title>
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

		
<div class="login-box">
	<div class="col-md-6 reg-left">
    <div class="row">
        
            
       <div class="card">
               <div class="card-header">
                        <div class="row">
        <div> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                
				<img src="https://img.icons8.com/color/36/000000/visa.png">
		        <img src="https://img.icons8.com/color/36/000000/mastercard.png">
				<img src="https://img.icons8.com/color/36/000000/amex.png"> 
					
                        </div>
                    </div>
					<h1> Make PAYMENT </h1>
					<div id="table-data">
					
		<div class="form-popup" id="pay">
      <form name="paymnet" onsubmit="valid(event)"> 
		<p id="errorMsg"></p>	  
        <table width="30%" cellpadding="10px">
          <tr>
            <td><label>CARD NUMBER</label></td>
            <td><input type="text" name="card" id="card" /></td>
          </tr>
          <tr>
            <td><label>CARD EXPIRY</label></td>
            <td><input type="text" name="expire" id="expire" placeholder="../.." /></td>
          </tr>
		  
		  <tr>
            <td><label>CARD HOLDER NAME</label></td>
            <td><input type="text" name="name" id="name"  /></td>
          </tr>
		  
          <tr>
            <td></td>
            <td><input type="button" id="submit" value="Submit" /></td>
          </tr>
        </table>
      </form>  
      
    </div>
	</div>
	
	</div>
	</div>
	
			<script>
		function openForm() {
		  document.getElementById("pay").style.display = "block";
		}

		function closeForm() {
		  document.getElementById("pay").style.display = "none";
		}
		</script>


	<script>
		function valid(event)
    {
      
      var card=document.getElementById("card").value;
      var expire=document.getElementById("expire").value;
      var name=document.getElementById("name").value;
      event.preventDefault();
      
      if(card==""||expire==""||name=="")
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
        xhttp.open("POST", "paymentAction.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("card="+card+"&expire="+expire+"&name="+name);
        
        
      }
     
     
    }
</script>
	

                 

</body>
</html>