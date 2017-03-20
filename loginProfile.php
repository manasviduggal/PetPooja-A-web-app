<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con=mysql_connect($hostname,$username,$password);

if (!$con){ die('Could not connect: '. mysql_error());}
//connection to the database

$dbName="petpooja";
$db = @mysql_select_db($dbName,$con) or die(mysql_error());

//$name=$_POST['email'];
$sql="select * from customer";
$result = mysql_query($sql,$con);
echo "hello";
while($row=mysql_fetch_array($result))
{   
    echo "<p>Name: </p>".$row['cus_name']."a"; 
	echo "<br>";
	echo "Email: ".$row['email'];
	echo "<br>";
	echo "Address: ".$row['address'];
	echo "<br>";
	
	echo "Phone: ".$row['cus_phone'];
	echo "<br>";
	
}

mysql_close($con);

exit;
?>
