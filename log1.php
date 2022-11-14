<?php  
session_start();
   include'connect.php';

$user=$_POST["user"];
$password=$_POST["pass"];
$sql="select * from register where email='$user'";
$qury=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qury);
$pass=$row["password"];
$email=$row["email"];
$name=$row["name"];
if ($user==$email) {

	
	if ($pass==$password)
	 {
		header("location:aluminihome.php?user=1");
		$_SESSION["uname"]=true;
		$_SESSION["uname"]=$name;
		$_SESSION["email"]=$email;

	}
	else
	{
		 header("location:index.php?passworddonotmatch=1");
	}
}
else
{

    header("location:index.php?usernotfound=1");
}
?>
