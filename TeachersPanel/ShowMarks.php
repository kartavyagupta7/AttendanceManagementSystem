<?php
 $start=$_GET['s'];
 $end=$_GET['e'];
// echo $_GET['s'];
//echo $_GET['e'];
// $class='I2';
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
  	//$slctq1="select * from pi;";
  	//$result1=mysqli_query($con,$slctq1);
  	//$num1=mysqli_num_rows($result1);
  	$slctq1="select * from MarksSt1;";
  	$result1=mysqli_query($con,$slctq1);
  	$num1=mysqli_num_rows($result1);
  	for($i=1;$i<$start;$i++){
  		mysqli_fetch_array($result1);
  	}
  	for($i=$start;$i<=$end;$i++){
  		$row1=mysqli_fetch_array($result1);
        $dm[$i]=$row1['DM'];
        $java[$i]=$row1['JAVA'];
        $os[$i]=$row1['OS'];
        $awt[$i]=$row1['AWT'];
  	}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h1>St1 Marks</h1>
  <p id="table"></p>
<script type="text/javascript">
   var dm=<?php echo json_encode($dm); ?>;
   var java=<?php echo json_encode($java); ?>;
   var os=<?php echo json_encode($os); ?>;
   var awt=<?php echo json_encode($awt); ?>;
   console.log(dm);
   <?php echo $start ?>;
   <?php echo $end ?>;
    var start=<?php echo $start ?>;
        var end=<?php echo $end ?>;
   output="<table border='1px' width='850px' style='margin:40px'><tr align='center'>"
   output=output+"<th style='padding:10px'>Sno.</th><th>Roll No.</th><th>DM</th><th>JAVA</th><th>OS</th><th>AWT</th></tr>"
   k=1;
     for(i=start;i<=end;i++){
      output=output+"<tr align='center'>";
      output=output+"<td style='padding:10px'>"+k+"</td><td>"+i+"</td><td>"+dm[i]+"</td><td>"+java[i]+"</td><td>"+os[i]+"</td><td>"+awt[i]+"</td>"
        output=output+"</tr>"
      k++;
     }
   output=output+"</table>"
   document.getElementById("table").innerHTML=output;
   
</script>
</body>
</html>