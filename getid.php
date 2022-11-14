<?php
	include "connect.php";
	$grade=$_GET["id"];
	$lq=0;
	$sql="select ssid from studentprofile where id='$grade'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($result)
	{
	
	$lq=$row[0];
	}
	else{
		$lq=0;
	}
	
	echo $lq;
	
	
?>