<?php
    $class=$_GET['class'];
   // $m=$_GET['Mname'];
//connection
$host = "localhost";
$user = "root";
$password =  "";
$db = "onlinedb";
$con = mysqli_connect($host,$user,$password,$db);
//
if(!$con)
	echo("failed");
$i=0;
  	mysqli_select_db($con,'onlinedb');
  	$slctq="select * from Messages;";
  	$result=mysqli_query($con,$slctq);
  	$num=mysqli_num_rows($result);
    $k=1;
  	for($i=1;$i<=$num;$i++)
  	{
  		$row=mysqli_fetch_array($result);
      if($row['class']==$class)
  		  { 
          $m[$k]= $row['Message'];
          $k++;
        }
  	}
  //	echo $m[1];
  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
                                   <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body >
	
	
	<P style="color: grey"  >//Message by your mentor is shown over here:-</P>
	<p>
	<?php 
	   for($j=1;$j<$k;$j++)
	       echo  $j,")",$m[$j],"<hr>";
	  ?>
	</p>

	 
</body>
</html>