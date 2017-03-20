<!DOCTYPE HTML>
<html>
<head>
<title>PetPooja-My Profile!</title>
<link rel="shortcut icon" type="image/jpg" href="chef.jpg" />
<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script src="jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	
	
</head>
<body>
	<div id="headwrap">
		<div id="header">
			<div id="img">
				<img src="logo.png" id="logo" alt="" onclick="document.location.href = 'profile.html'" />
                <div class="btn-group">
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'profile.html'">My Profile</button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'r1.html'">Know us </button>
               
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'rview1.html'">Restaurants</button>
                
              <button type="button" class="btn btn-danger" onclick="document.location.href = 'contactus1.html'">Contact us</button>
              <button type="button" class="btn btn-danger" onclick="document.location.href = 'my.php'">Logout</button>
            </div>
		</div>
                
		</div>
	</div>
		
<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";

	$con=mysql_connect($hostname,$username,$password);

	if (!$con){ die('Could not connect: '. mysql_error());}
	//connection to the database

	$dbName="petpooja";
	$db = @mysql_select_db($dbName,$con) or die(mysql_error());

	$sql="select cus_name, email, address, cus_phone from customer";
	$result = mysql_query($sql, $con);
	$row = mysql_fetch_array($result);
?>
		<div id="contentwrap">
		<div id="content">
            <div id="createaccount1">
                    <img src="profile3.png" width="250px" height="250px" align="center" />
                    <br>            
                    <font size="7" color="white" face='"Tahoma", cursive, sans-serif' align="bottom"><?PHP echo $row["cus_name"]; ?></font>
                    
            <br>
            <font size="5" color="black" face='"Tahoma", cursive, sans-serif' align="bottom"><strong>Email Id:</strong></font>
            <font size="5" color="white" face='"Tahoma", cursive, sans-serif' ><?PHP echo $row["email"]; ?></font>
            <br>
            <font size="5" color="black" face='"Tahoma", cursive, sans-serif' align="bottom"><strong>Address:</strong></font>
            <font size="5" color="white" face='"Tahoma", cursive, sans-serif' ><?PHP echo $row["address"]; ?></font>
            <br>
            <font size="5" color="black" face='"Tahoma", cursive, sans-serif' align="bottom"><strong>Contact:</strong></font>
            <font size="5" color="white" face='"Tahoma", cursive, sans-serif' ><?PHP echo $row["cus_phone"]; ?></font>
                      
            </div>
             </div>
        </div>

<?PHP mysql_close($con); exit; ?>		
    
	
	<div id="footerwrap">
		<div id="footer">
        
<font size="3" color="white"><center>   &copy Copyright 2015 PetPooja.All Rights Reserved.<a href="https://www.facebook.com/PetPoojaPage"> <span class="social social-facebook"><img src="icon.png" width="40px" height="40px" align="center-right"/></span></a>
<a href="https://twitter.com/petpooja_rest"> <span class="social social-twitter"><img src="icon_t.png" width="40px"  height="40px" align="center-right"/></span></a>
<a href="https://plus.google.com/106127621676106204749/about"> <span class="social social-googleplus"><img src="gp1.png" width="40px"  height="40px" align="center-right"/></span></a></center></font>
		</div>
	</div>
</body>
</html>