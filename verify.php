<?php

$hostname="localhost";
$username="root";
$password="";


$con=mysql_connect($hostname,$username,$password);

//if (!$con) { die ('couldnot connect '.mysql_error());}

// connection made
$db=@mysql_select_db("petpooja",$con)
or die(mysql_error());
echo "hello";
$name=$_POST['name'];
$contact=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['pw'];
$address=$_POST['addr'];
mysql_query("update customer set logstate=1 where cus_name='$name'",$con);

$result=mysql_query("select * from customer" ,$con);
$n= mysql_num_rows($result);
//$n=mysql_query("select count(*) from customer",$con);

for($i=0;$i<$n;$i++)
   	$row=mysql_fetch_array($result);

/*echo "<br>no.=".$n."<br>"; 
while($row=mysql_fetch_array($result))
       { 
		
   }*/
  
  $id=$row['cus_id']+1;
 //  echo $id;
$q="insert into customer(cus_id,cus_name,cus_phone,email,password,address) values('$id','$name','$contact','$email','$password','$address')" ;
$sql=mysql_query($q,$con);
if(!$sql)
{
	die(mysql_error());
    $c=1;
}
// record added and redirect to page profile
if($c==0)
{
	header('location: profile.php');
}
// record doesnot added and redirect to login page
else if($c==1)
{
	 header('location:my.php');
}

mysql_close($con);
 exit;
 ?>