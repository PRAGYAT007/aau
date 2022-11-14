<?php
include 'connect.php';
$Name=mysqli_escape_string($con,$_POST["name"]);
$Email=$_POST["email"];
$Phone_no=mysqli_escape_string($con,$_POST["phone"]);
$sql="select * from register where email='$Email' || phone='$Phone_no'";
$qury=mysqli_query($con,$sql);
$n=mysqli_num_rows($qury);

if ($n>0)
{
   header("location:register.php?exist=1");
}

 else
{
 
$DOB=$_POST["dob"];
$Gender=$_POST["gender"];
$Address=mysqli_escape_string($con,$_POST["address"]);
$Password=$_POST["password"];
$sql="insert into register values(null,'$Name','$Email','$Phone_no','$DOB','$Gender','$Address','$Password');";
$result=mysqli_query($con,$sql);
if ($result) 
{
	header("location:index.php?regis=1");
}
else
{
	echo mysqli_error($con);
}	
}

?>