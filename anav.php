<?php 
   session_start();
   if(!isset($_SESSION["user"]))
   {
    header("location:login.php");
   }
   
   $sid=$_SESSION["sid"];
   ?>
<!DOCTYPE html>
<html>
<head>
    <title>AAU Admission Portal</title>
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
</style>
</head>
<body>
<div class="w3-hide-small">
<div class="w3-bar  " style="background-color:#2E97C8; font-size:12px; color:white; padding:7px;">
<center><h5>Welcome to the Online Application Portal Of Assam Agriculture University.</h5></center>
</div>
<div class="w3-container w3-white">
	<img src="images/logo.png" style="float:left; width:70px; margin-top:10px; margin-bottom:10px">
    <div class="w3-container" style="float:left; font-family: 'Literata', serif;margin-top:12px; color:#666">
    <strong>
    <span style="font-size:20px">Assam Agriculture University</span><br>
    <span style="font-size:18px">Jorhat, Jorhat,  Assam</span>
    </strong>
    </div>
    <div class="w3-container" style="float:right; font-family:alice; font-size:25px; margin-top:25px; color:#333">
    	<strong>Online Admission Portal 2021-22</strong>
    </div>
</div>

<div class="w3-bar" style="color:white; background-color:#62A8C8; padding-left:10px; font-family:roboto">
	<div class="w3-dropdown-hover">
   <a href="adashboard.php"> <button class="w3-btn" style="background-color:#62A8C8; color:white">HOME</button></a>
    
    </div>
    
    <div class="w3-dropdown-hover">
    <a href="adashboard2.php"><button class="w3-btn" style="background-color:#62A8C8; color:white">DASHBOARD</button></a>
    
    </div>
    <div class="w3-dropdown-hover">
        
    <!--<a href="<?php echo 'uniqueid.php?sid='.$sid.'' ?>"><button class="w3-btn" style="background-color:#62A8C8; color:white">UNIQUE ID FOR H.S</button></a>-->
    
    </div>
    

<div class="w3-right" style="padding-right:5%;">
<button class="w3-btn" style="background-color:#62A8C8; color:white" style="float:right;"><a href="#" style="text-decoration:none">Welcome <?php  echo  strtoupper($_SESSION['uname']); ?></a></button>
<a href="logout.php" style="text-decoration:none"><button class="w3-btn" style="background-color:#62A8C8; color:white"><i class="fa fa-sign-out"></i>Log Out</button></a>
</div> 
</div>
</div>

<?php /*?>mobile nav<?php */?>

<div class="w3-hide-large">
<div class="w3-bar w3-content" style="background-color:#2E97C8; font-size:12px; color:white; padding:7px;">
<center><h6>Welcome to the Online Application Portal Of Jorhat Kendriya MAhavidyalaya.</h6></center>
</div>
<div class="w3-container w3-white">
	<center>
    <img src="images/logo.png" style="float:; width:100px; margin-top:10px; margin-bottom:10px"><br>
    <div class="w3-container" style="float:; font-family: 'Literata', serif;margin-top:12px; color:#666">
    <strong>
    <span style="font-size:20px">Jorhat kendriya Mahavidyalaya</span><br>
    <span style="font-size:18px">Jorhat, Jorhat, Kenduguri, Assam</span>
    </strong>
    
    <br><br>
    <!--<a href="<?php echo 'uniqueid.php?sid='.$sid.'' ?>" class="w3-btn w3-large w3-red w3-round-large">UNIQUE ID FOR H.S</a>-->
    </div>
   
    
    <div class="w3-container" style="; font-family:alice; font-size:25px; color:#333">
    	<strong>Online Admission Portal 2021-22</strong>
    </div>
     </center>
</div>


<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#" style="text-decoration:none" class="active">Welcome <?php  echo strtoupper($_SESSION['uname']); ?> </a>
 <a href="adashboard.php">HOME</a>
    <a href="adashboard2.php">DASHBOARD</a>
  <div id="myLinks">
    <!--<a href="adashboard.php">HOME</a>-->
    <!--<a href="adashboard2.php">DASHBOARD</a>-->
    
    <a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

</div>


</div>


</body>
</html>