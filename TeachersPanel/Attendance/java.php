<?php
$start=(int)$_GET['start'];
$end=(int)$_GET['end'];
$class=$_GET['class'];
echo $class;
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
  	if($num[$i]=='P'){
  	   $inq="update Attendance set JAVA=JAVA + 1 where rollno=$i;";
  	   $x=mysqli_query($con,$inq);
	   if($x)
	    $flag=1;
     }
    }
  	$inq2="update Classes set JAVA = JAVA + 1 where class='$class';";
    $y=mysqli_query($con,$inq2);
  	if($y and $flag==1)
  		echo "successfully Updated";
  	else 
  	  echo "not successfull";
  	
  	   
  	mysqli_close($con); 
  /*	$slctq="select5 * from emp";
  	$resut=mysqli_query($con,$slctq);
  	$num=mysqli_num_rows($resut);
  	echo "total $num rows currently";
  		*/
  
?>