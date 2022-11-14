
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
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
        $("#prog").change(function() {
            var g=$(this).val();
			$.ajax({
        		url: "getprogramdetails.php?prog="+g,
				type: "GET",
				cache: false,
				success: function(grade) {
				$("#code").val(grade);
				  
				             
				}
				
			 });	 
			 
		});
    });
	
	$(document).ready(function() {
        $("#prog").change(function() {
            var g=$(this).val();
			$.ajax({
        		url: "getprogramname.php?prog="+g,
				type: "GET",
				cache: false,
				success: function(grade) {
				$("#pname").val(grade);   
				  $("#code1").val(grade);            
				}
				
			 });	 
			 
		});
    });
	$(document).ready(function() {
        $("#prog").change(function() {
            var g=$(this).val();
			$.ajax({
        		url: "getfee.php?prog="+g,
				type: "GET",
				cache: false,
				success: function(grade) {
				$("#fee").val(grade);   
				             
				}
				
			 });	 
			 
		});
    });
	$(document).ready(function() {
        $("#prog").change(function() {
            var g=$(this).val();
			$.ajax({
        		url: "getscfee.php?prog="+g,
				type: "GET",
				cache: false,
				success: function(grade) {
				$("#sfee").val(grade);   
				             
				}
				
			 });	 
			 
		});
    });
	
	
</script>
</head>

<body style=" background-image:url(images/ef4656ed.png); ">

<?php 
   session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
a{
	text-decoration:none;
}
.mobile-container {
  max-width: 480px;
  margin: auto;
  background-color: #555;
  height: 500px;
  color: white;
  border-radius: 10px;
}

.topnav {
  overflow: hidden;
  background-color:slategray;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #62A8C8;
  color: white;
  font-size : 15px;
}

body {
  
}

.glow {
  font-size:50px ;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

</style>
</head>
<body>
<div class="w3-hide-small">
<div class="w3-bar  " style="background-color:#2E97C8; font-size:12px; color:white; padding:7px;">
<center><h5>Welcome to the Online Application Portal Of Amguri College.</h5></center>
</div>
<div class="w3-container w3-white">
	<img src="images/logo_new2.png" style="float:left; width:80px; margin-top:10px; margin-bottom:10px">
    <div class="w3-container" style="float:left; font-family: 'Literata', serif;margin-top:12px; color:#666">
    <strong>
    <span style="font-size:20px">Amguri College</span><br>
    <span style="font-size:18px">Amguri, Assam. Estd: 1967</span>
    </strong>
    </div>
    <div class="w3-container" style="float:right; font-family:alice; font-size:25px; margin-top:25px; color:#333">
    	<strong>Online Admission Portal 2019-20</strong>
    </div>
</div>

<div class="w3-bar" style="color:white; background-color:#62A8C8; padding-left:10px; font-family:roboto">
	<div class="w3-dropdown-hover">
   <a href="admissionnotstarted.php"> <button class="w3-btn" style="background-color:#62A8C8; color:white">HOME</button></a>
    
    </div>
    
    
    

<div class="w3-right" style="padding-right:5%;">
<button class="w3-btn" style="background-color:#62A8C8; color:white" style="float:right;"><a href="#" style="text-decoration:none">Welcome <?php  echo  strtoupper($_SESSION['uname']); ?></a></button>
<button class="w3-btn" style="background-color:#62A8C8; color:white"><a href="logout.php" style="text-decoration:none"><i class="fa fa-sign-out"></i>Log Out</a></button>
</div> 
</div>
</div>

<?php /*?>mobile nav<?php */?>

<div class="w3-hide-large">
<div class="w3-bar w3-content" style="background-color:#2E97C8; font-size:12px; color:white; padding:7px;">
<center><h6>Welcome to the Online Application Portal Of Amguri College.</h6></center>
</div>
<div class="w3-container w3-white">
	<center>
    <img src="images/logo_new2.png" style="float:; width:80px; margin-top:10px; ">
    <div class="w3-container" style="float:;font-family: 'Literata', serif;margin-top:12px; color:#666">
    <strong>
    <span style="font-size:20px">Amguri College</span><br>
    <span style="font-size:18px">Amguri, Assam. Estd: 1967</span>
    </strong>
    </div>
   
    
    <div class="w3-container" style="; font-family:alice; font-size:25px; color:#333">
    	<strong>Online Admission Portal 2019-20</strong>
    </div>
     </center>
</div>


<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#" style="text-decoration:none" class="active">Welcome <?php  echo strtoupper($_SESSION['uname']); ?> </a>
  
  </div></div>
  <center><h1 style="font-family:roboto; color:; margin-top:5%; width:80%;" class="glow" >Admission Process Has Not Been Started Yet...</h1></center>
<div class="w3-bottom">
<?php include 'footer.php' ?>
</div>
</body>
</html>
