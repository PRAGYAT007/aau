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

<?php include 'anav.php';?>

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

<th>Course Name</th>
<th>Student Name</th>
<th>Payment Status</th>


</tr>
<?php
include 'connect.php';
$sid=$_SESSION["sid"];
$sql=mysqli_query($con,"select * from formgenerate where sid='$sid'");
while($r=mysqli_fetch_array($sql))
{
	$formid=$r['formid'];
 $sql1=mysqli_query($con,"select * from bachelorsubjecttaken where formid='$formid'");
 $r1=mysqli_fetch_array($sql1);
 
?>
<tr>
<td><?php echo $r['formid']; ?></td>
<td><?php echo $r['coursecode']; ?></td>

<td><?php echo $r['cname']; ?></td>
<td><?php echo $r['sname']; ?></td>
<td><?php echo $r['payment']; ?></td>
<?php 
if($r['selection'] == 'SELECTED' && ($r['coursecode'] == '100' || $r['coursecode'] == '101'))
{
	$fid=$r['formid'];
	$n=mysqli_query($con,"select * from meritlist where formid='$fid'");
	$nn=mysqli_num_rows($n);
	if($nn > 0)
	{

?>
<td>
	<a href="" class="w3-btn w3-red w3-medium" style="font-family:roboto;" disable="disabled"> >> Already Admission Confirmed</a></td>
	<?php
}

else{
	?>
<td>
	<a href="" class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Take Admission</a></td>

<?php
}

}
else if($r['selection'] == 'SELECTED' && ($r['coursecode'] == '103' || $r['coursecode'] == '104'))
{
	$fid=$r['formid'];
	$n=mysqli_query($con,"select * from confirmadmission where formid='$fid'");
	$nn=mysqli_num_rows($n);
	if($nn > 0)
	{

?>
<td>
	<a href="" class="w3-btn w3-red w3-medium" style="font-family:roboto;" disable="disabled"> >> Already Admission Confirmed</a></td>
	<?php
}

else{
	?>
<td>
	<a href="" class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Confirm Admission</a></td>

<?php
}

}

?>
<td><a href="<?php echo 'formstep1.php?formid='.$r['formid'].'&courseid='.$r['coursecode'].'' ?>" class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Proceed To Application</a></td>
<?php if($r['payment']=='PAID')
{
	?>
	<td><a href="<?php echo 'downloadform.php?formid='.$r['formid'].'&courseid='.$r['coursecode'].'' ?>" class="w3-btn w3-blue w3-medium" style="font-family:roboto;" target="_blank"> >> Print / Download Application</a></td>
<?php 
}
?>

<?php if($r['payment']=='PAID')
{
	?>
	<td><a href="<?php echo 'downloadrecipt.php?formid='.$r['formid'].'&courseid='.$r['coursecode'].'' ?>" class="w3-btn w3-orange w3-medium" style="font-family:roboto;" target="_blank"> >> Print / Download Payment Recipt</a></td>
<?php 
}
?>

</tr>
<?php } ?>
</table>

</div>
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
