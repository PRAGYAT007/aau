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

<body style="  ">

<?php include 'anav.php';
 include 'step.php';
 $formid=$_GET['formid'];
 $cid=$_GET['courseid'];
 include 'connect.php';
 $sql=mysqli_query($con,"select sname,caste,payment,sid from formgenerate where formid='$formid' ");
 $row=mysqli_fetch_array($sql);
 $payment=$row['payment'];
 $sid=$row['sid'];
 
 $sql2=mysqli_query($con,"select * from applicantdetails where formid='$formid'");
 $n=mysqli_num_rows($sql2);

  $sql4=mysqli_query($con,"select * from uniqueiddegree where formid='$formid' ");
 $row4=mysqli_fetch_array($sql4);
 if($n>0)
 { 
 
  $row2=mysqli_fetch_array($sql2); 	
 
 ?>
 <div class="w3-container w3-content "  >
<center><h3><strong>ASSAM AGRICULTURE UNIVERSITY </strong></h3></center>

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
<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Applicant's full name : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="aname" placeholder="Enter Your Name" value="<?php echo strtoupper($row2['name']); ?>" readonly required><br>
<label >Mother's Name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mname" placeholder="Enter Mother's Name" value="<?php echo strtoupper($row2['mname']); ?>" readonly required><br>
<label >Mother's Occupation : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="moccu" placeholder="Enter Mother's Name" value="<?php echo strtoupper($row2['moccupation']); ?>" readonly required><br>
<label >Mother's Phone Number : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mphone" placeholder="No Phone Number" value="<?php echo strtoupper($row2['mphone']); ?>" readonly required><br>

<label >Caste : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="caste" placeholder="Enter Caste" value="<?php echo $row2['caste']; ?>" readonly required><br>

</div>

<div class="w3-half">
<label >Father's name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="fname" placeholder="Enter Father's Name" value="<?php echo strtoupper($row2['fname']); ?>" readonly required><br>
<label >Fathers Occupation : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="foccu" placeholder="Enter Occupation" value="<?php echo strtoupper($row2['foccupation']); ?>" readonly required><br>
<label >Fathers Phone Number : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="fphone" placeholder="Enter Occupation" value="<?php echo strtoupper($row2['fphone']); ?>" readonly required><br>
<label >Date Of Birth (Candidate) : *</label><br><br>
<input type="date" class="w3-input w3-border" style="width:90%;" name="dob" placeholder="" value="<?php echo $row2['dob'] ?>" required readonly><br><br>
</div>
</div>
<!--<div style="border-bottom:3px dashed gray; width:95%; " ></div>-->

<!--<h6 style="color:red;">(Enter the Unique ID Generated from Director Of Higher Education, Assam Portal as asked my the Govt. of Assam) *</h6>-->
<!--<h7 style="color:red;">If not generated already, <a href="http://dheonlineadmission.amtron.in/sp/" target="_blank" style="text-decoration: none; color: blue">CLICK HERE</a> to generate the unique ID.</h7><br><br>-->

<!--<div class="w3-row-padding"  >-->
<!--<label >Unique ID * </label><br><br>-->
<!--<input type="text" class="w3-input w3-border" style="width:90%;" name="uniqueid" placeholder="Eg: U2003521000012" value="<?php echo strtoupper($row4['uniqueid']); ?>"  readonly><br>-->
<!--</div>-->
<div style="border-bottom:3px dashed gray; width:95%; " ></div>


<br><br>
<h7 style="color:red;">(Enter your Bank Account Details) *</h7><br><br>

<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Benificiary Name * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="bname" placeholder="Enter Benificiary Name" value="<?php echo strtoupper($row2['beniname']); ?>" readonly required><br>
<label >Bank Name *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="bank" placeholder="Enter Your Banks Name" value="<?php echo strtoupper($row2['bankname']); ?>" readonly required><br>


</div>

<div class="w3-half">
<label >Bank Account Number * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="account" placeholder="2555-3555-345" value="<?php echo strtoupper($row2['account']); ?>" readonly required><br>
<label >IFSC Code</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="ifsc" placeholder="Enter IFSC Code" value="<?php echo strtoupper($row2['ifsc']); ?>" readonly required><br><br>

</div>
</div>

<br><br>
<h7 style="color:red;">(Permanent / Present Address ) *</h7><br><br>

<div class="w3-row-padding">
<div class="w3-half" >
<label >Village / Town : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="vill" placeholder="Enter Village / Town" value="<?php echo strtoupper($row2['villtown']); ?>" readonly required><br>
<label >P.O. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="po"  placeholder="Enter P.O." value="<?php echo strtoupper($row2['po']); ?>" readonly required><br>
<label >Dist. *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="dist" placeholder="Enter District" value="<?php echo strtoupper($row2['dist']); ?>" readonly required><br>
<label >Contact No. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="contact" placeholder="Enter Contact Number." value="<?php echo strtoupper($row2['contact']); ?>" readonly required><br>
</div>

<div class="w3-half">
<label >PIN. NO. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="pin" placeholder="Enter Pin Number" value="<?php echo strtoupper($row2['pin']); ?>" readonly required><br>
<label >P.S. : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="ps" readonly required placeholder="Enter P.S" value="<?php echo strtoupper($row2['ps']); ?>"><br>
<label >State : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="state" placeholder="Enter State" value="<?php echo strtoupper($row2['state']); ?>" readonly required><br>
<label >Email : *</label><br><br>
<input type="text" class="w3-input w3-border" readonly style="width:90%;" name="mail" placeholder="Enter Email" value="<?php echo strtoupper($row2['email']); ?>" required><br>
</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="hidden"  name="formid" value="<?php echo $formid; ?>" required>
<input type="hidden"  name="cid" value="<?php echo $cid; ?>" required>
<?php

if($payment=='UNPAID')
{ 
?>
<a href="<?php echo 'formstep2.php?formid='.$formid.'&courseid='.$cid.'' ; ?>"    class="w3-btn w3-green w3-medium" style="font-family:roboto;">>> Click & Proceed</a> 
<a href="<?php echo 'updateformstep1.php?formid='.$formid.'&courseid='.$cid.'' ?>" class="w3-btn w3-green w3-margin-left"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Details</a>
<br><br><br>
</form>


<?php 
}
else
{
?>
<a href="<?php echo 'formstep2.php?formid='.$formid.'&courseid='.$cid.'' ; ?>"    class="w3-btn w3-green w3-medium" style="font-family:roboto;">>> Click & Proceed</a> 
<br><br><br>
</form>
<?php
}
?>


</div>
</div>
</div>
 
 
<?php } else {

$sqll=mysqli_query($con,"select * from studentregister where id='$sid' ");
$rr=mysqli_fetch_array($sqll);
?>
<div class="w3-container w3-content "  >
<center><h3><strong>ASSAM AGRICULTURAL UNIVERSITY </strong></h3></center>

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
<input type="text" class="w3-input w3-border" style="width:90%;" name="aname" placeholder="Enter Your Name" value="<?php echo strtoupper($row[0]); ?>" readonly required><br>
<label >Mother's Name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mname" placeholder="Enter Mother's Name"required><br>
<label >Mothers Occupation : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="moccu" placeholder="Enter Occupation" required><br>
<label >Mothers Phone Number : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mphone" placeholder="Enter Phone number" ><br>
<label >Caste : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="caste" placeholder="Enter Caste" value="<?php echo $row['caste']; ?>" readonly required><br>

</div>

<div class="w3-half">
<label >Father's name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="fname" placeholder="Enter Father's Name" required><br>
<label >Fathers Occupation : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="foccu" placeholder="Enter Occupation" required><br>
<label >Fathers Phone Number : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="fphone" placeholder="Enter Phone number" ><br>
<label >Date Of Birth (Candidate): *</label><br><br>
<input type="date" class="w3-input w3-border" style="width:90%;" name="dob" value="<?php echo $rr['dob']; ?>" placeholder="" required readonly><br><br>
</div>
</div>
<!--<div style="border-bottom:3px dashed gray; width:95%; " ></div>-->

<!--<h6 style="color:red;">(Enter the Unique ID Generated from Director Of Higher Education, Assam Portal as asked my the Govt. of Assam) *</h6>-->
<!--<h7 style="color:red;">If not generated already, <a href="http://dheonlineadmission.amtron.in/sp/" target="_blank" style="text-decoration: none; color: blue">CLICK HERE</a> to generate the unique ID.</h7><br><br>-->

<!--<div class="w3-row-padding"  >-->
<!--<label >Enter Unique ID * </label><br><br>-->
<!--<input type="text" class="w3-input w3-border" style="width:90%;" name="uniqueid" placeholder="U2003521000012" required><br>-->
<!--</div>-->
<div style="border-bottom:3px dashed gray; width:95%; " ></div>
<br><br>
<h7 style="color:red;">(Enter your Bank Account Details) *</h7><br><br>

<div class="w3-row-padding  "  >
<div class="w3-half" >
<label >Benificiary Name * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="bname" placeholder="Enter Benificiary Name" value="" required><br>
<label >Bank Name *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="bank" placeholder="Enter Your Banks Name" required><br>


</div>

<div class="w3-half">
<label >Bank Account Number * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="account" placeholder="2555-3555-345" value="" required><br>
<label >IFSC Code</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="ifsc" placeholder="Enter IFSC Code" required><br><br>

</div>
</div>

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
<label >Alternate Contact No. (Candidate): *</label><br><br>
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
<input type="text" class="w3-input w3-border" style="width:90%;" name="mail" placeholder="Enter Email" value="<?php echo $rr['email']?>" readonly required><br>
</div>
</div>
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<input type="hidden"  name="formid" value="<?php echo $formid; ?>" required>
<?php
 
?>
<input type="hidden"  name="cid" value="<?php echo $cid; ?>" required>
<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</form>



</div>
</div>
</div>
<?php } include 'footer.php' ;?>
</body>
</html>