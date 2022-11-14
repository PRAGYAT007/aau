<?php
session_start();
include 'connect.php';

if(isset($_POST['submit']))
{
	$formid=$_POST['formid'];
	$sid=$_SESSION["sid"];
	$aname=$_POST['aname'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$foccu=$_POST['foccu'];
	$moccu=$_POST['moccu'];
	$mphone=$_POST['mphone'];
	$fphone=$_POST['fphone'];
	$caste=$_POST['caste'];
	$dob=$_POST['dob'];
	$vill=$_POST['vill'];
	$pin=$_POST['pin'];
	$po=$_POST['po'];
	$ps=$_POST['ps'];
	$dist=$_POST['dist'];
	$state	=$_POST['state'];
	$contact=$_POST['contact'];
	$mail=$_POST['mail'];
	$cid=$_POST['cid'];
	$beniname=$_POST['bname'];
	$bank=$_POST['bank'];
	$account=$_POST['account'];
	$ifsc=$_POST['ifsc'];
	
	$sql=mysqli_query($con,"update applicantdetails set name='$aname',fname='$fname',fphone='$fphone',mname='$mname',mphone='$mphone',foccupation='$foccu',moccupation='$moccu',caste='$caste',dob='$dob',villtown='$vill',pin='$pin',po='$po',ps='$ps',dist='$dist',state='$state',contact='$contact',email='$mail',beniname='$beniname',bankname='$bank',account='$account',ifsc='$ifsc' where formid='$formid' ");
	if($sql)
	{
		header('location:formstep1.php?formid='.$formid.'&courseid='.$cid.'');
}
else{
	header('location:formstep1.php?error='.$formid.'&courseid='.$cid.'');
}
}
?>