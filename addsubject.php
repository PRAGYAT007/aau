<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="POST" action="addsubject.php" >
<input name="sname" placeholder="ENter subject" type="text" required><br><br>
<select name="course" >
<option selected disabled>Select Courses</option>
<?php
include 'connect.php';
$s=mysqli_query($con,"select * from courses");
while($r=mysqli_fetch_array($s))
{
?>
<option value="<?php echo $r['courseid']; ?>"><?php echo $r['name'] ;?></option>
<br><br>

<?php } ?>
</select><br><br>
<input type="text" placeholder="enter group" name="group">
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['sname'];
$course=$_POST['course'];
$group=$_POST['group'];	
$s=mysqli_query($con,"insert into subjects values(null,'$course','$name','$group')");
if($s)
{
	header('location:addsubject.php?save=1');
}
}
?>