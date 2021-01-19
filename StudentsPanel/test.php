<?php
$host = "localhost";
$user = "root";
$password =  "";
$db = "onlinedb";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con)
{
    echo "not connectes.";
}
$sql = "INSERT INTO `Messages` (`class`, `Message`) VALUES ('I3', 'helloo');";
if(mysqli_query($con,$sql))
{

echo "Succesfully saved";

}
$sql = "select * from Messages";
$res = mysqli_query($con,$sql);
$a=mysqli_fetch_array($res);
echo $a['class'];


?>
