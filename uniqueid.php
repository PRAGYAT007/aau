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
<center><h3>UNDERTAKING</h3></center>
</div>
<div class="w3-container " style="  margin-left:4.5%; margin-top:2%; ">
<h7 style="color:red"> (Duly fill the  UniqueID Acknowledgement before proceeding) *</h7>
<br>
<br>
<?php 
 
 include 'connect.php';
 
 
 $sid=$_SESSION['sid'];
 ?>
<form action="saveunique.php" method="POST" enctype="multipart/form-data">
	
	<div style="border-bottom:3px dashed gray; width:95%; " ></div><br>
	<h6 style="color:red;">(Enter the Unique ID Generated from Director Of Higher Education, Assam Portal as per the Govt. of Assam order) *</h6>
<h7 style="color:red;">If not generated already, <a href="http://dheonlineadmission.amtron.in/sp/" target="_blank" style="text-decoration: none; color: blue">CLICK HERE</a> to generate the unique ID.</h7><br><br>
<div class="w3-row-padding"  >
<label >Enter Unique ID * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="uniqueid" placeholder="Eg: U2003521000012" value="" required><br>
</div><br><br>

<div style="border-bottom:3px dashed gray; width:95%; " ></div><br>
<div class="w3-container" align="justify">	
<span class="w3-text-red" style="font-size: 17px">**<strong>Any discrepancy found in the uploaded documents may result in the cancellation of your Admission !!</span><br><center><span class="w3-text-indigo">*PDF Format will NOT be accepted</span></center></strong></div><br><br>
<label >UniqueID Acknowledgement Slip<h7 style="color:red">  (File Should Be in JPEG/JPG/PNG Format and less than 500kb)</h7>: *</label><br><br>
<input type="file" accept=".jpg, .jpeg, .png" class="w3-input w3-border" style="width:95%;"  name="uniqueidfile" placeholder="" required><br><br>
<input type="hidden" value="<?php echo $sid; ?>" name="sid">
	
<input type="submit" value=">> Upload Documents" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to take admission?');"><br><br><br>
</form>

</div>
</div>
</div>

<?php include 'footer.php' ;?>
</body>
</html>
<script>
	<?php
	if(isset($_GET['already']))
{
	echo "alert('You have already Uploaded The Unique id')";

} 
	if(isset($_GET['save']))
{
	echo "alert('Successfully saved')";

} 

?>
</script>


