<!DOCTYPE HTML>
<html>
<head>

	<script type="text/javascript">
	/*	function p1()
	/	{
			document.getElementById("pbar").style.width="40%";
		}
		function p2()
		{
			document.getElementById("pbar").style.width="70%";
		}
		function p3()
		{
			document.getElementById("pbar").style.width="100%";
		}*/
        var i = 0;
        

var counterBack = setInterval(function(){
  i+=5;
  if(i<=100){
    $('.progress-bar').css('width', i+'%');
  } else {
    clearTimeout(counterBack);
  }
  
}, 1000);
	</script>
	
	<link rel="stylesheet" type="text/css" href="style.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script src="jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <title>Thanks for ordering!!</title>

<link rel="shortcut icon" type="image/jpg" href="chef.jpg" />
</head>

<body>
	
	<div id="headwrap">
		<div id="header">
			<div id="img">
				<img src="logo.png" id="logo" alt="" />
				<div class="btn-group">
					<button type="button" class="btn btn-danger" onclick="document.location.href = 'profile.html'">My Profile<</button>
					<button type="button" class="btn btn-danger" onclick="document.location.href = 'r1.html'">Know us </button>
					<button type="button" class="btn btn-danger" onclick="document.location.href = 'rview1.html'">Restaurants</button>
					<button type="button" class="btn btn-danger" onclick="document.location.href = 'contactus1.html'">Contact us</button>
					<button type="button" class="btn btn-danger" onclick="document.location.href = 'my.php'">Logout</button>
				</div>
			</div>
        </div>
	</div>
	
	<div id="contentwrap">
		<div id="content3">
			<h1></h1>
			<font size="10" color="white" face='"impact", cursive, sans-serif'><center>Thanks for Ordering!</center></font>
			<font size="7" color="white" face='"impact", cursive, sans-serif'>
			<center>Total amount payable: Rs.
			<?php
			$a=0;
			$plain=150;
			$m=100;
			$r=120;
			$u=80;
			$v=75;
			$k=60;
			$d=295;
			$a=$plain+$m+$r+$u+$v+$k;
			echo $a;
			?>
			
			</center></font>
			<h1></h1>
			<div id="stat">
			    <div class="btn-group">
			
					<button type="button" class="btn" id="p1" onclick="p1()">   
						<img src="o1.gif" id="o1" alt="" height="300px" width="310px" />
						<font size="5" color="black" face="Arial"><center>Placed</center></font>
					</button>
					<button type="button" class="btn" id="p2" onclick="p2()">   
						<img src="o2.jpg" id="o2" alt="" height="300px" width="310px" />
						<font size="5" color="black" face="Arial"><center>Prepared</center></font>
					</button>
					<button type="button" class="btn" id="p3" onclick="p3()">   
						<img src="o3.jpeg" id="o3" alt="" height="300px" width="310px" />
						<font size="5" color="black" face="Arial"><center>Out for Delivery</center></font>
					</button>
				
				</div>
			</div>	
			<h1></h1>
			<div id="bar">
				<div class="progress">
					<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    <span class="sr-only"></span>
                    
                    </div>
				</div>
			</div>
			<ul class="pager">
				<li><a href="rview1.html"><font size="4" face="Arial">Still Hungry?</font></a></li>
			</ul>
		
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
	