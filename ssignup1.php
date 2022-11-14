<?php
include 'connect.php';

	


if(isset($_POST['submit']))
{
	$name	=	$_POST['name'];
	$dob	=	$_POST['dob'];
	$gender	=	$_POST['gender'];
	$semester =$_POST['semester'];
	$pass	=	$_POST['password'];
	$email	=	$_POST['email'];
	$phone	=	$_POST['phone'];
}

$sql="insert into student values(null,'$name','$dob','$gender','$semester','$pass','$phone','$email','VERIFIED')";
$result=mysqli_query($con,$sql);

if($result)
{
	header('location:ssignup.php?error=1');
}


?>