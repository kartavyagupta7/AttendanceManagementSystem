<?php
 $start=$_GET['s'];
 $end=$_GET['e'];
 $class=$_GET['class'];
//echo $class;
//echo $_GET['e'];
 //$class='I2';
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
  	$slctq1="select * from Attendance;";
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
  	//echo $dm[1];
  	$slctq1="select * from Classes;";
  	$result1=mysqli_query($con,$slctq1);
  	$num1=mysqli_num_rows($result1);
  	for($i=0;$i<$num1;$i++){
  		$row1=mysqli_fetch_array($result1);
  		if($row1['class']==$class){
  		    $DM=$row1['DM'];
  		    $JAVA=$row1['JAVA'];
  		    $OS=$row1['OS'];
  		    $AWT=$row1['AWT'];
  		    break;
  		}
  	}
  	//echo $DM; 
  		
  	

  	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <p id="table"></p>
<script type="text/javascript">
	 var dm=<?php echo json_encode($dm); ?>;
	 var java=<?php echo json_encode($java); ?>;
	 var os=<?php echo json_encode($os); ?>;
	 var awt=<?php echo json_encode($awt); ?>;
	 <?php echo $start ?>;
	 <?php echo $end ?>;
	  var start=<?php echo $start ?>;
        var end=<?php echo $end ?>;
	 output="<table border='1px' width='850px' style='margin:40px'><tr align='center'>"
	 output=output+"<th  style='padding:10px'>Sno.</th><th>Roll No.</th><th>DM</th><th>JAVA</th><th>OS</th><th>AWT</th></tr>"
	 k=1;
	 var dmP=0;var javaP=0;var osP=0;var awtP=0;
     for(i=start;i<=end;i++){
        dmP=0;javaP=0;osP=0;awtP=0;
     	if(<?php echo $DM?> != 0)
     	   dmP=dm[i]*100/<?php echo $DM?>;
     	if(<?php echo $JAVA?> != 0)
     	   javaP=java[i]*100/<?php echo $JAVA?>;
     	if(<?php echo $OS?> != 0)
     	   osP=os[i]*100/<?php echo $OS?>;
     	if(<?php echo $DM?> != 0)
     	   awtP=awt[i]*100/<?php echo $AWT?>;
     	output=output+"<tr align='center'>";
     	output=output+"<td style='padding:10px'>"+k+"</td><td>"+i+"</td><td>"+dmP.toFixed(2)+"%</td><td>"+javaP.toFixed(2)+"%</td><td>"+osP.toFixed(2)+"%</td><td>"+awtP.toFixed(2)+"%</td>"
        output=output+"</tr>"
     	k++;
     }
	 output=output+"</table>"
	 document.getElementById("table").innerHTML=output;
   
</script>
</body>
</html>