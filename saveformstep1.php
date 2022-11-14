<?php
session_start();
include 'connect.php';

if(isset($_POST['submit']))
{
	$formid=$_POST['formid'];
	$sid=$_SESSION["sid"];
	$aname=mysqli_escape_string($con,$_POST['aname']);
	$fname=mysqli_escape_string($con,$_POST['fname']);
	$mname=mysqli_escape_string($con,$_POST['mname']);
	$foccu=mysqli_escape_string($con,$_POST['foccu']);
	$moccu=mysqli_escape_string($con,$_POST['moccu']);
	$mphone=mysqli_escape_string($con,$_POST['mphone']);
	$fphone=mysqli_escape_string($con,$_POST['fphone']);
	$caste=mysqli_escape_string($con,$_POST['caste']);
	$dob=$_POST['dob'];
	$vill=mysqli_real_escape_string($con,$_POST['vill']);
	$pin=mysqli_real_escape_string($con,$_POST['pin']);
	$po=mysqli_real_escape_string($con,$_POST['po']);
	$ps=mysqli_real_escape_string($con,$_POST['ps']);
	$dist=mysqli_real_escape_string($con,$_POST['dist']);
	$state	=mysqli_escape_string($con,$_POST['state']);
	$contact=mysqli_escape_string($con,$_POST['contact']);
	$mail=mysqli_escape_string($con,$_POST['mail']);
	$cid=$_POST['cid'];
	$beniname=mysqli_escape_string($con,$_POST['bname']);
	$bank=mysqli_escape_string($con,$_POST['bank']);
	$account=mysqli_escape_string($con,$_POST['account']);
	$ifsc=mysqli_escape_string($con,$_POST['ifsc']);

	
	$sql=mysqli_query($con,"insert into applicantdetails values('$formid','$sid','$aname','$fname','$fphone','$mname','$mphone','$foccu','$moccu','$caste','$dob','$vill','$pin','$po','$ps','$dist','$state','$contact','$mail','$beniname','$bank','$account','$ifsc')");
// 	$sql1=mysqli_query($con,"insert into uniqueiddegree values('$formid','$sid','$uniqueid',NULL)");
	if($sql)
	{
		header('location:formstep2.php?formid='.$formid.'&courseid='.$cid.'');
}
else
{
    echo mysqli_error($con);
// 	header('location:formstep1.php?error='.$formid.'&courseid='.$cid.'');
}
}
?>