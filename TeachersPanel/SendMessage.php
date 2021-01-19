<?php
 $class=$_GET['c'];
 //echo $_GET['c'];
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
<form method="post" action="insertmessage.php?class=<?php  echo $class ?>">
<p align="center"> <textarea  name="m1" style="margin-left: -350px;margin-top:50px " placeholder="Type Message ..." rows="8" cols="60"></textarea> </p>
<input type="submit" style="margin-left: 430px" value="Send Message">
</form> 
</body>
</html>

