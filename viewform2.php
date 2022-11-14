<!doctype html>
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

<?php 

 include 'topbar.php';
  	
 
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
 $sql5=mysqli_query($con,"select * from bachelorsubjecttaken where formid='$id'");
 $n=mysqli_num_rows($sql2);
 if($n>0)
 { 
  $row3=mysqli_fetch_array($sql5);
  $row2=mysqli_fetch_array($sql2); 	
 
 ?>

<form >
<fieldset disabled style="border:none">
<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Name of the Examination : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="examination" value="<?php echo $row['examination']; ?>" placeholder="Enter Examination name" required><br>
<label >Name of the Board/Council/ University: *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="board" placeholder="Enter Board/Council/University" value="<?php echo $row['board']; ?>" required><br>
<label > Roll No. *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="rollno" placeholder="Enter Roll - No. Eg (336B-7859)" value="<?php echo $row['rollno']; ?>" required>
<br>

</div>

<div class="w3-half">
<label >Year of Passing : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="year" placeholder="Enter Passing Year." value="<?php echo $row['year']; ?>" required><br>
<label >Name of the Institution : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="inst" placeholder="Enter Name Of Instituition." value="<?php echo $row['institution']; ?>" required><br>
<label >Division Secured : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="division" placeholder="Division secured." value="<?php echo $row['division']; ?>" required><br><br>
</div>
<label >Marks Secured (Subjectwise) : *</label><br><br>
<div class="w3-row-padding" style="padding-left:6%; padding-right:6%">
	<div class="w3-third">
    	<h5><span style="color:slategrey; border-bottom:solid"><strong>SUBJECTS</strong></span></h5>
        <?php echo $row2['s1n']; ?><br>
        <?php echo $row2['s2n']; ?><br>
        <?php echo $row2['s3n']; ?><br>
        <?php echo $row2['s4n']; ?><br>
        <?php echo $row2['s5n']; ?><br>
        <?php echo $row2['s6n']; ?><br>
        <?php echo $row2['s7n']; ?><br>
        <?php echo $row2['s8n']; ?><br>
        <?php echo $row2['s9n']; ?><br>
        <?php echo $row2['s10n']; ?><br>
        <?php echo $row2['s11n']; ?><br>
        <?php echo $row2['s12n']; ?><br>
    </div>
    <div class="w3-third">
    <h5><span style="color:slategrey; border-bottom:solid"><strong>FULL MARKS</strong></span></h5>
    <?php echo $row2['s1f']; ?><br>
    <?php echo $row2['s2f']; ?><br>
    <?php echo $row2['s3f']; ?><br>
    <?php echo $row2['s4f']; ?><br>
    <?php echo $row2['s5f']; ?><br>
    <?php echo $row2['s6f']; ?><br>
    <?php echo $row2['s7f']; ?><br>
    <?php echo $row2['s8f']; ?><br>
    <?php echo $row2['s9f']; ?><br>
    <?php echo $row2['s10f']; ?><br>
    <?php echo $row2['s11f']; ?><br>
    <?php echo $row2['s12f']; ?><br><br>
    <strong>Total Marks :</strong> <?php echo $row2['totalmarks']; ?>
    </div>
    <div class="w3-third">
    	<h5><span style="color:slategrey; border-bottom:solid"><strong>MARKS SECURED</strong></span></h5>
        <?php echo $row2['s1s']; ?><br>
        <?php echo $row2['s2s']; ?><br>
        <?php echo $row2['s3s']; ?><br>
        <?php echo $row2['s4s']; ?><br>
        <?php echo $row2['s5s']; ?><br>
        <?php echo $row2['s6s']; ?><br>
        <?php echo $row2['s7s']; ?><br>
        <?php echo $row2['s8s']; ?><br>
        <?php echo $row2['s9s']; ?><br>
        <?php echo $row2['s10s']; ?><br>
        <?php echo $row2['s11s']; ?><br>
        <?php echo $row2['s12s']; ?><br><br>
        <strong>Total Marks Secured : </strong><?php echo $row2['securedmarks']; ?>
    </div>
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
 
 if($cid == '100' || $cid == '101')
 {
 ?>
<div class="w3-row-padding">
<div class="w3-half" >
<label >Compulsory : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="vill" placeholder="Enter Village / Town" required><br>
<label >Subject 2 (Group A)  : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="po"  placeholder="Enter P.O." required><br>
<label >Subject 4 (Group B)</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="dist" placeholder="Enter District" required><br>

</div>

<div class="w3-half">
<label >Subject 1 (Group A)</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="pin" placeholder="Enter Pin Number" required><br>
<label >Subject 3 (Group A) </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="occu" required placeholder="Enter P.S"><br>
<label >Mil *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="state" placeholder="Enter State" required><br>

</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;">
<br><br><br>
</form>


</div>
</div>
<?php }

else	{

$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname = 'major'");
$r1=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname = 'compulsory'");
$major=mysqli_fetch_array($r);
$compul=mysqli_fetch_array($r1);
?>
<div class="w3-row-padding">
<div class="w3-half" >
<label >Major : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;"  value="<?php echo $row3['major']; ?>"  required><br>
<label >Compulsory  : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;"  value="<?php echo $row3['compulsory']; ?>"  required><br>
<label >Mil *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;"  value="<?php echo $row3['mil']; ?>"  required>
<br>
</div>

<div class="w3-half">
<label >Core Subject 1 :</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;"  value="<?php echo $row3['core1']; ?>"  required>
<br>
<label >Core Subject 2 : </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;"  value="<?php echo $row3['core2']; ?>"  required>
<br>


</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
</fieldset>
<a href="<?php echo 'viewform3.php?formid='.$id.'' ?> " class="w3-btn w3-green w3-medium" style="font-family:roboto;"> >> Click & Proceed </a>
<br><br><br>
</form>


</div>
</div>
<?php
}
 }
 else{
?>

<form action="saveformstep2.php" method="POST">
<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Name of the Examination : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="examination" placeholder="Enter Examination name" required value=""><br>
<label > Name of the Board/Council/ University: *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="board" placeholder="Enter Board/Council/University"required><br>

<label > Roll No. *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="rollno" placeholder="Enter Roll - No. Eg (336B-7859)" required>
<br>

</div>

<div class="w3-half">
<label >Year of Passing : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="year" placeholder="Enter Passing Year." required><br>
<label >Name of the Institution : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="inst" placeholder="Enter Name Of Instituition." required><br>
<label >Division Secured : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="division" placeholder="Division secured." required><br><br>
</div>
<label >Marks Secured (Subjectwise) : *</label><br><br>
<table class="w3-table" style="">
<tr>
<th>Subjects</th>
<th><input type="text" class="w3-input w3-border-0" name="subn1"> </th>
<th><input type="text" class="w3-input w3-border-0" name="subn2"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn3"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn4"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn5"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn6"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn7"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn8"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn9"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn10"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn11"></th>
<th><input type="text" class="w3-input w3-border-0" name="subn12"></th>
<th>Total Marks</th>
</tr>
<tr>
<th>Full Marks</th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks1"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks2"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks3"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks4"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks5"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks6"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks7"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks8"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks9"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks10"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks11"></th>
<th><input type="text" class="w3-input w3-border-0" name="fmarks12"></th>
<th><input type="text" class="w3-input w3-border-0" name="fullmarks"></th>
</tr>
<tr>
<th>Marks Secured</th>
<th><input type="text" class="w3-input w3-border-0" name="smarks1"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks2"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks3"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks4"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks5"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks6"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks7"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks8"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks9"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks10"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks11"></th>
<th><input type="text" class="w3-input w3-border-0" name="smarks12"></th>
<th><input type="text" class="w3-input w3-border-0" name="stotalmarks"></th>
</tr>
</table>
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
 
 if($cid == '100')
 {
 ?>
<div class="w3-row-padding">
<div class="w3-half" >
<label >Compulsory : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="vill" placeholder="Enter Village / Town" required><br>
<label >Subject 2 (Group A)  : *</label><br><br>
<select class="w3-input w3-border" style="width:90%;" name="A"   required>
<option selected disabled>Select Group A</option>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname='compulsory1' ");
while($c=mysqli_fetch_array($r))
{
?>
<option ><?php echo $c[0] ?></option>
<?php
}
?>
</select>
<br>
<label >Subject 4 (Group B)</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="dist" placeholder="Enter District" required><br>

</div>

<div class="w3-half">
<label >Subject 1 (Group A)</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="pin" placeholder="Enter Pin Number" required><br>
<label >Subject 3 (Group A) </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="occu" required placeholder="Enter P.S"><br>
<label >Mil *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="state" placeholder="Enter State" required><br>

</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;">
<br><br><br>
</form>


</div>
</div>
<?php }
else if( $cid == '101')
{?>
<div class="w3-row-padding">
<div class="w3-half" >
<label >Compulsory : * </label><br><br>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname='compulsory' ");
$c=mysqli_fetch_array($r)?>
<input type="text" class="w3-input w3-border" style="width:90%;" name="vill" value="<?php echo $c[0] ?>" required><br>
<label >Compulsory 1  : *</label><br><br>
<select class="w3-input w3-border" style="width:90%;" name="A"   required>
<option selected disabled>Select Your Subject</option>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname='compulsory1' ");
while($c=mysqli_fetch_array($r))
{
?>
<option ><?php echo $c[0] ?></option>
<?php
}
?>
</select>
<br>
<label >Compulsory 2  : *</label><br><br>
<select class="w3-input w3-border" style="width:90%;" name="A"   required>
<option selected disabled>Select Your Subject</option>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname='compulsory2' ");
while($c=mysqli_fetch_array($r))
{
?>
<option ><?php echo $c[0] ?></option>
<?php
}
?>
</select>
<br>

</div>

<div class="w3-half">
<label >Compulsory 3 : *</label><br><br>
<select class="w3-input w3-border" style="width:90%;" name="A"   required>
<option selected disabled>Select Your Subject</option>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname='compulsory3' ");
while($c=mysqli_fetch_array($r))
{
?>
<option ><?php echo $c[0] ?></option>
<?php
}
?>
</select><br>
<label >Compulsory 4  : *</label><br><br>
<select class="w3-input w3-border" style="width:90%;" name="A"   required>
<option selected disabled>Select Your Subject</option>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname='compulsory4' ");
while($c=mysqli_fetch_array($r))
{
?>
<option ><?php echo $c[0] ?></option>
<?php
}
?>
</select><br>
<label >Mil *</label><br><br>
<select class="w3-input w3-border" style="width:90%;" name="A"   required>
<option selected disabled>Select Your Subject</option>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname='mil' ");
while($c=mysqli_fetch_array($r))
{
?>
<option ><?php echo $c[0] ?></option>
<?php
}
?>
</select><br>

</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;">
<br><br><br>
</form>


<?php
}

else	{

$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname = 'major'");
$r1=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname = 'compulsory'");
$major=mysqli_fetch_array($r);
$compul=mysqli_fetch_array($r1);
?>
<div class="w3-row-padding">
<div class="w3-half" >
<label >Major : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="major" value="<?php echo $major[0]; ?>"  required><br>
<label >Compulsory  : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" value="<?php echo $compul[0]; ?>"  required><br>
<label >Mil *</label><br><br>
<select class="w3-input w3-border" style="width:90%;" name="mil"   required>
<option selected disabled>Select Mil Subject.</option>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname = 'mil'");
while($mil=mysqli_fetch_array($r))
{
?>
<option ><?php echo $mil[0] ?></option>
<?php
}
?>
</select>
<br>
</div>

<div class="w3-half">
<label >Core Subject 1 :</label><br><br>
<select class="w3-input w3-border" style="width:90%;" name="core1"   required>
<option selected disabled>Select Core Subject.</option>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname = 'core'");
while($core=mysqli_fetch_array($r))
{
?>
<option ><?php echo $core[0] ?></option>
<?php
}
?>
</select>
<br>
<label >Core Subject 2 : </label><br><br>
<select class="w3-input w3-border" style="width:90%;" name="core2"   required>
<option selected disabled>Select Core Subject.</option>
<?php 
$r=mysqli_query($con,"select subjectname from subjects where courseid='$cid' and groupname = 'core'");
while($core=mysqli_fetch_array($r))
{
?>
<option ><?php echo $core[0] ?></option>
<?php
}
?>
</select>
<br>


</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</form>
<?php
 }}
?>
</div>
<?php include 'footer.php' ;?>
</body>
</html>