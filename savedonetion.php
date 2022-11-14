<?php 
include 'connect.php';

$Name=mysqli_escape_string($con,$_POST["name"]);
$Email=$_POST["email"];
$Phone=$_POST["phone"];

$pAddress=mysqli_escape_string($con,$_POST["addr"]);
$dAddress=mysqli_escape_string($con,$_POST["adr"]);

$Payment=$_POST["pay"];
$sql="insert into carbok values(null,'$Name','$Email','$Phone','$pAddress','$dAddress','$Payment');";
$result=mysqli_query($con,$sql);
if ($result) 
{
		
		if($Payment=='online')
		{
    header("location:pay1.php");
		}
		else
		{
			   header("location:printrecipt.php?save=1");
		}
}
else
{
  echo mysqli_error($con);
 }

?>