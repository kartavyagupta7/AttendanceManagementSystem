<?php
 $start=$_GET['s'];
 $end=$_GET['e'];
 //echo $_GET['s'];
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
    $slctq1="select * from StudentDetails";
    $result1=mysqli_query($con,$slctq1);
    $num1=mysqli_num_rows($result1);
    // for($i=0;$i<$num1;$i++)
    // {
    //  $row1=mysqli_fetch_array($result1);
    //  if($row1['class']=='I1'){
    //    $roll[$row1['rollno']]=$row1['username'];
    //  }
    // }
    // //echo $roll[1];
    //$slctq1="select * from attendance;";
    //$result1=mysqli_query($con,$slctq1);
    //$num1=mysqli_num_rows($result1);
    for($i=1;$i<$start;$i++){

      mysqli_fetch_array($result1);
    }
    for($i=$start;$i<=$end;$i++){
      //echo($i);
      $row1=mysqli_fetch_array($result1);
        $name[$i]=$row1['Username'];
        $fname[$i]=$row1['Fathername'];
        //echo $fname[$i];
        //echo "";
        $ph[$i]=$row1['Ph'];
        $class[$i]=$row1['Class'];
    }
    //echo $name[2];   
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <p id="table"></p>
<script type="text/javascript">
   var n=<?php echo json_encode($name); ?>;
   var f=<?php echo json_encode($fname); ?>;
   var p=<?php echo json_encode($ph); ?>;
   var c=<?php echo json_encode($class); ?>;
   var start=<?php echo $start; ?>;
   var end=<?php echo $end; ?>;
   //console.log(f);
    //document.getElementById("table").innerHTML=start;
   output="<table border='1px' width='850px' style='margin:40px;'><tr align='center'>"
   output=output+"<th style='padding:10px'>Sno.</th><th>Roll No.</th><th>Name</th><th>Father's Name</th><th>Phone No.</th><th>Class</th></tr>"
   k=1;
     for(i=start;i<=end;i++){
      output=output+"<tr align='center'>";
      output=output+"<td style='padding:10px'>"+k+"</td><td>"+i+"</td><td>"+n[i]+"</td><td>"+f[i]+"</td><td>"+p[i]+"</td><td>"+c[i]+"</td>"
        output=output+"</tr>"
      k++;
     }
     output=output+"</table>"
     document.getElementById("table").innerHTML=output;
</script>
</body>
</html>