<?php
session_start();
include 'connect.php';



$formid=$_POST['formid'];

$sql=mysqli_query($con,"update formgenerate set payment='PAID' where formid='$formid'");
if($sql)
{
	header('location:adashboard2.php?payment=1');
}


?>