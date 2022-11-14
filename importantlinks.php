<?php
include 'connect.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Important Links</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cute+Font" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
<body style="background-color:#ECECEC">
<?php include "admin-sidebar.php"; ?>
<div id="main" style="margin-left:230px;">
	<div class="container" style="background-color:#222D32">
        <div class="right right-align padding-16" style="padding-right:16px;">
           <span style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:white"><b> VAmguri College Admission Portal Admin Panel</b></span>
        </div>
    </div>
 <div class="row-padding" style="margin:150px auto; margin-left:-6%; font-family:roboto; margin-right:-6%; padding-left:150px">
        	<div class="half" >
            <a href="viewlinks.php" style="text-decoration:none;">
            	<div class="card btn padding-64 center blue "; style="padding-left:10%; padding-right:10%; width:400px">
                	<i class="fa fa-link xxxlarge"></i><br><br>
                    <span style="font-size:20px; margin-left:-5%">Click to View/Delete Important Links</span> &nbsp;
                    <?php
						$sql="Select count(*) from link";
						$result=mysqli_query($con,$sql);
						$row=mysqli_fetch_array($result);
						$n=$row[0];
					?>
                </div></a>
            </div>
        	<div class="half">
            	<a href="addlink.php" style="text-decoration:none;">
                <div class="card btn  padding-64  center" style="background-color:#00A65A; color:white; padding-left:15%; padding-right:15%; width:400px">
                	<i class="fa fa-plus-circle xxxlarge"></i><br><br>
                    <span style="font-size:20px; margin-left:-5%">Add New Links</span> &nbsp;
                </div></a>
            </div>
            
        </div>
    </div>
</div>   
</body>
</html>