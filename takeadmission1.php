<!Doctype html>
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
<style>
.clearfix:after {
    clear: both;
    content: "";
    display: block;
    height: 0;
}

.container {
	font-family: 'Lato', sans-serif;
	width: 1200px;
	
}

.wrapper {
	display: table-cell;
	height:100px;
	vertical-align: middle;
}

.nav {
	
}

.pull-right {
	float: right;
}

a, a:active {
	color: ;
	text-decoration: none;
}

a:hover {
	color: ;
}

/* Breadcrups CSS */

.arrow-steps .step {
	font-size: 14px;
	text-align: center;
	color: #666;
	cursor: default;
	margin: 0 3px;
	padding: 10px 10px 10px 30px;
	min-width: 300px;
	float: left;
	position: relative;
	background-color: #d9e3f7;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none; 
  transition: background-color 0.2s ease;
}

.arrow-steps .step:after,
.arrow-steps .step:before {
	content: " ";
	position: absolute;
	top: 0;
	right: -17px;
	width: 0;
	height: 0;
	border-top: 19px solid transparent;
	border-bottom: 17px solid transparent;
	border-left: 17px solid #d9e3f7;	
	z-index: 2;
  transition: border-color 0.2s ease;
}

.arrow-steps .step:before {
	right: auto;
	left: 0;
	border-left: 17px solid #fff;	
	z-index: 0;
}

.arrow-steps .step:first-child:before {
	border: none;
}

.arrow-steps .step:first-child {
	border-top-left-radius: 4px;
	border-bottom-left-radius: 4px;
}

.arrow-steps .step span {
	position: relative;
}

.arrow-steps .step span:before {
	opacity: 0;
	content: "✔";
	position: absolute;
	top: -2px;
	left: -20px;
}

.arrow-steps .step.done span:before {
	opacity: 1;
	-webkit-transition: opacity 0.3s ease 0.5s;
	-moz-transition: opacity 0.3s ease 0.5s;
	-ms-transition: opacity 0.3s ease 0.5s;
	transition: opacity 0.3s ease 0.5s;
}

.arrow-steps .step.current {
	color: #fff;
	background-color: #23468c;
}

.arrow-steps .step.current:after {
	border-left: 17px solid #23468c;	
}
th{
	border:1px solid black;
	background:whitesmoke;
	
}
</style>
<body style="  ">

<?php include 'anav.php';

 ?>


<div class="w3-container w3-content "  >
<center><h3><strong>Amguri College : Amguri</strong></h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>Take admission into Amguri College</h3></center>
</div>
<div class="w3-container " style="  margin-left:4.5%; margin-top:2%; ">
<h7 style="color:red"> (Read the instructions carefully before proceeding as any faulty in the document uploaded will result in rejection of your admission)*</h7>
<br>
<br>
<?php 
 
 include 'connect.php';
 $id=$_GET['formid'];
 $cid=$_GET['courseid'];
 $sql6=mysqli_query($con,"select * from documents where formid='$id' ");
 $sql7=mysqli_query($con,"select * from formgenerate where formid='$id' ");
 $row7=mysqli_fetch_array($sql7);
 $sname=$row7['sname'];
 $sid=$row7['sid'];
 $row6=mysqli_fetch_array($sql6);
 ?>
 <div class="w3-container">
 <?php	
 	if($row7['coursecode'] == '100')
 	{
 	?>
 		<h5 style="color:#8A0707">*Download the undertaking from the button provided below, print it and upload the duly signed copy wherever required</h5><br>
 		<br><center><a href="downloads/undertaking1.pdf" target="_blank" class="w3-btn w3-indigo w3-round-medium">Download Undertaking</a></center><br> <br><br>
</div>
<form action="saveadmission.php" method="POST" enctype="multipart/form-data">
 		<label >Upload the signed Undertaking <h7 style="color:red">  (File Should Be in JPEG/JPG/PNG/PDF Format and less than 500kb)</h7>: *</label><br><br>
	<input type="file" class="w3-input w3-border" style="width:95%;" name="undertaking" placeholder="" required><br>
<?php
 	}
 	else if($row7['coursecode'] == '101')
 	{
 	?>
 	<h5 style="color:#8A0707">1) Download the respective Challan from the button provided below.</h5>
 	<h5 style="color:#8A0707">2) Take a print out of the Challan.</h5>
 	<h5 style="color:#8A0707">3) Duly fill the Challan and deposit the respective amount in the Bank.</h5>
 	<h5 style="color:#8A0707">4) After depositing the amount, upload the receipt copy in the section provided below.</h5>
 	<h5 style="color:#8A0707">4) Click on the "Confirm Admission" button.</h5><br>

 		<br><center><a href="downloads/female_chalan.pdf" target="_blank" class="w3-btn w3-indigo w3-round-medium w3-margin">Download Challan (Female)</a><a href="downloads/male_chalan.pdf" target="_blank" class="w3-btn w3-indigo w3-round-medium w3-margin">Download Challan (Male)</a></center><br> <br><br>
</div>
<form action="saveadmission.php" method="POST" enctype="multipart/form-data">
 		<label >Upload the Receipt Challan Copy<h7 style="color:red"> (File Should Be in JPEG/JPG/PNG Format and less than 500kb)</h7>: *</label><br><br>
	<input type="file" class="w3-input w3-border" style="width:95%;" name="undertaking" placeholder="" required><br>
<?php
 	}

?> 		


<br>
<br>

<input type="hidden" name="formid" value="<?php echo $id;?>">
<input type="hidden" name="courseid" value="<?php echo $cid;?>">
<input type="hidden" name="sid" value="<?php echo $sid;?>">
<input type="hidden" name="sname" value="<?php echo $sname;?>">
<input type="hidden" name="meritstatus" value="TAKEN">
<input type="submit" value=">> Confirm Admission" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to take admission?');"><br><br><br>
</form>

</div>
</div>
</div>

<?php include 'footer.php' ;?>
</body>
</html>


