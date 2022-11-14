<!DOCTYPE html>
<html>
<head>
	<title>Application Form</title>
	 <link href="css/w3.css" type="text/css" rel="stylesheet">
</head>
<body onload="window.print()" style="font-size:12px;">
   
<div class="w3-content " style="background: whitesmoke; 
		height: auto; 
		 ">

<?php include 'connect.php';
 $formid=$_GET['formid'];
 $cid=$_GET['courseid'];
 
 $sql=mysqli_query($con,"select sname,caste from formgenerate where formid='$formid' ");
 $row=mysqli_fetch_array($sql);
 
 $sql2=mysqli_query($con,"select * from applicantdetails where formid='$formid'");
 $n=mysqli_num_rows($sql2);
 if($n>0)
 { 
 	 $row2=mysqli_fetch_array($sql2); 	
 
 ?>
 <div class="w3-content "  style="">
<center><h3><strong>ASSAM AGRICULTURAL UNIVERSITY </strong></h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content " style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto; ">
<center><h3>APPLICATION FORM.</h3></center>
</div>
<div class=" " style="  margin-left:4.5%; margin-top:2%; ">
<h7 style="color:red"> ( Applicant Detail's. ) *</h7>
<br><br>
<b>
<label >Applicant's Form Number : * </label>
<input type="text" class="" style="width:90%;border:none;" name="aname" placeholder="Enter Your Name" value="<?php echo strtoupper($formid); ?>" required ></b>
<form method="post" action="">
   <table style="width:100%;">
        <tr>
         <td>
<div class="" >
<label >Applicant's full name : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="aname" placeholder="Enter Your Name" value="<?php echo strtoupper($row2['name']); ?>" required><br>
<label >Mother's Name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mname" placeholder="Enter Mother's Name" value="<?php echo strtoupper($row2['mname']); ?>" required><br>
<label >Mother's Occupation : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mname" placeholder="Enter Mother's Name" value="<?php echo strtoupper($row2['moccupation']); ?>" required><br>
<label >Mother's Phone Number : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mname" placeholder="No Phone Number" value="<?php echo strtoupper($row2['mphone']); ?>" required><br>

<label >Caste : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="caste" placeholder="Enter Caste" value="<?php echo $row2['caste']; ?>" required>
</div>
</td>
<td>
<div class="">
  <?php

$sqlll=mysqli_query($con,"select * from documents where formid='$formid'");
$nnn=mysqli_num_rows($sqlll);
if($nnn>0)
{
$rowww=mysqli_fetch_array($sqlll);
?>


<h6 style="color:red; margin-top:-5%; "> Applicant Photo : </h6> <img src="<?php echo $rowww['photo']?>" style="width:100px;">
<?php
}
?>
<br><br>
<label >Father's name : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="fname" placeholder="Enter Father's Name" value="<?php echo strtoupper($row2['fname']); ?>" required><br>
<label >Fathers Occupation : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="occu" placeholder="Enter Occupation" value="<?php echo strtoupper($row2['foccupation']); ?>" required><br>
<label >Fathers Phone Number : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="occu" placeholder="Enter Occupation" value="<?php echo strtoupper($row2['fphone']); ?>" required><br>
<label >Date Of Birth : *</label><br><br>
<input type="date" class="w3-input w3-border" style="width:90%;" name="dob" placeholder="" value="<?php echo $row2['dob'] ?>" required><br><br>
</div>
</td>

</tr>
</table>
<div style="border-bottom:3px dashed gray; width:95%; " ></div>



<br><br>
<h7 style="color:red;">(Enter your Bank Account Details) *</h7><br><br>

<table style="width:100%;"> 
<tr>
    <td>
<div class="" >
<label >Benificiary Name * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="bname" placeholder="Enter Benificiary Name" value="<?php echo strtoupper($row2['beniname']); ?>" required><br>
<label >Bank Name *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="bank" placeholder="Enter Your Banks Name" value="<?php echo strtoupper($row2['bankname']); ?>" required><br>


</div>
</td>
<td>
<div class="">
<label >Bank Account Number * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="account" placeholder="2555-3555-345" value="<?php echo strtoupper($row2['account']); ?>" required><br>
<label >IFSC Code</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="ifsc" placeholder="Enter IFSC Code" value="<?php echo strtoupper($row2['ifsc']); ?>" required><br><br>

</div>
</td>
</tr>
</table>

<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>
<h7 style="color:red;">(Permanent / Present Address ) *</h7><br><br>

<table style="width:100%;">
    <tr>
        <td>
<div class="" >
<label >Village / Town : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="vill" placeholder="Enter Village / Town" value="<?php echo strtoupper($row2['villtown']); ?>" required><br>
<label >P.O. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="po"  placeholder="Enter P.O." value="<?php echo strtoupper($row2['po']); ?>" required><br>
<label >Dist. *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="dist" placeholder="Enter District" value="<?php echo strtoupper($row2['dist']); ?>"required><br>
<label >Contact No. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="contact" placeholder="Enter Contact Number." value="<?php echo strtoupper($row2['contact']); ?>" required><br>
</div>
</td>
<td>
<div class="">
<label >PIN. NO. : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="pin" placeholder="Enter Pin Number" value="<?php echo strtoupper($row2['pin']); ?>" required><br>
<label >P.S. : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="ps" required placeholder="Enter P.S" value="<?php echo strtoupper($row2['ps']); ?>"><br>
<label >State : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="state" placeholder="Enter State" value="<?php echo strtoupper($row2['state']); ?>" required><br>
<label >Email : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="mail" placeholder="Enter Email" value="<?php echo strtoupper($row2['email']); ?>" required><br>
</div>
</td>
</tr>
</table>

<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>



</form>


</div>



<div class="w3-container " style="  background:white;">
<h7 style="color:red"> ( Particulars of the last Board/ Council / University / Examination Passed. ) *</h7>

<?php 
 

 $sql=mysqli_query($con,"select * from examinationpassed where formid='$formid' ");
 $row=mysqli_fetch_array($sql);
 
 $sql2=mysqli_query($con,"select * from markssecured where formid='$formid'");
 $sql5=mysqli_query($con,"select * from hssubjectstaken where formid='$formid'");
 $n=mysqli_num_rows($sql2);
 if($n>0)
 { 
  $row3=mysqli_fetch_array($sql5);
  $row2=mysqli_fetch_array($sql2); 	
 
 ?>
<form >
<table style="width:100%;"><tr>
<td>
<div class="" >
<label >Name of the Examination : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="examination" value="<?php echo $row['examination']; ?>" placeholder="Enter Examination name" required><br>
<label >Name of the Board/Council/ University: *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="board" placeholder="Enter Board/Council/University" value="<?php echo $row['board']; ?>" required><br>

<label > Roll No. *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="rollno" placeholder="Enter Roll - No. Eg (336B-7859)" value="<?php echo $row['rollno']; ?>" required>
<br>

</div>
</td>
    <td>

<div class="">
<label >Year of Passing : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="year" placeholder="Enter Passing Year." value="<?php echo $row['year']; ?>" required><br>
<label >Name of the Institution : * </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="inst" placeholder="Enter Name Of Instituition." value="<?php echo $row['institution']; ?>" required><br>
<label >Division Secured : *</label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="division" placeholder="Division secured." value="<?php echo $row['division']; ?>" required><br><br>
</div>
</td>
</tr>
</table>
<label >Marks Secured (Subjectwise) : *</label><br><br>

<table style="width:100%;">
    <tr>
<td>
	<div class="">
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
    </td>
    <td>
    <div class="">
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
    </td>
    <td>
    <div class="">
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
    </td>

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
 
 if($cid == '100' || $cid == '101')
 {
 ?>
 <table style="width:100%;">
    <tr>
        <td>

	
<div class="" >

<label >Compulsory <span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="Enter from optional Subjects" value="<?php echo $row3['compul'] ?>" readonly><br>
<label >Subject 2  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject2" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub1'] ?>" readonly><br>


<label >Subject 4 <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject4" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub2'] ?>" readonly><br>

</div>
</td>
<td>
<div class="">
<label >Subject 1  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject1" placeholder="Enter from optional Subjects" value="<?php echo $row3['sub3'] ?>" readonly><br>
<label >Subject 3  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject3" required placeholder="Enter from optional Subjects" value="<?php echo $row3['sub4'] ?>" readonly><br>
<label >Mil <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="subject3" required placeholder="Enter from optional Subjects" value="<?php echo $row3['mil'] ?>" readonly>
<br><br>
</div>
</td>
</tr>
</table>
<input type="hidden" name="cid" value=" <?php echo $cid; ?>">
<div style="border-bottom:3px dashed gray; width:95%; " ></div><br><br>



<?php
}

else if($cid == '103')
 {
	  
	 $sqlb=mysqli_query($con,"select * from bachelorsubjecttaken where formid='$formid'");
	 $bs=mysqli_fetch_array($sqlb);
 ?>
<table style="width:100%;">
    <tr>
        <td>
	
<div class="" >

<label >Compulsory (AECC)<span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="" value="<?php echo $bs['compulsory']; ?>" readonly><br><br>
<label >Generic  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="Enter Generic subject" value="<?php echo $bs['generic']; ?>" required><br><br>




</div>
</td>
<td>
<div class="">
	<label >Mil (AECC)<span style="color: red">*</span></label><br><br>
	<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="" value="<?php echo $bs['mil']; ?>" required><br><br>
<label >Core (Honours/ Major)<span style="color: red">*</span></label><br><br>
	<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="" value="<?php echo $bs['core'] ?>" required><br><br>



</div>
</td>
</tr>
</table>
	


<?php
 }
	
	 else if($cid == '102')
 {
	  
		 $sqlb=mysqli_query($con,"select * from bachelorsubjecttaken where formid='$formid'");
	 $bs=mysqli_fetch_array($sqlb);
 ?>
<table style="width:100%;">
    <tr>
        <td>
	
<div class="" >

<label >Compulsory (AECC)<span style="color: red">*</span> </label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="compul" placeholder="" value="<?php echo $bs['compulsory']; ?>" readonly><br><br>
<label >Generic  <span style="color: red">*</span></label><br><br>
<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="Enter Generic subject" value="<?php echo $bs['generic']; ?>" required><br><br>




</div>
</td>
<td>
<div class="">
	<label >Mil (AECC)<span style="color: red">*</span></label><br><br>
	<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="" value="<?php echo $bs['mil']; ?>" required><br><br>
<label >Core (Honours/ Major)<span style="color: red">*</span></label><br><br>
	<input type="text" class="w3-input w3-border" style="width:90%;" name="generic" placeholder="" value="<?php echo $bs['core'] ?>" required><br><br>



</div>
</td>
</tr>
</table>

<?php
 }
 }
 
$sql=mysqli_query($con,"select * from documents where formid='$formid'");
$n=mysqli_num_rows($sql);
$r=mysqli_fetch_array($sql);

?>




<center>Declaration</center>
<center><p style="text-alignment:justify">The information furnished above is true to the best of my knowledge and belief.  Any discrepancy whatsoever will be at the cost of my own personal integrity. I shall abide by the rules and regulations of the College and I shall not indulge in any unethical activities such as ragging, damaging college properties etc.</p>
 </center>
 <div>
<span style="text-alignment:left; float:left" >
Date:<br>
Place:
</span>
<span class="w3-right">
    <img src="<?php echo $r['signature'] ?>" style="width:150px; padding-right:10%;">
    
</span>
</div>

<br><br><br><br><br><br>
<center>For Office Use</center>
<center><p style="text-alignment:justify">The above information filled up and documents uploaded by the applicants are verified and no discrepancy is found.</p>
</center>
<br><br>
<span style="text-alignment:left; float:left" >
Date:<br>
Place:

</span>								
<span class="w3-right">
Signature of the Verifier 
</span>


<?php 

}
?>
</div>
</div>


</body>
</html>