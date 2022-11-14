<?php
	include "connect.php";
	$grade=$_GET["prog"];
	/*$lq=0;
	$sql="select courseid from courses where name='$grade'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($result)
	{
	
	$lq=$row[0];
	}
	else{
		$lq=0;
	}*/
	
	echo $grade;
	
	
?>