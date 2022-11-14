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
 <div class="container w3-content w3-hide-small" >	
<div class="wrapper">	
<div class="arrow-steps clearfix">
          <div class="step current"> <span>Student Details</span> </div>
          <div class="step current"> <span>Academic Qualification's</span> </div>
          <div class="step current"> <span>Upload Document's</span> </div>
          
			</div>
		
</div>
</div>

<div class=" w3-content "  >
<center><h3><strong>ASSAM AGRICULTURAL UNIVERSITY </strong></h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>APPLICATION FORM.(Payment Details.)</h3></center>
</div>
<div class=" " style="  margin-left:4.5%; margin-top:2%; ">
<h6 style="color:red"> (Verify Details And Confirm this Transaction.) *</h6>
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
<form action="payresponse.php" method="POST" enctype="multipart/form-data">



<label ><strong>Educational Institution Name :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none; float:right;" name="mark" value="ASSAM AGRICULTURAL UNIVERSITY"  required readonly><br><br><br>
<label ><strong>Course Applied For :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none;  float:right;" name="formid" value="<?php echo $r['cname'] ?>"  required readonly><br><br><br>
<label ><strong>Form Number :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none;  float:right;" name="formid" value="<?php echo $formid ?>"  required readonly><br><br><br>
<label ><strong>Name of the Student :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none;  float:right;" name="name" value="<?php echo $r['sname']  ?>"  required readonly><br><br><br>
<label ><strong>Students Email Address :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none;  float:right;" name="email" value="<?php echo $r1['email']  ?>"  required readonly><br><br><br>
<label ><strong>Students Phone Number :</strong> </label>
<input type="text" class="" style="width:50%; margin-left:5%; border:none;  float:right;" name="phone" value="<?php echo $r1['phone']  ?>"  required readonly><br><br><br>
<label ><strong>Application Fees  (Rs.):</strong> </label>

<input type="text" class="" style="width:50%; margin-left:5%; border:none;  float:right;" name="" value="0"   required readonly ><br><br><br>

<?php
$formid=$_GET['formid'];

?>
<input type="hidden" name="formid" value=" <?php echo $formid; ?>">
<br><br>
<?php
$sql=mysqli_query($con,"select * from formgenerate where formid='$formid'");
$r=mysqli_fetch_array($sql);
if($r['payment']=='PAID')
{
?>
<p class="w3-btn w3-green w3-medium">Already Submitted Form</p>
<?php }
else{
?>
<input type="submit" class="w3-btn w3-green w3-medium" value=">> Final Submit" name="submit"  onclick="return confirm('Do you really want to Final Submit the Form ?');"> 
<?php } ?>
<br><br><br>
</div>
</form>


</div>
</div>

</div>
<?php include 'footer.php' ;?>
</body>
</html>