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
 <div class="container w3-content">	
<div class="wrapper">	
<div class="arrow-steps clearfix">
          <div class="step current"> <span> Student Details</span> </div>
          <div class="step current"> <span>Academic Qualification's</span> </div>
          <div class="step"> <span> Upload Document's</span> </div>
          
			</div>
		
</div>
</div>

<div class="w3-container w3-content "  >
<center><h3><strong>ASSAM AGRICULTURE UNIVERSITY</strong></h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>APPLICATION FORM.(Qualification Detials)</h3></center>
</div>
<div class="w3-container " style="  margin-left:4.5%; margin-top:2%; ">
<h7 style="color:red"> ( Particulars of the last Board/ Council / University / Examination Passed. ) *</h7>
<br>
<br>
<?php 
 
 include 'connect.php';

 $id=$_GET['formid'];
 $cid=$_GET['courseid'];

 $sql6=mysqli_query($con,"select payment from formgenerate where formid='$id' ");
 $row6=mysqli_fetch_array($sql6);
 $payment=$row6['payment'];

 $sql=mysqli_query($con,"select * from examinationpassed where formid='$id' ");
 $row=mysqli_fetch_array($sql);
 
 $sql2=mysqli_query($con,"select * from markssecured where formid='$id'");
 $sql5=mysqli_query($con,"select * from hssubjectstaken where formid='$id'");
 $n=mysqli_num_rows($sql2);
 if($n>0)
 { 
  $row3=mysqli_fetch_array($sql5);
  $row2=mysqli_fetch_array($sql2); 	
 
 ?>
<form >
<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Name of the Examination : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="examination" value="<?php echo $row['examination']; ?>" placeholder="Enter Examination name" readonly required><br>
<label >Name of the Board/Council/ University: *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="board" placeholder="Enter Board/Council/University" value="<?php echo $row['board']; ?>" readonly required><br>

<label > Roll No. *</label><br>
<?php 
	if($cid == '105' || $cid == '106' || $cid == '107' || $cid == '109' || $cid == '110' || $cid == '111' || $cid == '112' ) 
		{ ?>
			<span class="w3-text-red">(Previous year/semester class roll number)</span>  
			<?php
			} 
			?></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="rollno" placeholder="Enter Roll - No. Eg (336B-7859)" value="<?php echo $row['rollno']; ?>" readonly required>
<br>

</div>

<div class="w3-half">
<label >Year of Passing : *</label><br><br>
<input type="text" class="w3-input w3-border" readonly style="width:90%;" name="year" placeholder="Enter Passing Year." value="<?php echo $row['year']; ?>" required><br>
<label >Name of the Institution : * </label><br><br>
<input type="text" class="w3-input w3-border" readonly style="width:90%;" name="inst" placeholder="Enter Name Of Instituition." value="<?php echo $row['institution']; ?>" required><br>
<label >Division Secured : *</label><br><br>
<input type="text" class="w3-input w3-border" readonly style="width:90%;" name="division" placeholder="Division secured." value="<?php echo $row['division']; ?>"  readonly required><br><br>
</div>
<label >Marks Secured (Subjectwise) : *</label><br><br>
<div style="overflow: scroll; width: 100%;">
<table class="w3-table" style="width: 850px;" >
<tr>
<th>Subjects</th>
<th><input type="text" class="w3-input w3-border-0" name="subn1" readonly value="<?php echo $row2['s1n']; ?>"> </th>
<th><input type="text" class="w3-input w3-border-0" name="subn2" readonly value="<?php echo $row2['s2n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn3" readonly value="<?php echo $row2['s3n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn4" readonly value="<?php echo $row2['s4n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn5"  readonly value="<?php echo $row2['s5n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn6" readonly  value="<?php echo $row2['s6n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn7" readonly value="<?php echo $row2['s7n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn8" readonly value="<?php echo $row2['s8n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn9"  readonly value="<?php echo $row2['s9n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn10" readonly value="<?php echo $row2['s10n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn11" readonly value="<?php echo $row2['s11n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn12" readonly value="<?php echo $row2['s12n']; ?>"></th>
<th>Total Marks</th>
</tr>
<tr>
<th>Full Marks</th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks1" readonly value="<?php echo $row2['s1f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks2" readonly value="<?php echo $row2['s2f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks3" readonly value="<?php echo $row2['s3f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks4" readonly value="<?php echo $row2['s4f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks5" readonly value="<?php echo $row2['s5f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks6" readonly value="<?php echo $row2['s6f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks7" readonly value="<?php echo $row2['s7f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks8" readonly value="<?php echo $row2['s8f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks9" readonly value="<?php echo $row2['s9f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks10" readonly value="<?php echo $row2['s10f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks11" readonly value="<?php echo $row2['s11f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks12" readonly value="<?php echo $row2['s12f']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="fullmarks" readonly value="<?php echo $row2['totalmarks']; ?>"></th>
</tr>
<tr>
<th>Marks Secured</th>
<th><input type="text" class="w3-input w3-border-0" name="smarks1" readonly value="<?php echo $row2['s1s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks2" readonly value="<?php echo $row2['s2s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks3" vreadonly value="<?php echo $row2['s3s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks4" readonly value="<?php echo $row2['s4s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks5" readonly value="<?php echo $row2['s5s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks6" readonly value="<?php echo $row2['s6s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks7"  readonly value="<?php echo $row2['s7s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks8" readonly value="<?php echo $row2['s8s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks9" readonly value="<?php echo $row2['s9s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks10" readonly value="<?php echo $row2['s10s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks11" readonly value="<?php echo $row2['s11s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks12" readonly value="<?php echo $row2['s12s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="stotalmarks" readonly value="<?php echo $row2['securedmarks']; ?>"></th>
</tr>
</table>
</div>
<br><br>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div>
<?php
$formid=$_GET['formid'];

?>
<input type="hidden" name="formid" value=" <?php echo $formid; ?>">
<br><br>
<h7 style="color:red;">Combination of Subjects Offered : *</h7><br><br>
<?php
 
 if($cid == '100' || $cid == '101' || $cid == '105' || $cid == '106')
 {
 ?>
<div class="w3-row-padding">
	
<div class="w3-half" >

<label >Compulsory <span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="Enter from optional Subjects" value="<?php echo $row3['compul'] ?>" readonly><br>
<label >Subject 2  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject2" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub1'] ?>" readonly><br>


<label >Subject 4 <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject4" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub2'] ?>" readonly><br>

</div>

<div class="w3-half">
<label >Subject 1  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject1" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub3'] ?>" readonly><br>
<label >Subject 3 <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject3" required placeholder="Enter from optional Subjects" value="<?php echo $row3['sub4'] ?>" readonly><br>
<label >Mil <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject3" required placeholder="Enter from optional Subjects" value="<?php echo $row3['mil'] ?>" readonly>
<br><br>
</div>
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<?php

if($payment=='UNPAID')
{ 
?>
<a href="<?php echo 'formstep3.php?formid='.$id.'&courseid='.$cid.'' ?> " class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Click & Proceed </a>
<a href="<?php echo 'updateformstep2.php?formid='.$formid.'&courseid='.$cid.'' ?>" class="w3-btn w3-green w3-margin-left"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Details</a>

<br><br><br>
</form>
<?php
}
	 
else
{

?>
<a href="<?php echo 'formstep3.php?formid='.$id.'&courseid='.$cid.''?> " class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Click & Proceed </a><br><br><br>

<?php

}

?>
</div>
</div>
</div>
<?php }
else if($cid == '103')
 {
	  
	 $sqlb=mysqli_query($con,"select * from bachelorsubjecttaken where formid='$formid'");
	 $bs=mysqli_fetch_array($sqlb);
 ?>
<div class="w3-row-padding">
	
<div class="w3-half" >

<label >Compulsory (AECC)<span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="" value="<?php echo $bs['compulsory']; ?>" readonly><br><br>
<label >Generic  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="Enter Generic subject" value="<?php echo $bs['generic']; ?>" required><br><br>




</div>

<div class="w3-half">
	<label >Mil (AECC)<span style="color: red">*</span></label><br><br>
	<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="" value="<?php echo $bs['mil']; ?>" required><br><br>
<label >Core (Honours/ Major)<span style="color: red">*</span></label><br><br>
	<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="" value="<?php echo $bs['core'] ?>" required><br><br>



</div>
	
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<a href="<?php echo 'formstep3.php?formid='.$id.'&courseid='.$cid.'' ?> " class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Click & Proceed </a><br><br>
	</div>
	</div>
</div>
<?php
 }
	
	 else if($cid == '102')
 {
	  
	 	  
	 $sqlb=mysqli_query($con,"select * from bachelorsubjecttaken where formid='$formid'");
	 $bs=mysqli_fetch_array($sqlb);
 ?>
<div class="w3-row-padding">
	
<div class="w3-half" >

<label >Compulsory (AECC)<span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="" value="<?php echo $bs['compulsory']; ?>" readonly><br><br>
<label >Generic  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="Enter Generic subject" value="<?php echo $bs['generic']; ?>" required><br><br>




</div>

<div class="w3-half">
	<label >Mil (AECC)<span style="color: red">*</span></label><br><br>
	<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="" value="<?php echo $bs['mil']; ?>" required><br><br>
<label >Core (Honours/ Major)<span style="color: red">*</span></label><br><br>
	<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="" value="<?php echo $bs['core'] ?>" required><br><br>



</div>
	
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<a href="<?php echo 'formstep3.php?formid='.$id.'&courseid='.$cid.'' ?> " class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Click & Proceed </a><br><br>
	</div>
	</div>
</div>
<?php
 }
else if($cid == '107' || $cid == '109' || $cid == '111' || $cid == '112')
 {
	  
	 $sqlb=mysqli_query($con,"select * from thirdfifthsubjecttaken where formid='$formid'");
	 $bs=mysqli_fetch_array($sqlb);
 ?>
<div class="w3-row-padding">
	
<div class="w3-half" >
<label >Core (Honours/Major) <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="core" placeholder="Enter subject Name" value="<?php echo $bs['core']; ?>" required readonly><br>


</div>

<div class="w3-half">
	
</div>	
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<a href="<?php echo 'formstep3.php?formid='.$id.'&courseid='.$cid.'' ?> " class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Click & Proceed </a><br><br>
	</div>
	</div>
</div>

<?php
 }
 else if($cid == '110')
 {
 ?>
 <span style="color: red">*No Subject entry required for Non-Honours</span><br><br>
 <a href="<?php echo 'formstep3.php?formid='.$id.'&courseid='.$cid.'' ?> " class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Click & Proceed </a><br><br>
</div>
</div></div>
<?php
 }
}
 else{
?>
<form action="saveformstep2.php" method="POST">
<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Name of the Examination : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="examination" placeholder="Enter Examination name"  required><br>
<label > Name of the Board/Council/ University: *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="board" placeholder="Enter Board/Council/University" required><br>

<label > Roll No. *</label><br><?php 
	if($cid == '105' || $cid == '106' || $cid == '107' || $cid == '109' || $cid == '110' || $cid == '111' || $cid == '112' ) 
		{ ?>
			<span class="w3-text-red">(Previous year / semester class roll number)</span>  
			<?php
			} 
			?></label><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="rollno" placeholder="Enter Roll" required>
<br>

</div>

<div class="w3-half">
<label >Year of Passing : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="year" placeholder="Eg: 2021" required><br>
<label >Name of the Institution : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="inst" placeholder="Enter Name Of Instituition." required><br>
<label >Division Secured : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="division" placeholder="Division secured." required><br><br>
</div>
<label >Marks Secured (Subjectwise) : *</label><br>
<?php if($cid == '105' || $cid == '106' || $cid == '107' || $cid == '109' || $cid == '110' || $cid == '111' || $cid == '112')
{ 
	?>
<span class="w3-text-red">Enter last year/sem subject names and enter marks as "0"</span><br><br> <?php } ?>
<div style="overflow: scroll; width: 100%;">
<table class="w3-table" style="width: 850px;" >
<tr>
<th>Subjects</th>
<th><input type="text" class="w3-input w3-border-0" name="subn1"   value="" required=""> </th>
<th><input type="text" class="w3-input w3-border-0" name="subn2" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn3" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn4" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn5" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn6" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn7" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn8" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn9" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn10" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn11" value=""></th>
<th><input type="text" class="w3-input w3-border-0" name="subn12" value=""></th>
<th>Total Marks</th>
</tr>
<tr>
<th>Full Marks</th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks1" value="0" id="sub1" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks2" value="0"  id="sub2" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks3" value="0" id="sub3" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks4" value="0" id="sub4" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks5" value="0" id="sub5" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks6" value="0" id="sub6" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks7" value="0" id="sub7" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks8" value="0" id="sub8" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks9" value="0" id="sub9" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks10" value="0" id="sub10" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks11" value="0" id="sub11" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks12" value="0" id="sub12" onkeyup="caltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="fullmarks" value="0" id='total' readonly></th>
</tr>
<script>
    function caltotal()
    {
       
        var sub1=document.getElementById('sub1').value;
        var sub2=document.getElementById('sub2').value;
        var sub3=document.getElementById('sub3').value;
        var sub4=document.getElementById('sub4').value;
        var sub5=document.getElementById('sub5').value;
        var sub6=document.getElementById('sub6').value;
        var sub7=document.getElementById('sub7').value;
        var sub8=document.getElementById('sub8').value;
        var sub9=document.getElementById('sub9').value;
        var sub10=document.getElementById('sub10').value;
        var sub11=document.getElementById('sub11').value;
        var sub12=document.getElementById('sub12').value;
        
        var tot=parseInt(sub1) + parseInt(sub2) + parseInt(sub3) + parseInt(sub4) + parseInt(sub5) + parseInt(sub6) + parseInt(sub7) + parseInt(sub8) + parseInt(sub9) + parseInt(sub10) + parseInt(sub11) + parseInt(sub12);
        document.getElementById('total').value=tot;
    }
</script>
<tr>
<th>Marks Secured</th>
<th><input type="text" class="w3-input w3-border-0" name="smarks1" id="ssub1" onkeyup="scaltotal();"value="0" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks2" id="ssub2" onkeyup="scaltotal();" value="0" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks3" id="ssub3" value="0" onkeyup="scaltotal();" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks4" id="ssub4" value="0" onkeyup="scaltotal();" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks5" id="ssub5" value="0" onkeyup="scaltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks6"id="ssub6" value="0" onkeyup="scaltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks7" id="ssub7" value="0" onkeyup="scaltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks8" id="ssub8" value="0" onkeyup="scaltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks9" id="ssub9" value="0" onkeyup="scaltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks10" id="ssub10" value="0" onkeyup="scaltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks11" id="ssub11" value="0" onkeyup="scaltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks12" id="ssub12"  value="0" onkeyup="scaltotal();"></th>
<th><input type="text" class="w3-input w3-border-0" name="stotalmarks" id="stotal" value="0" ></th>
</tr>
<script>
    function scaltotal()
    {
       
        var sub1=document.getElementById('ssub1').value;
        var sub2=document.getElementById('ssub2').value;
        var sub3=document.getElementById('ssub3').value;
        var sub4=document.getElementById('ssub4').value;
        var sub5=document.getElementById('ssub5').value;
        var sub6=document.getElementById('ssub6').value;
        var sub7=document.getElementById('ssub7').value;
        var sub8=document.getElementById('ssub8').value;
        var sub9=document.getElementById('ssub9').value;
        var sub10=document.getElementById('ssub10').value;
        var sub11=document.getElementById('ssub11').value;
        var sub12=document.getElementById('ssub12').value;
        
        var tot=parseInt(sub1) + parseInt(sub2) + parseInt(sub3) + parseInt(sub4) + parseInt(sub5) + parseInt(sub6) + parseInt(sub7) + parseInt(sub8) + parseInt(sub9) + parseInt(sub10) + parseInt(sub11) + parseInt(sub12);
        document.getElementById('stotal').value=tot;
    }
</script>
</table>
</div>
<br><br>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div>
<?php
$formid=$_GET['formid'];

?>
<input type="hidden" name="formid" value="<?php echo $formid; ?>">
<br><br>
<h7 style="color:red;">Combination of Subjects Offered : *</h7><br><br>
<?php
 
 if($cid == '100')
 {
 ?>
<div class="w3-row-padding">
<img src="images/arts.JPG" style="width:100%;"><br><br>
<div class="w3-half" >

<label >Compulsory <span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="Enter from optional Subjects" value="English" readonly><br>
<label >Subject 2  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject2" placeholder="Enter from optional Subjects" required><br>


<label >Subject 4  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject4" placeholder="Enter from optional Subjects" required><br>

</div>

<div class="w3-half">
<label >Subject 1  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject1" placeholder="Enter from optional Subjects" required><br>
<label >Subject 3 <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject3" required placeholder="Enter from optional Subjects"><br>
<label >Mil <span style="color: red">*</span></label><br><br>
<select  class="w3-input w3-border" style="width:90%;" name="mil" required placeholder="" required="">
	<option selected="disabled" value="">Select Mil</option>
	<option>Assamese</option>
	<option>Alternative English</option>
</select><br><br>
</div>
</div>
<input type="hidden" name="cid" value="<?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</form>


</div>
</div>
</div>
<?php }
	 	 else if($cid == '103')
 {
 ?>
<div class="w3-row-padding">
	<p style="color :red"><b>Select One Core Subject.</b><br>
		
		<p style="color :red"><b>Select one Generic subject (Selected Core subject cannot be a generic)</b></p>
<div class="w3-half" >

<label >Compulsory (AECC)<span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="Enter from optional Subjects" value="English" readonly><br>
<label >Generic  <span style="color: red">*</span></label><br><br>
<select  class="w3-input w3-border" style="width:90%;" name="generic" required placeholder="" required="" id="generic" onchange="subject()">
	<option selected="" disabled="" value="">--Select Generic--</option>
	
	
	<option>Assamese</option>
	<option>English</option>
	<option>Agri.Bsc</option>
	<option>Pathelogy</option>
	<option>Home Science</option>
	<option>Genetics</option>

	<option>Florel</option>

	<option>Biotechnology</option>
	<option>Fishary</option>
	<option>Vetenery</option>
</select><br>




</div>

<div class="w3-half">
	<label >Mil (AECC)<span style="color: red">*</span></label><br><br>
	<select  class="w3-input w3-border" style="width:90%;" name="mil" required placeholder="" required="">
	<option selected="" disabled="" value="">--Select MIL--</option>
	
	<option>Assamese</option>
	<option>Alt English</option>
	
</select><br>
<label >Core (Honours/ Major)<span style="color: red">*</span></label><br><br>
	<select  class="w3-input w3-border" style="width:90%;" name="core" required placeholder="" required="" id="major" onchange="subject()">
	<option selected="" disabled="" value="">--Select Core--</option>
	
	
	
	<option>Assamese</option>
	<option>English</option>
	<option>Economics</option>
	<option>Education</option>

	<option>History</option>

	<option>Political Science</option>
	<option>Sociology</option>
	
</select><br>

<script>
    function subject()
    {
        var gen=document.getElementById('generic').value;
        var major=document.getElementById('major').value;
        if(gen==major)
        {
            alert("Major/Core and Generic Cannot Be Same ");
            document.getElementById('sub').disabled=true;
        }
        else
        {
            document.getElementById('sub').disabled=false;
        }
        
        
    
    }
</script>


</div><br>
<center>

</center>
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');" id="sub">
<br><br><br>
</form>


</div>
</div>
</div>
<?php }
	 
	 else if($cid == '102')
 {
 ?>
<div class="w3-row-padding">
	<p style="color :red"><b>Select One Core Subject.</b><br>
		
		<p style="color :red"><b>Select one Generic subject (Selected Core subject cannot be a generic)</b></p>
<div class="w3-half" >

<label >Compulsory (AECC)<span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="Enter from optional Subjects" value="English" readonly><br>
<label >Generic  <span style="color: red">*</span></label><br><br>
<select  class="w3-input w3-border" style="width:90%;" name="generic" required placeholder="" required="" id="generic" onchange="subject()">
	<option selected="" disabled="" value="">--Select Generic--</option>
	
	
	<option>Agri.Bsc</option>
	<option>Pathelogy</option>
	<option>Home Science</option>
	<option>Genetics</option>

	<option>Florel</option>

	<option>Biotechnology</option>
	<option>Fishary</option>
	<option>Vetenery</option>
</select><br>




</div>

<div class="w3-half">
	<label >Mil (AECC)<span style="color: red">*</span></label><br><br>
	<select  class="w3-input w3-border" style="width:90%;" name="mil" required placeholder="" required="">
	<option selected="" disabled="" value="">--Select MIL--</option>
	
	<option>Assamese</option>
	<option>Alt English</option>
	
</select><br>
<label >Core (Honours/ Major)<span style="color: red">*</span></label><br><br>
	<select  class="w3-input w3-border" style="width:90%;" name="core" required placeholder="" required="" id="major" onchange="subject()">
	<option selected="" disabled="" value="">--Select Core--</option>
	
	
	
	<option>Agri.Bsc</option>
	<option>Pathelogy</option>
	<option>Home Science</option>
	<option>Genetics</option>

	<option>Florel</option>

	<option>Biotechnology</option>
	<option>Fishary</option>
	<option>Vetenery</option>
	
</select><br>

<script>
    function subject()
    {
        var gen=document.getElementById('generic').value;
        var major=document.getElementById('major').value;
        if(gen==major)
        {
            alert("Major/Core and Generic Cannot Be Same ");
            document.getElementById('sub').disabled=true;
        }
        else
        {
            document.getElementById('sub').disabled=false;
        }
        
        
    
    }
</script>


</div><br>
<center>

</center>
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');" id="sub">
<br><br><br>
</form>


</div>
</div>
</div>
<?php }

else if( $cid == '101')
{?>


<div class="w3-row-padding">
<img src="images/sci.JPG" style="width:100%;"><br><br>
<div class="w3-half" >

<label >Compulsory <span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="Enter from optional Subjects" value="English" readonly><br>
<label >Subject 2  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject2" placeholder="Enter from optional Subjects" required><br>


<label >Subject 4 <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject4" placeholder="Enter from optional Subjects" required><br>

</div>

<div class="w3-half">
<label >Subject 1  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject1" placeholder="Enter from optional Subjects" required><br>
<label >Subject 3 <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject3" required placeholder="Enter from optional Subjects"><br>
<label >Mil <span style="color: red">*</span></label><br><br>
<select  class="w3-input w3-border" style="width:90%;" name="mil" required placeholder="" required="">
	<option selected="disabled">Select Mil</option>
	<option>Assamese</option>
	<option>Alternative English</option>
</select>
<br><br>
</div>
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">

<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</form>


</div>
</div>
</div>



<?php
}
else if($cid == '107' || $cid == '109' || $cid == '111' || $cid == '112')
 {
 ?>
<div class="w3-row-padding">
<div class="w3-half" >

<label >Core (Honours/Major)   <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="core" required><br>
</div>

<div class="w3-half">
</div>
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</form>


</div>
</div>
</div>
<?php }
else if($cid == '110')
 {
 ?>
<div class="w3-container">

<span style="color: red">*No Subject entry required for Non-Honours </span><br><br>
</div>

<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</form>


</div>
</div>
</div>
<?php }


 }
?>

<?php include 'footer.php' ;?>
</body>
</html>


