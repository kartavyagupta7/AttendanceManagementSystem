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
  //  echo $m[1];
  
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


<Style>
  iframe{  
       border: 4px solid lightgrey;
      -moz-border-radius: 15px;
      border-radius: 15px;
  }
</Style>




</head>
<body style="background-color: lightgrey;"> 
 <!-- <h1><?php //echo $class ?></h1> -->
 <img src="chitkara.png" width="200px" height="100px">
 <hr>
 <h1><small>CLASS : <?PHP ECHO $class ?></small></h1><br>
  <!--<h4 ><small><b>Mentor:</b></small></h4>-->
  <div class="container">
  <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#demo"  >Mentor Messages <span class="badge badge-light"><?php echo $k-1 ?></span></button>


           
<br><br>

  <div id="demo" class="collapse" ><br>
   
      <iframe  src="Pmessage.php?class=<?php echo $class ?>" frameborder="0" height="400px" width="200.px"></iframe>
   
 
 </div>
</div><br><br><br>
<p ><h1 align="center"><small><b> "Never Say Never"</b></small></h1></p>
</body>
</html>
<?php
  mysqli_close($con);
  ?>