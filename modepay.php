<?php
$pay=$_POST['pay'];
if(strcmp($pay,"c/d"))
   header ('location:payment.html');
else if(strcmp($pay,"cod"))
   header ('location:order.html');
?>   
