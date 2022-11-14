<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

      <link href="css/w3.css" type="text/css" rel="stylesheet">
      <link href="css/button.css" type="text/css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Literata&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style=" background-image:url(images/ef4656ed.png); ">

<?php include 'anav2.php';?>

<div class="w3-container w3-content "  style="max-width: 95%;">
<center><h3>Choose Your Selected Programme To Procced For Application.</h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>Your Selected Programmes.</h3></center>
</div>
<div class="  w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; width:100%; background:white; height:350px; overflow:scroll; ">

<div class="w3-container" style="; padding:5%; ">
<table class="w3-table-all">
<tr>
<th>Form ID </th>
<th>Course Code </th>


<th>Student Name</th>
<th>Payment Status</th>


</tr>
<?php
include 'connect.php';
$sid=$_SESSION["sid"];
$sql=mysqli_query($con,"select * from student where id='$sid'");
while($r=mysqli_fetch_array($sql))
{
	$id=$r['id'];
 $sql1=mysqli_query($con,"select * from fee where id='$id'");
 $r1=mysqli_fetch_array($sql1);
 
 $sql1=mysqli_query($con,"select * from studentprofile where stid='$id'");
 $r2=mysqli_fetch_array($sql1);
 
 
?>
<tr>
<td><?php echo $r['id']; ?></td>
<td><?php echo $r1['prog']; ?></td>


<td><?php echo $r['name']; ?></td>
<td><?php echo $r1['payment']; ?></td>


</tr>
<?php } ?>
</table>

</div>
<center>
<a href="./sview.php?id=<?php echo $r2["stid"] ?>" class="w3-btn w3-round w3-green"  >Details</a>
</div>

</div>



<?php include 'footer.php'; ?>

</body>
</html>
<script>
	<?php
if(isset($_GET['course']))
{
	echo "alert('Course Selected')";

}
if(isset($_GET['coursetaken']))
{
	echo "alert('Course Already Selected')";

}
if(isset($_GET['payment']))
{
	echo "alert('Your Form is Successfully submitted')";

}
	?></script>
