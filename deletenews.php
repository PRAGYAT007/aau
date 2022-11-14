<?php
include 'connect.php';
$id=$_GET['id'];
$sql="delete from news where id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
	header('location:news.php?delnews=1');
}
?>