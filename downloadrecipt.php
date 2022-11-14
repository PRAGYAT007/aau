<!DOCTYPE html>
<html>
<head>
	<title>Application Form</title>
	 <link href="css/w3.css" type="text/css" rel="stylesheet">
</head>
<body onload="window.print()"><div class="w3-container w3-content "  >
<center><h3><strong>ASSAM AGRICULTURAL UNIVERSITY </strong></h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>APPLICATION FORM.(Payment Recipt.)</h3></center>
</div>
<div class="w3-container " style="  margin-left:4.5%; margin-top:2%; ">
<h6 style="color:red"> (Transaction Has Been Completed) *</h6>
<br>
<?php
include 'connect.php';
$formid=$_GET['formid'];


	 
	 $sql=mysqli_query($con,"select * from formgenerate where formid='$formid'");
	 $r=mysqli_fetch_array($sql);
	 $sid=$r['sid'];
	  $sql=mysqli_query($con,"select * from studentregister where id='$sid'");
	$r1=mysqli_fetch_array($sql);
	
	?>
<form action="pay.php" method="POST" enctype="multipart/form-data" >

 <center><img src="images/logo.png" style="width: 100px;" ></center><br><br>

<label ><strong>Educational Institution Name :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none; " name="mark" value="ASSAM AGRICULTURAL UNIVERSITY"  required readonly><br><br><br>
<label ><strong>Course applied for :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none; " name="name" value="<?php echo $r['cname']  ?>"  required readonly><br><br><br>
<label ><strong>Form Number :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none; " name="formid" value="<?php echo $formid ?>"  required readonly><br><br><br>
<label ><strong>Name of the Student :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none; " name="name" value="<?php echo $r['sname']  ?>"  required readonly><br><br><br>
<label ><strong>Students Email Address :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none; " name="email" value="<?php echo $r1['email']  ?>"  required readonly><br><br><br>
<label ><strong>Students Phone Number :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none; " name="phone" value="<?php echo $r1['phone']  ?>"  required readonly><br><br><br>
<label ><strong>Application Fees  (Rs.):</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none; " name="amount" value="0"  required readonly><br><br><br>

<?php
$formid=$_GET['formid'];

?>
<input type="hidden" name="formid" value=" <?php echo $formid; ?>">
<br><br>


<br><br><br>
</div>
</form>


</div>
</div>

</div>

</body>
</html>