<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Links</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link href="css/w3.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cute+Font" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
<?php include 'admin-sidebar.php'; ?>
<div id="main" style="margin-left:230px;">
	<div class="container" style="background-color:#2A3F54">
        <div class="right right-align padding-16" style="padding-right:16px;">
           <span style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:white"><b> Amguri College Admission Portal Admin Panel</b></span>
        </div>
    </div>
<center>
<div class="container round-large card-2" style="width:600px; margin-top:60px; background-color:#F4F4F4">
	<H2 style="font-family:roboto; color:grey; margin-top:30px; margin-bottom:70px">ADD IMPORTANT LINK</H2>
	<form  action="savelink.php" method="post">
    <input class="input border round-medium" type="text" name="link" placeholder="Enter the link URL" style="width:500px" required><br>
    <textarea placeholder="Enter heading to display" name="heading" style="width:500px; height:70" class="round-medium"></textarea><br><br>
    <input class="btn blue round-medium" type="submit" name="submit" value="Add Link" style="width:500px; margin-bottom:20px">
    </form>
</div>
</center>
<?php
	if(isset($_GET["save"]))
	{
		echo "<script>alert('Link Sucessfully Added'); </script>";
	}
?>
</body>
</html>