<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$link=mysqli_real_escape_string($con,$_POST['link']);
	$heading=mysqli_real_escape_string($con,$_POST['heading']);
	$date=date("Y-m-d");
	$sql="insert into link values(null,'$link','$heading')";
	$result=mysqli_query($con,$sql);
	
	if($result)
	{
		header("location:addlink.php?save=1");
	}
}
?>