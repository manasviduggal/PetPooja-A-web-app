<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con=mysql_connect($hostname,$username,$password);

if (!$con){ die('Could not connect: '. mysql_error());}
//connection to the database

$dbName="petpooja";
$db = @mysql_select_db($dbName,$con) or die(mysql_error());

$name=$_POST['email'];
$pass=$_POST['pw'];
mysql_query("update customer modify set logstate=1 where email=$email",$con);

$sql="select *from login";
$result=mysql_query($sql,$con);
$c=0;
while($row=mysql_fetch_array($result))
{
	   if($row['email']==$name && $row['password']==$pass)
	  {  //mysql_close($con);
         $c=1;
		// echo "Succesful login<br><br>";
		 break;
	    
	  }
}
if($c==0)
{  header('Location: my.php'); 
	//echo "<h3>invalid details have been entered</h3>";
}	
else if($c==1)
{	header('Location: profile.php');

//echo "<h2>Welcome</h2>  " . $_POST['email']."<br> <h3>Your userid is: </h3>".$_POST['pw'];

}

mysql_close($con);

exit;
?>
   

