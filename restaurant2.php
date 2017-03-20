<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function add1()
{       
    var n=document.getElementById("b1");
	var s=n.innerHTML;
	document.getElementById("b1").innerHTML=++s;
}
function sub1()
{       
    var n=document.getElementById("b1");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b1").innerHTML=s;
}
function add2()
{   
    var n=document.getElementById("b2");
	var s=n.innerHTML;
	document.getElementById("b2").innerHTML=++s;
}
function sub2()
{       
    var n=document.getElementById("b2");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b2").innerHTML=s;
}
function add3()
{   
    var n=document.getElementById("b3");
	var s=n.innerHTML;
	document.getElementById("b3").innerHTML=++s;
}
function sub3()
{       
    var n=document.getElementById("b3");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b3").innerHTML=s;
}
function add4()
{   
    var n=document.getElementById("b4");
	var s=n.innerHTML;
	document.getElementById("b4").innerHTML=++s;
}
function sub4()
{       
    var n=document.getElementById("b4");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b4").innerHTML=s;
}
function add5()
{   
    var n=document.getElementById("b5");
	var s=n.innerHTML;
	document.getElementById("b5").innerHTML=++s;
}
function sub5()
{       
    var n=document.getElementById("b5");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b5").innerHTML=s;
}
function add6()
{   
    var n=document.getElementById("b6");
	var s=n.innerHTML;
	document.getElementById("b6").innerHTML=++s;
}
function sub6()
{       
    var n=document.getElementById("b6");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b6").innerHTML=s;
}
function add7()
{   
    var n=document.getElementById("b7");
	var s=n.innerHTML;
	document.getElementById("b7").innerHTML=++s;
}
function sub7()
{       
    var n=document.getElementById("b7");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b7").innerHTML=s;
}
function add8()
{   
    var n=document.getElementById("b8");
	var s=n.innerHTML;
	document.getElementById("b8").innerHTML=++s;
}
function sub8()
{       
    var n=document.getElementById("b8");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b8").innerHTML=s;
}
function add9()
{   
    var n=document.getElementById("b9");
	var s=n.innerHTML;
	document.getElementById("b9").innerHTML=++s;
}
function sub9()
{       
    var n=document.getElementById("b9");
	var s=n.innerHTML;
	if(s>0)
	--s;
	document.getElementById("b9").innerHTML=s;
}	
	
</script>
<title>PetPooja-Menu </title>
<link rel="shortcut icon" type="image/jpg" href="chef.jpg" />
<link rel="stylesheet" type="text/css" href="style1.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script src="jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </head>

<body>
		<div id="headwrap">
		<div id="header">
			<div id="img">
				<img src="logo.png" id="logo" alt="" onclick="document.location.href = 'profile.html'"/>
                <div class="btn-group">
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'profile.html'">My Profile</button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'r1.html'">Know us </button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'rview1.html'">Restaurants</button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'contactus1.html'">Contact us</button>
                <button type="button" class="btn btn-danger" onclick="document.location.href = 'my.html'">Logout</button>
               
            </div>
		</div>
                
  </div>
</div>
	
	<div id="contentwrap">
		<div id="content">
			<div id="rleft" >	
				<img src="s5.gif" id="s" alt="" width="100%" height="400px" />
				<div id="rhead">
					<h1 style="color:#FF6666; font-family:Impact">Dakshinayan <small>Connaught Place </small><ul class="pager"><li class="next"><a href="#">4.2</a></li></ul></h1>
				</div>
				<h3></h3>
				<ul style="list-style-type:none">
					<li><font size="4" color="#FF6666">Contact no: </font><font size="4"> 011 87654321</font></li>
					<li><font size="4" color="#FF6666">Location: </font><font size="4"> A-26, Inner Circle, Connaught Place, New Delhi.</font></li>
				</ul>
				<h3></h3>
				<ul style="list-style-type:none">
					<li><font size="4" color="#FF6666">Open hours: </font><font size="4"> 10 am to 10 pm</font></li>
					<li><font size="4" color="#FF6666">Minimum Order: </font><font size="4"> Rs 500</font></li>
					<h3></h3>
					<li><font size="5" color="#FF6666">Mode of Payment: </font>
					<form role="form">
						<input type="radio" name="pay" value="cod"><font size="4"> Cash on Delivery</font><br>
						<input type="radio" name="pay" value="c/d"><font size="4"> Credit/Debit Card</font><br>
					<ul class="pager">
					<li><a href="modepay.php"><font size="5" face='"impact", cursive, sans-serif'>Checkout!</font></a></li>
					</ul>
					</form>
				</ul>	
				</ul>
				
				
			</div>
			
			<div id="rright">
				<h1 style="color:white; font-family:Impact; text-align:center;">Menu</h1>
				<table class="table table-hover" style="background-color:#FFFFCC" width="80%">
					<thead>
					<tr style="background-color:#FF9999; color:white; font-size:15">
						<th>ITEM</th>
						<th>PRICE (INR)</th>
						<th></th>
					</tr>
					</thead>
					
					<tbody>
						<tr style="background-color:#FFCCFF"> <td><b><i>DOSA</i></b></td><td></td><td></td> </tr>
						<tr> <td>Plain Dosa <span class="badge" id="b1" >0</span></td><td align="center">75 </td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub1()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add1()">+</button></div></td></tr>
						<tr> <td>Masala Dosa <span class="badge" id="b2">0</span></td><td align="center">100 </td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub2()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add2()">+</button></div</td> </tr>
						<tr> <td>Rava Dosa <span class="badge" id="b3">0</span></td><td align="center">120 </td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub3()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add3()">+</button></div</td> </tr>
						<tr style="background-color:#FFCCFF"> <td><b><i>UTTAPAM</i></b></td><td></td><td></td> </tr>
						<tr> <td>Plain Uttapam <span class="badge" id="b4">0</span></td><td align="center">80 </td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub4()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add4()">+</button></div</td> </tr>
						<tr> <td>Masala Uttapam <span class="badge" id="b5">0</span></td><td align="center">95 </td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub5()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add5()">+</button></div</td> </tr>
						<tr> <td>Rava Uttapam <span class="badge" id="b6">0</span></td><td align="center">120 </td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub6()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add6()">+</button></div</td> </tr>
						<tr style="background-color:#FFCCFF"> <td><b><i>SIDES</i></b></td><td></td><td></td> </tr>
						<tr> <td>Idli Sambhar <span class="badge" id="b7">0</span></td><td align="center">75 </td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub7()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add7()">+</button></div</td> </tr>
						<tr> <td>Vada Sambhar <span class="badge" id="b8">0</span></td><td align="center">80 </td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub8()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add8()">+</button></div</td> </tr>
						<tr style="background-color:#FFCCFF"> <td><b><i>SWEET</i></b></td><td></td><td></td> </tr>
						<tr> <td>Kesari <span class="badge" id="b9">0</span></td><td align="center">60 </td><td><div class="btn-group"><button type="button" class="btn btn-danger btn-xs" onclick="sub9()">-</button><button type="button" class="btn btn-success btn-xs" onclick="add9()">+</button></div</td> </tr>
					</tbody>
				</table>
				
				
							</div>
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
			