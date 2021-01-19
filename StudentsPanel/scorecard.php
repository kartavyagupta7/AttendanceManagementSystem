<?php
     $r=$_GET['rollno'];
    // echo $r;


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
    $slctq1="select * from MarksSt1;";
    $result1=mysqli_query($con,$slctq1);
    $num1=mysqli_num_rows($result1);
    for($i=0;$i<$num1;$i++)
    {
      $row1=mysqli_fetch_array($result1);
     // echo $row['username'],"  ",$row['password'];
      if($row1['Rollno']==$r )
      {
        $dm=$row1['DM'];
        $java=$row1['JAVA'];
        $os=$row1['OS'];
        $awt=$row1['AWT'];
      }
    }
  //  echo $dm;
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
  
  <font size="10px"> Score Card :-</font><br><br><br>

<div class="container">
  <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#demo">Check ST 1 Marks</button><br><br>
  <div id="demo" class="collapse">
   

<div class="container">

 
<table border="1px">
  <tr>
    <th>Roll No.</th>
    <th>DM Marks</th>
    <th>OS Marks</th>
    <th>JAVA Marks</th>
    <th>AWT MArks</th>
  </tr>
  <tr align="center">
    <td><?php echo $r  ?></td>
    <td><?php echo $dm  ?></td>
    <td><?php echo $os  ?></td>
    <td><?php echo $java ?></td>
    <td><?php echo $awt  ?></td>
  </tr>
</table>
</div>
<br><br>


  </div>
</div>



<div class="container">
  <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#demo1">Check ST 2 Marks</button><br><br>
  <div id="demo1" class="collapse">
     <div class="container">
    Not updated
      </div>
   </div>


</body>
</html>
<?php
mysqli_close($con);
?>