<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$heading=mysqli_real_escape_string($con,$_POST['heading']);
	mysqli_real_escape_string($con,$_POST['news']);
	$date=date("Y-m-d");
	$sql="insert into news values(null,'$heading','$news', '$date')";
	$result=mysqli_query($con,$sql);
	
	if($result)
	{
		header("location:admindash.php?savenews=1");
	}
}
?>