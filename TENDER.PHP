<?php
$con=mysqli_connect('localhost','root',"",'tender management');

$Name=$_POST["name"];
$Email=$_POST["email"];
$Password=$_POST["psw"];
$Repassword=$_POST["psw-repeat"];
$Adhar no=$_POST["adhar"];

$sql="INSERT INTO register(Username,Email,Password,Repassword,Adhar no) VALUES('$Username','$Email','$Password','$Repassword','$Adhar no')";

$rs=mysqli_query($con,$sql);

if($rs)
{
echo "data successfully";
}
?>
