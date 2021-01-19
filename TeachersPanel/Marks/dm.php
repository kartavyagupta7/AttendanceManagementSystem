<?php
$start=(int)$_GET['start'];
$end=(int)$_GET['end'];
//echo $start;
//echo $end;
for($i=$start;$i<=$end;$i++)
    {
      $num[$i]= $_POST[$i];
    }
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
  	$flag=0;
   for($i=$start;$i<=$end;$i++)
    {
  	 $inq="update MarksSt1 set DM=$num[$i] where rollno=$i;";
  	 $x=mysqli_query($con,$inq);
  	 if($x)
  	   $flah=1;
    }
  	if($flag==1)
  		echo "successfully submitted";
  	mysqli_close($con); 
  
?>