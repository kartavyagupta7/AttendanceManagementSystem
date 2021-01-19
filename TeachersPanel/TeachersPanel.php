<?php

 $p=$_POST['password'];
 $c=$_POST['class'];
// echo $c;
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
 $slctq1="select * from Classes;";
  	$result1=mysqli_query($con,$slctq1);
  	$num1=mysqli_num_rows($result1);
  	for($i=0;$i<$num1;$i++)
  	{
  		$row1=mysqli_fetch_array($result1);
  	 //	echo $row['username'],"  ",$row['password'];
  		if($row1['class']==$c and $row1['password']==$p)
  		{
  			$name=$row1['mentor'];
  			$Mph=$row1['Mphno'];
  			$flag=1;
  			break;
  		}
  	}
  	 $slctq1="select * from StudentDetails;";
  	$result1=mysqli_query($con,$slctq1);
  	$num1=mysqli_num_rows($result1);
  	$start=0;$end=0;
  	for($i=1;$i<=$num1;$i++)
  	{
  		$row1=mysqli_fetch_array($result1);
  		if($row1['Class']==$c){
  			if($start==0)
  				$start=$i;
  			$end++;
  		}
  	}
  	$end=$start+$end-1;
  	if($flag==0)
  		echo "wrong password";

      

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	.text-on-pannel {
  background: #fff none repeat scroll 0 0;
  height: auto;
  margin-left: 20px;
  padding: 3px 5px;
  position: absolute;
  margin-top: -47px;
  border: 1px solid #337ab7;
  border-radius: 8px;

}
.panel-body {
  padding-top: 30px !important;
}
button{
	width:190px;
	height: 40px;
	color: black;
	margin-top: 8px;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<?php if($flag==0) echo "<!--" ?>
<table border="0px">
	<tr>
		<td height="650px" width="250px" style="background-color: lightgrey" align="center">
			<img src="chitkara.png" width="240px" height="100px">
			<hr><br>
			<h3 align="center">CLASS : <?php echo $c ?></h3><br>
			<table border="0px" style="background-color: lightgrey;" align="center">
				<tr>
					<td>
					  <a href="ShowAttendance.php?s=<?php echo $start?>&e=<?php echo $end ?>&class=<?php echo $c ?>" target="main">
						<button onclick="sa()" style="font-size: 20px;margin-top: 8px;color: black;">Show Attendance</button></td>
					  </a>
				</tr>
				<tr>
					<td>
						<a href="ShowMarks.php?s=<?php echo $start?>&e=<?php echo $end ?>" target="main">
							<button onclick="sm()" style="font-size: 20px;margin-top: 8px;color: black;">Show Marks</button> </td>
						</a>
				</tr>
				<tr>
					<td>
					  <a href="ShowPi.php?s=<?php echo $start?>&e=<?php echo $end ?>" target="main">
						<button onclick="ci()" style="font-size: 20px;margin-top: 8px;color: black;">Class Info.</button></td>
					  </a>
				</tr>
				<tr>
					<td>
						<a href="takeAttendance.php?s=<?php echo $start?>&e=<?php echo $end ?>&class=<?php echo $c ?>" target="main">
							<button onclick="ta()" style="font-size:20px;margin-top: 8px;color: black;">Take Attendance</button></td>
						</a>
				</tr>
				<tr>
					<td>
						<a href="updateMarks.php?s=<?php echo $start?>&e=<?php echo $end ?>" target="main">
							<button onclick="um()" style="font-size:20px;margin-top:8px;color: black;">Update Marks</button></td>
						</a>
				</tr>
				<tr>
					<td>
						<a href="SendMessage.php?c=<?php echo $c ?>" target="main">
							<button onclick="m()" style="font-size: 20px;margin-top: 8px;color: black;">Send Message</button></td>
						</a>
				</tr>
			</table>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		</td>

		<td height="650px" width="1030px">
			<br>
			<table border="0px" align="center">
             <tr>
		      <td align="center">
			     <font size="10" >Welcome <?php echo $name;  ?></font><br>
			     <font size="5">CLass Mentor : <?php echo $c;//echo $start;echo $end ?> | Ph.No. : <?php echo $Mph;?></font><br>
			     Chitkara University,Rajpura(Punjab)
		      </td>
		      <td>
		        &nbsp<img src="TeachersImg/<?php echo $name;  ?>.jpg"  class="rounded-circle"  width="100px" height="85px" style="margin-top:30px ">
		      </td>
		    </tr>
		</table>
		<br><br><br><br>
<div class="container" style="width: auto;height: auto;">
  <div class="panel panel-primary">
    <div class="panel-body">
      <h3 class="text-on-pannel text-dark"><strong class="text-uppercase" id="title"> Show attendance </strong></h3>
      <iframe src="ShowAttendance.php?s=<?php echo $start?>&e=<?php echo $end ?>&class=<?php echo $c ?>" name="main" width="990px" height="460px" frameborder="0px"></iframe>
    </div>
  </div>
  <div>

		</td>
	</tr>
</table>
<script type="text/javascript">
	function sa(){
      document.getElementById("title").innerHTML="Show Attendance";
	}
	function sm(){
      document.getElementById("title").innerHTML="Show Marks";
	}
	function ci(){
      document.getElementById("title").innerHTML="Class Details";
	}
	function ta(){
      document.getElementById("title").innerHTML="Take Attendance";
	}
	function um(){
      document.getElementById("title").innerHTML="Update Marks";
	}
	function m(){
      document.getElementById("title").innerHTML="Send Message";
	}
</script>
</body>
</html>