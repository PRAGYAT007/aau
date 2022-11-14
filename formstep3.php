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
<div class="container w3-content">	
<div class="wrapper">	
<div class="arrow-steps clearfix">
          <div class="step current"> <span>Student Details</span> </div>
          <div class="step current"> <span>Academic Qualification's</span> </div>
          <div class="step current"> <span>Upload Document's</span> </div>
          
			</div>
		
</div>
</div>

<div class="w3-container w3-content "  >
<center><h3><strong>ASSAM AGRICULTURE UNIVERSITY</strong></h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>APPLICATION FORM.(Upload Documents.)</h3></center>
</div>
<div class="w3-container " style="  margin-left:4.5%; margin-top:2%; ">
<h6 style="color:red"> (Documents To Be Attached. )  All Documents should be less than 300kb*</h6>
<br>
<?php
include 'connect.php';
$formid=$_GET['formid'];
$cid=$_GET['courseid'];
if ($cid == '105' || $cid == '106' || $cid == '107' || $cid == '108' || $cid == '109' || $cid == '110' || $cid == '111' || $cid == '112')
{
$sql=mysqli_query($con,"select * from readmissiondocuments where formid='$formid'");
$n=mysqli_num_rows($sql);
if($n>0)
{
$row=mysqli_fetch_array($sql);
?>
<h5 style="color:red;">Passport Size Photo : </h5> <img src="<?php echo $row['photo']?>" style="width:100px;">
<br>
<h5 style="color:red;"> Signature : </h5> <img src="<?php echo $row['signature']?>" style="width:100px;">
<br>
<h5 style="color:red;"> UniqueID Acknowledgement Slip : </h5> <img src="<?php echo $row['uniqueid']?>" style="width:30%;">
<?php 
	if($cid == '107' || $cid == '109' || $cid == '110' || $cid == '108' || $cid == '111' || $cid == '112') 
		{ ?>
			<h5 style="color:red;"> Previous Semester Admission Receipt: </h5> <img src="<?php echo $row['receipt']?>" style="width:30%;">
			<?php
			} 
			?>
<br>
<?php 
	if($cid == '106' || $cid == '111' || $cid == '112') 
		{ ?>
			<h5 style="color:red;"> Payment Receipt (Screenshot) : </h5> <img src="<?php echo $row['comreceipt']?>" style="width:30%;">
			<?php
			} 
			?>
<br><br><br>
<a href="<?php echo'paymentdetails.php?formid='.$formid.''?>" class="w3-btn w3-green w3-medium"> >> Proceed to Final Submit </a>
<br><br>
<?php 
} 
else
{
?>
<form action="saveformstep3readmission.php" method="POST" enctype="multipart/form-data">

<label >Passport Size Photo<h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) </h7>: *</label><br><br>
<input type="file" accept=".jpg, .jpeg, .png" class="w3-input w3-border" style="width:95%;" name="photo" placeholder="Enter Passing Year."  required><br>
<label >Signature <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) </h7>: *</label><br><br>
<input type="file" accept=".jpg, .jpeg, .png" class="w3-input w3-border" style="width:95%;" name="signature" required ><br>

<label >UniqueID Acknowledgement Slip <h7 style="color:red"> (File Should Be in JPEG/JPG/PNG Format.) </h7>: </label><br><br>
<input type="file" accept=".jpg, .jpeg, .png" class="w3-input w3-border" style="width:95%;" name="uniqueid"  required ><br>

<?php 
	if($cid == '107' || $cid == '109' || $cid == '110' || $cid == '108' || $cid == '111' || $cid == '112') 
		{ ?>
			<label >Previous Semester Admission Receipt <h7 style="color:red"> (File Should Be in JPEG/JPG/PNG Format.) </h7>: </label><br><br>
<input type="file" accept=".jpg, .jpeg, .png" class="w3-input w3-border" style="width:95%;" name="receipt"  required ><br>
			<?php
			}
			else
			{
			?>	<input type="hidden" name="receipt" value="">
			<?php } 
			?>
			
			<?php 
	if($cid == '106' || $cid == '111' || $cid == '112') 
		{ ?>
			<label > Payment Receipt (Screenshot) <h7 style="color:red"> (File Should Be in JPEG/JPG/PNG Format.) </h7>: </label><br><br>
<input type="file" accept=".jpg, .jpeg, .png" class="w3-input w3-border" style="width:95%;" name="comreceipt"  required ><br>
			<?php
			}
			else
			{
			?>	<input type="hidden" name="comreceipt" value="">
			<?php } 
			?>
			

<div style="border-bottom:3px dashed gray; width:95%; " ></div>

<?php

$formid=$_GET['formid'];

?>
<input type="hidden" name="formid" value="<?php echo $formid; ?>">
<input type="hidden"  name="courseid" value="<?php echo $cid; ?>" required>
<br><br>

<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</div>
</form>

<?php 
}
}
else
{
$sql=mysqli_query($con,"select * from documents where formid='$formid'");
$n=mysqli_num_rows($sql);
if($n>0)
{
$row=mysqli_fetch_array($sql);
?>
<h5 style="color:red;"> Marksheet Of Last Examination Passed : </h5> <img src="<?php echo $row['marksheet']?>" style="width:30%;">
<br>
<h5 style="color:red;"> Caste Certificate : </h5> <img src="<?php echo $row['caste']?>" style="width:100px;">
<br>
<h5 style="color:red;"> Applicant Photo : </h5> <img src="<?php echo $row['photo']?>" style="width:100px;">
<br>
<h5 style="color:red;"> Applicant Signature : </h5> <img src="<?php echo $row['signature']?>" style="width:100px;">

<br><br>
<h5 style="color:red;"> Differnetly Abled (if Applicable): </h5> <img src="<?php echo $row['treephoto']?>" style="width:100px;">
<?php
$sql2=mysqli_query($con,"select * from formgenerate where formid='$formid' and bpl like 'BPL'");
$n1=mysqli_num_rows($sql2);
if($n1>0)
{
?>
<h5 style="color:red;"> Income Certificate : </h5> <img src="<?php echo $row['income']?>" style="width:30%;">
<br>

<br>
<?php
}
?><br><br>
<a href="<?php echo'paymentdetails.php?formid='.$formid.''?>" class="w3-btn w3-green w3-medium"> >> Proceed to Final Submit </a>
<br><br>
<?php } else{?>
<form action="saveformstep3.php" method="POST" enctype="multipart/form-data">



<label >Last Examination Passed Marksheet <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) All Documents should be less than 300kb </h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="mark"  placeholder="Enter Passing Year." id="mark" onchange="return fileValidation()" required><br>
<div class="w3-container" id="imagePreview1"></div>
<div class="w3-container" style="font-size: 12px;color: green" id="size1"></div>
<label >Caste Certificate (If Required) Or Signed undertaking by parents that caste certificate will be submitted later <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) All Documents should be less than 300kb</h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="caste" placeholder="Enter Name Of Instituition." id="caste" onchange="return fileValidation1()"><br>
<div class="w3-container" id="imagePreview2"></div>
<div class="w3-container" style="font-size: 12px;color: green" id="size2"></div>
<label >Photo <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format and Background blue.) All Documents should be less than 300kb</h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="photo" placeholder="Division secured." id="photo" onchange="return fileValidation2()" required><br>
<div class="w3-container" id="imagePreview3"></div>
<div class="w3-container" style="font-size: 12px;color: green" id="size3"></div>
<label >Signature <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) All Documents should be less than 300kb</h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="sig" placeholder="Division secured." id="sig" onchange="return fileValidation3()"  required><br>
<div class="w3-container" id="imagePreview4"></div>
<div class="w3-container" style="font-size: 12px;color: green" id="size4"></div>
<label >Gap Certificate (If Required) <h7 style="color:red">  (File Should Be in JPEG/JPG/PNG Format.) All Documents should be less than 300kb</h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="gap" placeholder="Division secured." id="gap" onchange="return fileValidation4()"><br>
<div class="w3-container" id="imagePreview5"></div>
<div class="w3-container" style="font-size: 12px;color: green" id="size5"></div>
<br><br>
<h6 style="color:red">If Differently Abled(Documents To Be Attached. ) * All Documents should be less than 300kb</h6>
<br>
<label >Differently Abled Certificate. <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) </h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="tree" placeholder="Enter Name Of Instituition."  id="dable" onchange="return fileValidation6()"><br>
<div class="w3-container" id="imagePreview7"></div>
<div class="w3-container" style="font-size: 12px;color: green" id="size7"></div>
<?php
$sql2=mysqli_query($con,"select * from formgenerate where formid='$formid' and bpl like 'BPL'");
$n1=mysqli_num_rows($sql2);
if($n1>0)
{
?>
<h6 style="color:red">BPL Category (Documents To Be Attached. ) * All Documents should be less than 300kb</h6>
<br>

<label >Income Certificate (Income Certificate Should be authorized by valid Departments)<h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) </h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="income" placeholder="." id="bpl" onchange="return fileValidation5()"><br>
<div class="w3-container" id="imagePreview6"></div>
<div class="w3-container" style="font-size: 12px;color: green" id="size6"></div>


<div style="border-bottom:3px dashed gray; width:95%; " ></div>

<?php
}
$formid=$_GET['formid'];

?>
<input type="hidden" name="formid" value="<?php echo $formid; ?>">
<br><br>

<input type="submit" value=">> Submit Form" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</div>
</form>

<?php } } ?>
</div>
</div>

</div>
<?php include 'footer.php' ;?>
</body>
<script>
	function fileValidation() {
            var fileInput = 
                document.getElementById('mark');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type, only JPEG,JPG and PNG is accepted!!');
                fileInput.value = '';
                return false;
            } 
            else 
            {

           const fi = document.getElementById('mark');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 300) {
                    alert(
                      "File too Big, please select a file less than 300KB");
                    fileInput.value = '';
                    	return false;
                } else {
                    document.getElementById('size1').innerHTML = '<b> File Size: '
                    + file + '</b> KB';
                                    if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview1').innerHTML = 
                            '<img src="' + e.target.result
                            + '" style="width:150px; border: 2px solid #555"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }


                }
            }
        }
              
    }
}

	function fileValidation1() {
            var fileInput = 
                document.getElementById('caste');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type, only JPEG,JPG and PNG is accepted!!');
                fileInput.value = '';
                return false;
            } 
            else 
            {

           const fi = document.getElementById('caste');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 300) {
                    alert(
                      "File too Big, please select a file less than 300KB");
                    fileInput.value = '';
                    	return false;
                } else {
                    document.getElementById('size2').innerHTML = '<b> File Size: '
                    + file + '</b> KB';
                                    if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview2').innerHTML = 
                            '<img src="' + e.target.result
                            + '" style="width:150px; border: 2px solid #555"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }


                }
            }
        }
              
    }
}
	function fileValidation2() {
            var fileInput = 
                document.getElementById('photo');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type, only JPEG,JPG and PNG is accepted!!');
                fileInput.value = '';
                return false;
            } 
            else 
            {

           const fi = document.getElementById('photo');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 300) {
                    alert(
                      "File too Big, please select a file less than 300KB");
                    fileInput.value = '';
                    	return false;
                } else {
                    document.getElementById('size3').innerHTML = '<b> File Size: '
                    + file + '</b> KB';
                                    if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview3').innerHTML = 
                            '<img src="' + e.target.result
                            + '" style="width:150px; border: 2px solid #555"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }


                }
            }
        }
              
    }
}

	function fileValidation3() {
            var fileInput = 
                document.getElementById('sig');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type, only JPEG,JPG and PNG is accepted!!');
                fileInput.value = '';
                return false;
            } 
            else 
            {

           const fi = document.getElementById('sig');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 300) {
                    alert(
                      "File too Big, please select a file less than 300KB");
                    fileInput.value = '';
                    	return false;
                } else {
                    document.getElementById('size4').innerHTML = '<b> File Size: '
                    + file + '</b> KB';
                                    if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview4').innerHTML = 
                            '<img src="' + e.target.result
                            + '" style="width:150px; border: 2px solid #555"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }


                }
            }
        }
              
    }
}

function fileValidation4() {
            var fileInput = 
                document.getElementById('gap');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type, only JPEG,JPG and PNG is accepted!!');
                fileInput.value = '';
                return false;
            } 
            else 
            {

           const fi = document.getElementById('gap');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 300) {
                    alert(
                      "File too Big, please select a file less than 300KB");
                    fileInput.value = '';
                    	return false;
                } else {
                    document.getElementById('size5').innerHTML = '<b> File Size: '
                    + file + '</b> KB';
                                    if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview5').innerHTML = 
                            '<img src="' + e.target.result
                            + '" style="width:150px; border: 2px solid #555"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }


                }
            }
        }
              
    }
}

function fileValidation5() {
            var fileInput = 
                document.getElementById('bpl');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type, only JPEG,JPG and PNG is accepted!!');
                fileInput.value = '';
                return false;
            } 
            else 
            {

           const fi = document.getElementById('bpl');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 300) {
                    alert(
                      "File too Big, please select a file less than 300KB");
                    fileInput.value = '';
                    	return false;
                } else {
                    document.getElementById('size6').innerHTML = '<b> File Size: '
                    + file + '</b> KB';
                                    if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview6').innerHTML = 
                            '<img src="' + e.target.result
                            + '" style="width:150px; border: 2px solid #555"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }


                }
            }
        }
              
    }
}

function fileValidation6() {
            var fileInput = 
                document.getElementById('dable');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type, only JPEG,JPG and PNG is accepted!!');
                fileInput.value = '';
                return false;
            } 
            else 
            {

           const fi = document.getElementById('dable');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 300) {
                    alert(
                      "File too Big, please select a file less than 300KB");
                    fileInput.value = '';
                    	return false;
                } else {
                    document.getElementById('size7').innerHTML = '<b> File Size: '
                    + file + '</b> KB';
                                    if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview7').innerHTML = 
                            '<img src="' + e.target.result
                            + '" style="width:150px; border: 2px solid #555"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }


                }
            }
        }
              
    }
}
</script>
</html>