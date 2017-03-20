<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script src="jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
function f1()
{ // alert("hello");
 	if( document.myForm.email.value == "" )
  {  alert( "Please provide email!" );    
   document.myForm.email.focus() ;  return false;   }
   
   /*var p=document.getElementById('p');
   if(!p.value.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/))
   {  alert( "Please provide valid email( aa@bb.cc ) !" );    
   document.myForm.email.focus() ;  return false;   }
   */
   if( document.myForm.pw.value == "" )
  {  alert( "Please provide password!" );    
   document.myForm.pw.focus() ;  return false;   }
   return true;
}

function f2()
{
   if( document.myForm1.name.value == "" )
  {  alert( "Please provide name!" );    
   document.myForm1.name.focus() ;  return false;   }
   
   if( document.myForm1.email.value == "" )
  {  alert( "Please provide email!" );    
   document.myForm1.email.focus() ;  return false;   }

   if( document.myForm1.pw.value == "" )
  {  alert( "Please provide password!" );    
   document.myForm1.pw.focus() ;  return false;   }

      if( document.myForm1.addr.value == "" )
  {  alert( "Please provide address!" );    
   document.myForm1.addr.focus() ;  return false;   }

   if( document.myForm1.phone.value == "" )
  {  alert( "Please provide contact number!" );    
   document.myForm1.phone.focus() ;  return false;   }
   
   var p=document.getElementById('ph');

   	if(!p.value.match(/^[0-9]{10}/))
	  {alert( "Please provide enter valid 10 digit phone no.!" );    
   document.myForm.phone.focus() ;  return false;   }
  

   return true;

}   

</script>   

	
</head>
<body>
	<div id="headwrap">
		<div id="header">
			<div id="img">
				<img src="logo.png" id="logo" alt="" onclick="document.location.href = 'my.html'"/>
                <div class="btn-group">
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'my.html'">Home</button>
                 <button type="button" class="btn btn-danger" onclick="document.location.href = 'r.html'">Know us </button>
                <button type="button" class="btn btn-danger"onclick="document.location.href = 'restaurant1.html'">Restaurants</button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'contactus.html'">Contact us</button>
			</div>
            </div>
		</div>
                
  </div>
		<div id="contentwrap">
		<div id="content">
			<div id="left-side">
				<div id="login">
					<h1 class ="text-center text-uppercase" style="color:white">
					<i>log-in</i><h1>
					<form name="myForm" action="verifylogin.php" method="post"   >
					<li><label style="color:white;font-size:20px">Email id:</label></li>
					<li><input id="lid" type="email" placeholder="Enter registered Email id" name="email" class="form-control">
					</input></li>
                    <br> 
                    <li><label style="color:white;font-size:20px">Password</label></li>
					<li><input id="p" type="password" placeholder="Enter your Password" name="pw" class="form-control">
					</input></li>
                     <br>
                     <button type="reset" class="btn btn-danger btn-md" >Reset</button>
                     <button type="Submit" class="btn btn-danger btn-md" onclick="return(f1());">Login</button>
                      <br>
          </form>
				
				</div>
			</div>
			<div id="right-side">
            <font size="5" color="white" face='"Verdana", cursive, sans-serif'>
            <div style="background-color:#FF9999; color:white; font-size:15">
            <center>Hungry now?<br> </center></div>
            <div style="background-color:#ffff99; color:red; font-size:15">
            <center>Why worry when we are here! </center></div>
            <div style="background-color:#ffb3ff; color:#660066; font-size:15">
            <center>Sign up and order Pet Bharke! </center>
            </div>
            </font>
            <br><center>
            <div id="frm">
            <form name="myForm1" action="verify.php" method="post"  style ="width:250px">
                    <li><label style="color:white;font-size:20px">Name:</label></li>
					<li><input id="lid" type="text" placeholder="Enter your name" name="name" class="form-control">
					</input></li>
                    <br>
					<li><label style="color:white;font-size:20px">Email id:</label></li>
					<li><input id="lid" type="email" placeholder="Enter your Email id" name="email" class="form-control">
					</input></li>
                    <br>
                   <li><label style="color:white;font-size:20px">Password:</label></li>
					<li><input id="lid" type="password" placeholder="Enter Password" name="pw" class="form-control">
					</input></li>
                    <br>
                    
                    <li><label style="color:white;font-size:20px">Address:</label></li>
					<li><input id="lid" type="text" placeholder="Enter Address " name="addr" class="form-control">
					</input></li>
                    <br>
                   <li><label style="color:white;font-size:20px">Contact No.:</label></li>
					<li><input id="ph" type="text" placeholder="Enter Contact No." name="phone" class="form-control">
					</input></li>
                    <br>
                    
                    <br>
                    <button type="Submit" class="btn btn-default btn-md" onclick="return(f2());" >Sign Up! </button></center>
                    <br>
                    <br>
          </form>
         <!-- </div>
            <button type="Submit" class="btn btn-default btn-md" onclick="document.location.href = 'template.html'" >Sign Up! </button></center>
              </div> -->
    </div>
    </div>
	
	<div id="footerwrap">
		<div id="footer">
        <br><br>
<font size="3" color="white"><center>   &copy Copyright 2015 PetPooja.All Rights Reserved.<a href="https://www.facebook.com/PetPoojaPage"> <span class="social social-facebook"><img src="icon.png" width="40px" height="40px" align="center-right"/></span></a>
<a href="https://twitter.com/petpooja_rest"> <span class="social social-twitter"><img src="icon_t.png" width="40px"  height="40px" align="center-right"/></span></a>
<a href="https://plus.google.com/106127621676106204749/about"> <span class="social social-googleplus"><img src="gp1.png" width="40px"  height="40px" align="center-right"/></span></a></center></font>
       		</div>
	</div>
</body>
</html>




