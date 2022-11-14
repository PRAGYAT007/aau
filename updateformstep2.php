<!Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Amguri College Admission Portal</title>
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
<center><h3><strong>THE AMGURI COLLEGE : AMGURI </strong></h3></center>

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
 $sql=mysqli_query($con,"select * from examinationpassed where formid='$id' ");
 $row=mysqli_fetch_array($sql);
 
 $sql2=mysqli_query($con,"select * from markssecured where formid='$id'");
 $sql5=mysqli_query($con,"select * from hssubjectstaken where formid='$id'");
 $n=mysqli_num_rows($sql2);
 $row3=mysqli_fetch_array($sql5);
 $row2=mysqli_fetch_array($sql2); 	
 ?>

<form action="saveupdateform2.php" method="POST">
<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Name of the Examination : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="examination" placeholder="Enter Examination name" value="<?php echo $row['examination']; ?>" required><br>
<label > Name of the Board/Council/ University: *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="board" placeholder="Enter Board/Council/University" value="<?php echo $row['board']; ?>" required><br>

<label > Roll No. *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="rollno" placeholder="Enter Roll - No. Eg (336B-7859)" value="<?php echo $row['rollno']; ?>"required>
<br>

</div>

<div class="w3-half">
<label >Year of Passing : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="year" placeholder="Eg: 2020" value="<?php echo $row['year']; ?>" required><br>
<label >Name of the Institution : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="inst" placeholder="Enter Name Of Instituition." value="<?php echo $row['institution']; ?>" required><br>
<label >Division Secured : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="division" placeholder="Division secured." value="<?php echo $row['division']; ?>" required><br><br>
</div>
<label >Marks Secured (Subjectwise) : *</label><br><br>
<div style="overflow: scroll; width: 100%;">
<table class="w3-table" style="width: 850px;" >
<tr>
<th>Subjects</th>
<th><input type="text" class="w3-input w3-border-0" name="subn1"  value="<?php echo $row2['s1n']; ?>"required=""> </th>
<th><input type="text" class="w3-input w3-border-0" name="subn2" value="<?php echo $row2['s2n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn3" value="<?php echo $row2['s3n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn4" value="<?php echo $row2['s4n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn5" value="<?php echo $row2['s5n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn6" value="<?php echo $row2['s6n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn7" value="<?php echo $row2['s7n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn8" value="<?php echo $row2['s8n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn9" value="<?php echo $row2['s9n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn10" value="<?php echo $row2['s10n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn11" value="<?php echo $row2['s11n']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn12" value="<?php echo $row2['s12n']; ?>"></th>
<th>Total Marks</th>
</tr>
<tr>
<th>Full Marks</th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks1" value="<?php echo $row2['s1f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks2" value="<?php echo $row2['s2f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks3" value="<?php echo $row2['s3f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks4" value="<?php echo $row2['s4f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks5" value="<?php echo $row2['s5f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks6" value="<?php echo $row2['s6f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks7" value="<?php echo $row2['s7f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks8" value="<?php echo $row2['s8f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks9" value="<?php echo $row2['s9f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks10" value="<?php echo $row2['s10f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks11" value="<?php echo $row2['s11f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks12" value="<?php echo $row2['s12f']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="fullmarks" value="<?php echo $row2['totalmarks']; ?>" ></th>
</tr>
<tr>
<th>Marks Secured</th>
<th><input type="text" class="w3-input w3-border-0" name="smarks1" value="<?php echo $row2['s1s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks2" value="<?php echo $row2['s2s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks3" value="<?php echo $row2['s3s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks4" value="<?php echo $row2['s4s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks5" value="<?php echo $row2['s5s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks6" value="<?php echo $row2['s6s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks7" value="<?php echo $row2['s7s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks8" value="<?php echo $row2['s8s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks9" value="<?php echo $row2['s9s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks10" value="<?php echo $row2['s10s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks11" value="<?php echo $row2['s11s']; ?>" ></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks12" value="<?php echo $row2['s12s']; ?>"></th>
<th><input type="text" class="w3-input w3-border-0" name="stotalmarks" value="<?php echo $row2['securedmarks']; ?>" ></th>
</tr>
</table>
</div>
<br><br>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div>
<?php
$formid=$_GET['formid'];
$cid=$_GET['courseid'];

?>
<input type="hidden" name="formid" value="<?php echo $formid; ?>">
<input type="hidden" name="courseid" value="<?php echo $cid; ?>">
<br><br>
<h7 style="color:red;">Combination of Subjects Offered : *</h7><br><br>
<?php
 
 if($cid == '100')
 {
 ?>
<div class="w3-row-padding">
	<p style="color :red"><b> Optional Subjects</b> : (Assamese,Advance Assamese, English, Alternative English ,Economics, Mathematics *, Education, History, Sociology, Political Science, Logic & Philosophy)</p>
<div class="w3-half" >

<label >Compulsory <span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="Enter from optional Subjects" value="<?php echo $row3['compul'] ?>" readonly><br>
<label >Subject 2 (Group A)  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject2" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub1'] ?>"required><br>


<label >Subject 4 (Group B) <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject4" placeholder="Enter from optional Subjects"  value="<?php echo $row3['sub2'] ?>"required><br>

</div>

<div class="w3-half">
<label >Subject 1 (Group A) <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject1" placeholder="Enter from optional Subjects"  value="<?php echo $row3['sub3'] ?>"required><br>
<label >Subject 3 (Group A) <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject3" required placeholder="Enter from optional Subjects" value="<?php echo $row3['sub4'] ?>"><br>
<label >Mil <span style="color: red">*</span></label><br><br>
<select  class="w3-input w3-border" style="width:90%;" name="mil" required placeholder="" >
	<option selected="disabled"><?php echo $row3['mil'] ?></option>
	<option>Assamese</option>
	<option>Alternative English</option>
</select><br><br>
</div>
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save Changes" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</form>


</div>
</div>
</div>
<?php }

else if( $cid == '101')
{?>


<div class="w3-row-padding">
	<p style="color :red"><b> Optional Subjects</b> : (General English,MIL (Assamese/ Alternative English), Book Keeping & Accountancy, Business Studies, Salesmenship & Advertising and Economics)</p>
<div class="w3-half" >

<label >Compulsory <span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="Enter from optional Subjects" value="<?php echo $row3['compul'] ?>" readonly><br>
<label >Subject 2 (Group A)  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject2" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub1'] ?>"required><br>


<label >Subject 4 (Group B) <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject4" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub2'] ?>"required><br>

</div>

<div class="w3-half">
<label >Subject 1 (Group A) <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject1" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub3'] ?>"required><br>
<label >Subject 3 (Group A) <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject3" required placeholder="Enter from optional Subjects" value="<?php echo $row3['sub4'] ?>"><br>
<label >Mil <span style="color: red">*</span></label><br><br>
<select  class="w3-input w3-border" style="width:90%;" name="mil" required placeholder="">
	<option selected="disabled"><?php echo $row3['mil'] ?></option>
	<option>Assamese</option>
	<option>Alternative English</option>
</select>
<br><br>
</div>
</div>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">

<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save Changes" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</form>


</div>
</div>
</div>



<?php
}

?>

<?php include 'footer.php' ;?>
</body>
</html>


