<?php

$u=$_POST['username'];
$p=$_POST['password'];
//$r=$_POST['rno'];
$c=$_POST['class'];
$e=$_POST['email'];
$pno=$_POST['pno'];
$f=$_POST['fname'];
$y=$_POST['year'];
 echo $u;
 echo $p;
// echo $r;
 echo $e;
 echo $pno;
 echo $f;
 echo $y;
 echo $c;
 
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
$inq1="INSERT INTO `StudentDetails` (`rollno`, `Username`, `Email`, `Fathername`, `Year`, `img`, `Ph`, `Password`, `Class`) VALUES (NULL, '$u', '$e', '$f', $y, '$u.png', '$pno', '$p', '$c');";
$inq2="insert into Attendance values(NULL,0,0,0,0);";
$inq3="insert into MarksSt1 values(NULL,0,0,0,0);";
$x=mysqli_query($con,$inq1);
$y=mysqli_query($con,$inq2);
$z=mysqli_query($con,$inq3);
if($x and $y and $z)
   echo"account created";
else
	echo"not created";
mysqli_close($con);

?>

  