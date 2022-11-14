<?php
include 'connect.php';
$id=$_GET['id'];
$sql="delete from link where id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
	header('location:viewlinks.php?dellink=1');
}
?>