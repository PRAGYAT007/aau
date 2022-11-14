<?php
   session_start();

include 'connect.php';
if(isset($_POST['submit']))
{
	$prog=$_POST['prog'];
	$sid=$_SESSION["sid"];
	$sname=$_SESSION['uname'];
	
	
	
	
	

	    $sql="insert into fee values(null,'$sid','$sname','$prog','PAID');";
		$result=mysqli_query($con,$sql);
if ($result) 
{
		
    

    header("location:sdashboard.php");
		
		
}
else
{
  echo mysqli_error($con);
 }
}
?>