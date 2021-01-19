<?php
  $start=$_GET['s'];$end=$_GET['e'];$c=$_GET['class'];
  //echo $_GET['s'];
  //echo $_GET['e'];
  echo $c;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>DM</h1>
<form action="Attendance/dm.php?start=<?php echo $start ?> & end=<?php echo $end ?> & class=<?php echo $c ?>" method="post">
 <p id="hello"></p>
 <input type="submit">
</form><br><br>
<h1>JAVA</h1>
<form action="Attendance/java.php?start=<?php echo $start ?> & end=<?php echo $end ?>& class=<?php echo $c ?>" method="post">
 <p id="hello"></p>
 <input type="submit">
</form><br><br>

<h1>OS</h1>
<form action="Attendance/os.php?start=<?php echo $start ?> & end=<?php echo $end ?>& class=<?php echo $c ?>" method="post">
 <p id="hello"></p>
 <input type="submit">
</form><br><br>
<h1>AWT</h1>
<form action="Attendance/awt.php?start=<?php echo $start ?> & end=<?php echo $end ?>& class=<?php echo $c ?>" method="post">
 <p id="hello"></p>
 <input type="submit">
</form>
<br><br><br>


<script>
        var start=<?php echo $start ?>;
        var end=<?php echo $end ?>;
 		output="<table border='1px'><tr><th>Roll no.</th><th>Attendance</th></tr>"
 		for(i=start;i<=end;i++)
 		{
 			
 			output=output+"<tr>"
 				output=output+"<td align='center'>"+i+ "</td>"
 				output=output+"<td><select name="+i+" style='width:100px'><option>P</option><option>A</option></select></td>"
 			output=output+"</tr>"
 		}
 		output=output+"</table>"
 		var x=document.getElementsByTagName("p");
 		for(i=0;i<4;i++)
 		    x[i].innerHTML=output;
 		
 		//document.write(output);
 	</script>
<br><br><br>
</body>
</html>