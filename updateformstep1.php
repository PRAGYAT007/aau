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

<?php include 'anav.php';
 include 'step.php';
 $formid=$_GET['formid'];
 $cid=$_GET['courseid'];
 include 'connect.php';
 $sql=mysqli_query($con,"select sname,caste,payment from formgenerate where formid='$formid' ");
 $row=mysqli_fetch_array($sql);
 $payment=$row['payment'];
 
 $sql2=mysqli_query($con,"select * from applicantdetails where formid='$formid'");
 $n=mysqli_num_rows($sql2);
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
<form method="post" action="saveupdateform1.php">
<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Applicant's full name : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="aname" placeholder="Enter Your Name" value="<?php echo strtoupper($row2['name']); ?>" required readonly><br>
<label >Mother's Name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mname" placeholder="Enter Mother's Name" value="<?php echo strtoupper($row2['mname']); ?>" required><br>
<label >Mother's Occupation : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="moccu" placeholder="Enter Mother's Occupation" value="<?php echo strtoupper($row2['moccupation']); ?>" required><br>
<label >Mother's Phone Number : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mphone" placeholder="Phone Number" value="<?php echo strtoupper($row2['mphone']); ?>" required><br>

<label >Caste : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="caste" placeholder="Enter Caste" value="<?php echo $row2['caste']; ?>" required><br>

</div>

<div class="w3-half">
<label >Father's name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="fname" placeholder="Enter Father's Name" value="<?php echo strtoupper($row2['fname']); ?>" required><br>
<label >Fathers Occupation : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="foccu" placeholder="Enter Occupation" value="<?php echo strtoupper($row2['foccupation']); ?>" required><br>
<label >Fathers Phone Number : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="fphone" placeholder="Phone Number" value="<?php echo strtoupper($row2['fphone']); ?>" required><br>
<label >Date Of Birth : *</label><br><br>
<input type="date" class="w3-input w3-border" style="width:90%;" name="dob" placeholder="" value="<?php echo $row2['dob'] ?>" required><br><br>
</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div>



<br><br>
<h7 style="color:red;">(Enter your Bank Account Details) *</h7><br><br>

<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Benificiary Name * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="bname" placeholder="Enter Benificiary Name" value="<?php echo strtoupper($row2['beniname']); ?>" required><br>
<label >Bank Name *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="bank" placeholder="Enter Your Banks Name" value="<?php echo strtoupper($row2['bankname']); ?>" required><br>


</div>

<div class="w3-half">
<label >Bank Account Number * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="account" placeholder="2555-3555-345" value="<?php echo strtoupper($row2['account']); ?>" required><br>
<label >IFSC Code</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="ifsc" placeholder="Enter IFSC Code" value="<?php echo strtoupper($row2['ifsc']); ?>" required><br><br>

</div>
</div>

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
<input type="hidden"  name="cid" value="<?php echo $cid; ?>" required>
<input type="submit" value=">> Save Changes" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</form>



</div>
</div>
</div>
 
<?php include 'footer.php' ;?>
</body>
</html>