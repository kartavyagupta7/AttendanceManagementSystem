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

        
        $u=$row1['Username'];
        $fname=$row1['Fathername'];
        $year=$row1['Year'];
        $ph=$row1['Ph'];
        $src=$row1['img'];
        $class=$row1['Class'];
        break;
       }
   }

//echo "$class";


  	

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

/*
        echo $rno;
         echo $u;
       echo $fname;
         echo $year;
        // echo $src;
         echo $ph;
        // echo $p;
        // echo $dm;
         //echo $awt;
         //echo $java;
         //echo $os;
        echo $class;
        echo $Mname;
         //echo $Ddm;
         //echo $Dawt;
         //echo $Djava;
         //echo $Dos;
        echo $Mph;
*/
 


  	
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

	<h1><small>&nbsp Personal Information :-</small></h1><br><br>
   <div class="container">


          <div class="container">           
  <table class="table table-dark table-striped" style="width:350px;margin-left: 70px;">
    <tbody>
      <tr>
        <td>Student Name :</td>
        <td><?php echo "$u";  ?></td>
      </tr>
      <tr>
        <td>Roll Number :</td>
        <td><?php echo "$rno";  ?></td>
      </tr>
      <tr>
        <td>Class :</td>
        <td><?php echo "$class";  ?></td>
      </tr>
       <tr>
        <td>Year :</td>
        <td><?php echo "$year";  ?></td>
      </tr>
       <tr>
        <td>Student Ph. No. :</td>
        <td><?php echo "$ph";  ?></td>
      </tr>
       <tr>
        <td>Father's Name :</td>
        <td><?php echo "$fname";  ?></td>
      </tr>
       <tr>
        <td>Mentor's Name :</td>
        <td><?php echo "$Mname";  ?></td>
      </tr>
       <tr>
        <td>Mentor's Ph. No. :</td>
        <td><?php echo "$Mph";  ?></td>
      </tr>
    </tbody>
  </table>
</div>




<!--    <font size="5">&nbsp &nbsp Student Name : <b><?php //echo "$u";  ?></b></font> -->
   </div>

</body>
</html>


<?php
mysqli_close($con);
?>