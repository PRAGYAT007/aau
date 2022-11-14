<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Amguri College Admission Portal</title>
      <link href="css/w3.css" type="text/css" rel="stylesheet">
      <link href="https://codepen.io/nzbin/pen/ypVLXR.css" type="text/css" rel="stylesheet">
      <link href="css/button.css" type="text/css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Literata&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
      <script src="https://codepen.io/nzbin/pen/ypVLXR.js" type="text/javascript"></script>


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

<style>
.magnify-header .magnify-toolbar {
  background-color: rgba(0, 0, 0, .5);
}
.magnify-stage {
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-width: 0;
}
.magnify-footer{
  bottom:10px;
}
.magnify-footer .magnify-toolbar {
  background-color: rgba(0, 0, 0, .5);
  border-radius: 5px;
}
.magnify-loader{
  background-color: transparent;
}
.magnify-header,.magnify-footer{
  pointer-events: none;
}
.magnify-button{
  pointer-events: auto;
}

/* ---------------------------------
   Example Styles 
   --------------------------------- */
html,body{
  min-height:100%;
}
.image-set{
  margin-left:-5px;
  margin-right:-5px;
}
.image-set img{
  display:block;
}
.image-set a{
  display:inline-block;
  margin-left:5px;
  margin-right:5px;
  padding:2px;
  border:1px solid #ddd;
  transition:border-color .3s ease;
}
.image-set a:hover{
  border-color:#aaa;
}
</style>


<body style="  ">

<?php 

 include 'topbar.php';
  	
 
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
<center><h3><strong>THE AMGURI COLLEGE : AMGURI </strong></h3></center>

<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>APPLICATION FORM.(Documents.)</h3></center>
</div>
<div class="w3-container " style="  margin-left:4.5%; margin-top:2%; padding-left:8%; padding-right:8%; padding-bottom:5%">
<br>
<?php
include 'connect.php';
$formid=$_GET['formid'];
$sql=mysqli_query($con,"select * from documents where formid='$formid'");
$n=mysqli_num_rows($sql);
if($n>0)
{
$row=mysqli_fetch_array($sql);
?>
<center><h5 style="color:red;"> <strong>Applicant Photo :</strong> 
</h5>

<div class="image-set">
<a data-magnify="gallery" href="<?php echo $row['photo'] ?>">
        <img src="<?php echo $row['photo'] ?>" style="width:150px; height:170px" alt="">
    </a></div><br><br>
<h5 style="color:red;"><strong> Applicant Signature :</strong> </h5>
<div class="image-set">
<a data-magnify="gallery" href="<?php echo $row['signature'] ?>">
        <img src="<?php echo $row['signature'] ?>" style="width:150px; height:60px" alt="">
    </a></div></center>

  <br><br><br>
<div class="w3-row-padding">
<div class="w3-half">
	<h5 style="color:red;"> <strong>Caste Certificate :</strong> </h5>
    <div class="image-set">
<a data-magnify="gallery" href="<?php echo $row['caste'] ?>">
        <img src="<?php echo $row['caste'] ?>" style="width:300px; height:150px" alt="">
    </a></div>
</div>
<div class="w3-half">
	<h5 style="color:red;"> <strong>Marksheet Of Last Examination Passed :</strong> </h5><div class="image-set">
<a data-magnify="gallery" href="<?php echo $row['marksheet'] ?>">
        <img src="<?php echo $row['marksheet'] ?>" style="width:300px; height:150px" alt="">
    </a></div>


</div>
</div>


<?php } else{?>
<form action="saveformstep3.php" method="POST" enctype="multipart/form-data">



<label >Last Examination Passed Marksheet <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) </h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="mark" placeholder="Enter Passing Year." required><br>
<label >Caste Certificate <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) </h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="caste" placeholder="Enter Name Of Instituition." required><br>
<label >Photo <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format and Background blue.) </h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="photo" placeholder="Division secured." required><br>

<label >Signature <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) </h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="sig" placeholder="Division secured." required><br>
<br><br>
<h6 style="color:red">BPL Category (Documents To Be Attached. ) *</h6>
<br>
<label >Income Certificate <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) </h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="income" placeholder="Enter Passing Year." required><br>
<label >A Photo Of Planting a Tree. <h7 style="color:red">  ( File Should Be in JPEG/JPG/PNG Format.) </h7>: *</label><br><br>
<input type="file" class="w3-input w3-border" style="width:95%;" name="treephoto" placeholder="Enter Name Of Instituition." required><br><br>
<div style="border-bottom:3px dashed gray; width:95%; " ></div>
<?php
$formid=$_GET['formid'];

?>
<input type="hidden" name="formid" value=" <?php echo $formid; ?>">
<br><br>

<input type="submit" value=">> Save & Proceed" class="w3-btn w3-green w3-medium" name="submit" style="font-family:roboto;" onclick="return confirm('Do you really want to save this record?');">
<br><br><br>
</div>
</form>

<?php } ?>
</div>
</div>

</div>
<?php include 'footer.php' ;?>
</body>

<script>
/*
 * ---------------------------------
 * jquery.magnify.js
 * https://github.com/nzbin/magnify
 * ---------------------------------
 */

$('[data-magnify]').magnify({
  resizable: false,
  headToolbar: [
    'close'
  ],
  initMaximized: true
})

</script>
</html>



