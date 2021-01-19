<?php
  $start=$_GET['s'];$end=$_GET['e'];
 //echo $_GET['s'];
  //echo $_GET['e'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>DM</h1>
<form action="Marks/dm.php?start=<?php echo $start ?> & end=<?php echo $end ?>" method="post">
 <p id="hello"></p>
 <input type="submit">
</form><br><br>
<h1>JAVA</h1>
<form action="Marks/java.php?start=<?php echo $start ?> & end=<?php echo $end ?>" method="post">
 <p id="hello"></p>
 <input type="submit">
</form><br><br>
<h1>OS</h1>
<form action="Marks/os.php?start=<?php echo $start ?> & end=<?php echo $end ?>" method="post">
 <p id="hello"></p>
 <input type="submit">
</form><br><br>
<h1>AWT</h1>
<form action="Marks/awt.php?start=<?php echo $start ?> & end=<?php echo $end ?>" method="post">
 <p id="hello"></p>
 <input type="submit">
</form>
<br><br><br>


<script>
        var start=<?php echo $start ?>;
        var end=<?php echo $end ?>;
 		output="<table border='1px'><tr><th>Roll no.</th><th>Update Attendance</th></tr>"
 		for(i=start;i<=end;i++)
 		{
 			
 			output=output+"<tr align='center'>"
 				output=output+"<td>"+i+ "</td>"
 				output=output+"<td><input type='number' name="+i+"></td>"
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