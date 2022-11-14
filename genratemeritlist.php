<?php
$formid=$_GET['formid'];
$ccode=$_GET['courseid'];
include 'connect.php';

$sql=mysqli_query($con,"select * from formgenerate where formid='$formid'");
$r=mysqli_fetch_array($sql);
$sid=$r['sid'];
$sname=$r['sname'];

$sql=mysqli_query($con,"insert into meritlist values('$formid','$ccode','$sid','$sname','SELECTED','UNPAID','0')");
if($sql)
{
	$sql1=mysqli_query($con,"update formgenerate set merit='SELECTED' where formid='$formid'");
	$sql2=mysqli_query($con,"update studentregister set merit='SELECTED' where id='$sid'");
	if($sql2)
	{
		header('location:admin.php?meritlist=1');
	}
	
}
else
{
	echo mysqli_error($con);
}

?>