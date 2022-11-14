<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Links</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cute+Font" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
<?php include "admin-sidebar.php"; ?>
<div id="main" style="margin-left:230px;">
	<div class="container" style="background-color:#2A3F54">
        <div class="right right-align padding-16" style="padding-right:16px;">
           <span style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:white"><b>  Amguri College Admission Portal Admin Panel</b></span>
        </div>
    </div>

<div class="container blue">
            	<h5><strong>Important Links</strong></h5>
            </div>
            <div class="container  padding-16">
            	<?php
					include "connect.php";
					$str="Select * from link";
					$result=mysqli_query($con,$str);
					while($row=mysqli_fetch_array($result))
					{
						echo '<div class="container bottombar" style="padding-bottom:8px; padding-top:8px;">
								<div class="left" style="width:85%">
									<span class="animate-fading-fast text-red">'.$row["link"].'</span><br><span class="justify">Heading: '.$row["heading"].'</span>
								</div>
								<div class="right right-align" style="padding-top:16px;">
									<span style="float:right; margin-top:-15px"><a href="deletelink.php?id='.$row["id"].'" class="btn round-medium red">Delete</a></span>
								</div>
							</div>';
					}
				?>
            </div>
<?php
	if(isset($_GET["dellink"]))
	{
		echo "<script>alert('Link successfully deleted'); </script>";
	}
?>
</body>
</html>