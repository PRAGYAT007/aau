<?php 
include 'connect.php';

$target_dir = "documents/";
                $file = $target_dir .basename($_FILES["img1"]["name"]);

                $fileData = pathinfo(basename($_FILES["img1"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["img1"]["tmp_name"], $target_path);

                $img1="documents/" . $fileName;

$Name=mysqli_escape_string($con,$_POST["name"]);
$stid=$_POST["stid"];
$semester=$_POST["semester"];
$year=$_POST["year"];
$Email=$_POST["email"];
$Phone=$_POST["phone"];
$mname=$_POST["mname"];
$fname=$_POST["fname"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$blood=$_POST["blood"];
$po=$_POST["po"];
$pin=$_POST["pin"];
$altph=$_POST["altph"];
$ps=$_POST["ps"];
$pAddress=mysqli_escape_string($con,$_POST["addr"]);

$sql="insert into studentprofile values(null,'$stid','$semester','$year','$Name','$mname','$gender','$blood','$Email','$Phone','$img1','$fname','$dob','$pAddress','$po','$pin','$altph','$ps');";
$result=mysqli_query($con,$sql);
if ($result) 
{
		
    

    header("location:sdashboard.php");
		
		
}
else
{
  echo mysqli_error($con);
 }

?>