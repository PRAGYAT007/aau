<?php
   session_start();

include 'connect.php';
if(isset($_POST['submit']))
{
	$prog=$_POST['prog'];
	$caste=$_POST['caste'];
	$lexam=mysqli_real_escape_string($con,$_POST['lexam']);
	$lpercent=mysqli_real_escape_string($con,$_POST['lpercent']);
	$sid=$_SESSION["sid"];
	$sname=$_SESSION['uname'];
	$pcode=mysqli_real_escape_string($con,$_POST['code1']);
	$bpl=$_POST['bpl'];
	$dabled=$_POST['dable'];
	
	

	    $sql=mysqli_query($con,"insert into formgenerate values(null,'$sid','$sname','$prog','$pcode','$caste','$lexam','$lpercent','$bpl','$dabled','UNPAID','NOTSELECTED')");
	if($sql)
	{
		header('location:adashboard2.php?course=1');
	}

	
}
?>