<?php

 $p=$_POST['password'];
  $u=$_POST['username'];// $p='archit';//$_POST['password'];
  //$u='kartavya';//$_POST['username'];
 // echo $p,$u;
 //$p=$_POST['password'];
  //$u=$_POST['username'];
  $flag=0;
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
  	$slctq1="select * from StudentDetails;";
  	$result1=mysqli_query($con,$slctq1);
  	$num1=mysqli_num_rows($result1);
  	for($i=0;$i<$num1;$i++)
  	{
  		$row1=mysqli_fetch_array($result1);
  	 //	echo $row['username'],"  ",$row['password'];
  		if($row1['Username']==$u and $row1['Password']==$p)
  		{

        
        $rno=$row1['rollno'];
        $fname=$row1['Fathername'];
        $year=$row1['Year'];
        $ph=$row1['Ph'];
        $src=$row1['img'];
        $class=$row1['Class'];


         $slctq2="select * from Attendance";
         $result2=mysqli_query($con,$slctq2);
         $num2=mysqli_num_rows($result2);
         for($j=0;$j<$num2;$j++)
         {
           $row2=mysqli_fetch_array($result2);
           if($row2['Rollno']==$rno)
           {
              $dm=$row2['DM'];
              $awt=$row2['AWT'];
              $java=$row2['JAVA'];
              $os=$row2['OS'];
              break;
           }
         }
         break;
  		}
  	}
  	if($i==$num1)
  		{echo"username and password not match!!<br>";
  	    $flag=1;
  	}
  	else
  	{
        $slctq3="select * from Classes;";
        $result3=mysqli_query($con,$slctq3);
        while(true)
        {
           $row3=mysqli_fetch_array($result3);
           if($row3['class']==$class)
             {
              $Mname=$row3['mentor'];
               $Ddm=$row3['DM'];
               $Dawt=$row3['AWT'];
               $Djava=$row3['JAVA'];
               $Dos=$row3['OS'];
              $Mph=$row3['Mphno'];
             
              break;
             }
        }


        // echo $rno;
         //echo $u;
      //   echo $fname;
       //  echo $year;
        // echo $src;
        // echo $ph;
        // echo $p;
        // echo $dm;
         //echo $awt;
         //echo $java;
         //echo $os;
        // echo $class;
         //echo $Mname;
         //echo $Ddm;
        // echo $Dawt;
        // echo $Djava;
        // echo $Dos;
         //echo $Mph;

  	}


  	
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
<body>
<!-- <a href="scorecard.php?rollno=<?php// echo $rno ?>">Marks</a><br><br> --> 
  	   
<?php 
if($flag==1)
   echo "<!--" ?>
<table border="0px"  width="1030px">
  <tr>
    <td>
<iframe src="Pleftside.php?class=<?php echo $class ?>" height="880px" width="250px"></iframe>
   </td>
   <td width="1000px">
   	<br>
<table border="0px" align="center">
  <tr>
     <td align="center">
     <font size="10" >Welcome <?php echo $u ?></font><br>
     <font size="5">Roll Number : <?php echo $rno ?> | Class : <?php echo $class ?> | Year :<?php echo $year ?></font><br>
     <font size="4"><b>Mentor : <?php echo $Mname ?> | M.Ph No. <?php echo $Mph ?></b></font>
      </td>
      <td>
        &nbsp<img src="userImg/<?php  echo "$src" ?>"  class="rounded-circle"  width="100px" height="85px" style="margin-top:30px "></td>
      </td>
   </tr>
</table>
      <br><br>

		     <nav class="navbar navbar-expand-lg bg-secondary navbar-dark" style="height:25px">
		  <ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="academicattendance.php?rollno=<?php echo $rno ?>" target="main">Attendance</a>
		    </li>
         
         <li class="nav-item">
          <a class="nav-link" href="scorecard.php?rollno=<?php echo $rno ?>" target="main">ScoreCard</a>
        </li>

		    <li class="nav-item">
		      <a class="nav-link" href="Personalinfo.php?rollno=<?php echo $rno ?>" target="main">Personal Info.</a>
		    </li>
         <li class="nav-item">
          <a class="nav-link" href="login.html">Log Out</a>
        </li>
		  </ul>
		</nav><br>


     <iframe align="center" src="academicattendance.php?rollno=<?php echo $rno ?>" height="570px" width="1030px" frameborder="0" name="main"></iframe>
     <br><br><br>

</body>
</html>
<?php
mysqli_close($con);
?>