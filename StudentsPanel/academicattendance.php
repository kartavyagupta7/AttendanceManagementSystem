
<?php
 $rno=$_GET['rollno'];
 // $p='styles';//$_POST['password'];
  //$u='harry';//$_POST['username'];
 // echo $p,$u;
 //$p=$_POST['password'];
  //$u=$_POST['username'];



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
  		 if($row1['rollno']==$rno)
  		{

        
        $rno=$row1['rollno'];
        $fname=$row1['Fathername'];
        $year=$row1['Year'];
        $ph=$row1['Ph'];
        $src=$row1['img'];
        $class=$row1['Class'];
        break;
       }
   }

//echo "$class";








      //$con=mysqli_connect('localhost','root');
            mysqli_select_db($con,'id14216513_test');
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


        //echo $rno;
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
         //echo $Dawt;
         //echo $Djava;
         //echo $Dos;
         //echo $Mph;

 


  	
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
<h1><small>&nbsp Academic Attendance :-</small></h1>
		<table border="0" height="550px" align="center">
			<tr>
				<td  height="300px">
					<div style="border-radius: 10px;width:370px;height:230px;margin-right:50px;padding: 20px;background-color: white;border:1px solid black; " >
						

						<h3 align="center" ><small><b>Discreate Maths</b></small></h3>
<div class="container">
  
 <div class="progress">
   <div class="progress-bar bg-secondary" style="width:<?php echo $dm*100/$Ddm; ?>%"><?php echo number_format($dm*100/$Ddm,2); ?>%</div>
 </div>
</div><br>
<h4 align="center"><small>Lecture Delivered : <?php echo $Ddm ?></small></h4>
<h4 align="center"><small>Lecture Attended : <?php echo $dm ?></small></h4>




					</div>
				</td>
				<td >
					<div style="border-radius:10px;width:370px;height:230px;padding: 20px;background-color: white;border:1px solid black;" >
						

						<h3 align="center" ><small><b>Java</b></small></h3>

<div class="container">
  
 <div class="progress">
   <div class="progress-bar bg-secondary" style="width:<?php echo $java*100/$Djava ?>%"><?php echo number_format($java*100/$Djava,2); ?>%</div>
 </div>
</div><br>
<h4 align="center"><small>Lecture Delivered : <?php echo $Djava ?></small></h4>
<h4 align="center"><small>Lecture Attended : <?php echo $java ?></small></h4>	





					</div>
				</td>
			</tr>
			<tr>
				<td  height="250px">
					<div style="border-radius: 10px ;width:370px;height:230px;margin-bottom: 40px;padding: 20px;background-color:white;border:1px solid black;" >
						
                       <h3 align="center" class="text-black-50"><small>Operating System</small></h3>
<div class="container">
  <div class="progress">
      <div class="progress-bar bg-secondary" style="width:<?php echo $os*100/$Dos ?>%"><?php echo number_format($os*100/$Dos,2); ?>%</div>
  </div>
</div><br>
<h4 align="center"><small>Lecture Delivered : <?php echo $Dos ?></small></h4>
<h4 align="center"><small>Lecture Attended : <?php echo $os ?></small></h4>

					</div>
				</td>
				<td >
					<div style="border-radius:10px;width:370px;height:230px;margin-bottom: 40px;padding: 20px;background-color:white;border:1px solid black;" >
						

                      <h3 align="center" class="text-black-50"><small>Advance Web Technology</small></h3>


<div class="container">
  
 <div class="progress">
   <div class="progress-bar bg-secondary" style="width:<?php echo $awt*100/$Dawt ?>%"><?php echo number_format($awt*100/$Dawt,2); ?> %</div>
 </div>
</div><br>
<h4 align="center"><small>Lecture Delivered : <?php echo $Dawt ?></small></h4>
<h4 align="center"><small>Lecture Attended : <?php echo $awt ?></small></h4>





					</div>
				</td>
			</tr>
		</table>


     
   
   </td>
  </tr>
</table>
</body>
</html>