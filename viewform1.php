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

<body style="  ">

<?php 
include 'topbar.php';
 include 'step.php';
 $formid=$_GET['formid'];
 $cid=$_GET['courseid'];
 include 'connect.php';
 $sql=mysqli_query($con,"select sname,caste from formgenerate where formid='$formid' ");
 $row=mysqli_fetch_array($sql);
 
 $sql2=mysqli_query($con,"select * from applicantdetails where formid='$formid'");
 $n=mysqli_num_rows($sql2);
 if($n>0)
 { 
 
  $row2=mysqli_fetch_array($sql2); 	
 
 ?>
 <div class="w3-container w3-content "  >
<center><h3><strong>THE AMGURI COLLEGE : AMGURI </strong></h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>APPLICATION FORM.</h3></center>
</div>
<div class="w3-container " style="  margin-left:4.5%; margin-top:2%; ">
<h7 style="color:red"> ( Applicant Detail's. ) *</h7>
<br>
<br>
<form method="post" action="">
<fieldset disabled="disabled" style="border:none">
<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Applicant's full name : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="aname" placeholder="Enter Your Name" value="<?php echo strtoupper($row2['name']); ?>" required><br>
<label >Mother's Name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mname" placeholder="Enter Mother's Name" value="<?php echo strtoupper($row2['mname']); ?>" required><br>

<label >Caste : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="caste" placeholder="Enter Caste" value="<?php echo $row2['caste']; ?>" required><br>

</div>

<div class="w3-half">
<label >Father's name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="fname" placeholder="Enter Father's Name" value="<?php echo strtoupper($row2['fname']); ?>" required><br>
<label >Occupation : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="occu" placeholder="Enter Occupation" value="<?php echo strtoupper($row2['occupation']); ?>" required><br>
<label >Date Of Birth : *</label><br><br>
<input type="date" class="w3-input w3-border" style="width:90%;" name="dob" placeholder="" value="<?php echo strtoupper($row2['dob']); ?>" required><br><br>
</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div>

<br><br>
<h7 style="color:red;">(Permanent / Present Address ) *</h7><br><br>

<div class="w3-row-padding">
<div class="w3-half" >
<label >Village / Town : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="vill" placeholder="Enter Village / Town" value="<?php echo strtoupper($row2['villtown']); ?>" required><br>
<label >P.O. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="po"  placeholder="Enter P.O." value="<?php echo strtoupper($row2['po']); ?>" required><br>
<label >Dist. *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="dist" placeholder="Enter District" value="<?php echo strtoupper($row2['dist']); ?>"required><br>
<label >Contact No. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="contact" placeholder="Enter Contact Number." value="<?php echo strtoupper($row2['contact']); ?>" required><br>
</div>

<div class="w3-half">
<label >PIN. NO. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="pin" placeholder="Enter Pin Number" value="<?php echo strtoupper($row2['pin']); ?>" required><br>
<label >P.S. : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="ps" required placeholder="Enter P.S" value="<?php echo strtoupper($row2['ps']); ?>"><br>
<label >State : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="state" placeholder="Enter State" value="<?php echo strtoupper($row2['state']); ?>" required><br>
<label >Email : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mail" placeholder="Enter Email" value="<?php echo strtoupper($row2['email']); ?>" required><br>
</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="hidden"  name="formid" value="<?php echo $formid; ?>" required>
</fieldset>
<a href="<?php echo 'viewform2.php?formid='.$formid.'&courseid='.$cid.'' ; ?>"    class="w3-btn w3-green w3-medium" style="font-family:roboto;">>> Click & Proceed</a>

<br><br><br>
</form>


</div>
</div>
</div>
 
 
<?php } else {?>
<div class="w3-container w3-content "  >
<center><h3><strong>THE AMGURI COLLEGE : AMGURI </strong></h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>APPLICATION FORM.</h3></center>
</div>
<div class="w3-container " style="  margin-left:4.5%; margin-top:2%; ">
<h7 style="color:red"> ( Applicant Detail's. ) *</h7>
<br>
<br>
<form method="post" action="saveformstep1.php">
<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Applicant's full name : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="aname" placeholder="Enter Your Name" value="<?php echo strtoupper($row[0]); ?>" required><br>
<label >Mother's Name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mname" placeholder="Enter Mother's Name"required><br>

<label >Caste : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="caste" placeholder="Enter Caste" value="<?php echo $row[1]; ?>" required><br>

</div>

<div class="w3-half">
<label >Father's name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="fname" placeholder="Enter Father's Name" required><br>
<label >Occupation : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="occu" placeholder="Enter Occupation" required><br>
<label >Date Of Birth : *</label><br><br>
<input type="date" class="w3-input w3-border" style="width:90%;" name="dob" placeholder="" required><br><br>
</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div>

<br><br>
<h7 style="color:red;">(Permanent / Present Address ) *</h7><br><br>

<div class="w3-row-padding">
<div class="w3-half" >
<label >Village / Town : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="vill" placeholder="Enter Village / Town" required><br>
<label >P.O. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="po"  placeholder="Enter P.O." required><br>
<label >Dist. *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="dist" placeholder="Enter District" required><br>
<label >Contact No. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="contact" placeholder="Enter Contact Number." required><br>
</div>

<div class="w3-half">
<label >PIN. NO. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="pin" placeholder="Enter Pin Number" required><br>
<label >P.S. : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="ps" required placeholder="Enter P.S"><br>
<label >State : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="state" placeholder="Enter State" required><br>
<label >Email : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mail" placeholder="Enter Email" required><br>
</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="hidden"  name="formid" value="<?php echo $formid; ?>" required>
<?php
 
?>
<input type="hidden"  name="cid" value="<?php echo $cid; ?>" required>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;">
<br><br><br>
</form>


</div>
</div>
</div>
<?php } include 'footer.php' ;?>
</body>
</html>