 
<?php
   
  $class=$_GET['class'];
  $message=$_POST['m1'];
  //echo $class;
  //echo $message;

//connection
$host = "localhost";
$user = "root";
$password =  "";
$db = "onlinedb";
$con = mysqli_connect($host,$user,$password,$db);
//
if(!$con)
	echo("failed");
mysqli_select_db($con,'onlinedb');
$inq1="insert into Messages values('$class','$message');";
$x=mysqli_query($con,$inq1);
if($x)
   echo"message sent";
else
	echo"Not sent,try again";
mysqli_close($con);




?>