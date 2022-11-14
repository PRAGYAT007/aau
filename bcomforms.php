<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registered Students</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link href="css/w3.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cute+Font" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body style="background:#ECECEC">
<?php include 'admin-sidebar.php'; ?>
<div id="main" style="margin-left:230px;">
	<div class="container" style="background-color:#2A3F54">
        <div class="right right-align padding-16" style="padding-right:16px;">
           <span style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:white"><b> Amguri College Admission Portal Admin Panel</b></span>
        </div>
    </div>
    
    <span style="; font-family:roboto; font-size:25px; color:slategray;">   
        <div class="w3-container w3-padding w3-card" style="background-color:white">&nbsp;<i class="fa fa-list"></i> &nbsp;Bachelor of Commerce
        	<span style="float:right; font-size:24px">Amguri College <img src="images/logo_new2.png" style="width:60px; "></span>
        </div>
        </span>
    <div class="w3-content padding-16" style="font-family:roboto">
 <table class="w3-table-all w3-card-2" style="overflow:scroll">
    <tr class="w3-blue">
    <th>Form ID</th>
    <th>Name</th>
    <th>Course</th>
    <th>Caste</th>
    <th>Last Exam Appeared</th>
    <th>Last Exam Percentage</th>
    <th></th>
    <th></th>
    </tr>
    <?php
	include 'connect.php';
	$result=mysqli_query($con,"select * from formgenerate where coursecode = 102 and payment='PAID' and merit='NOTSELECTED' order by lpercent desc");
	while($row=mysqli_fetch_array($result))
	{
	?>
    <tr style="font-size:13px">
    <td><?php echo $row['formid'] ?></td>
    <td><?php echo $row['sname'] ?></td>
    <td><?php echo $row['cname'] ?></td>
    <td><?php echo $row['caste'] ?></td>
    <td><?php echo $row['lexam'] ?></td>
    <td><?php echo $row['lpercent'] ?> %</td>  
   <td><a href="<?php echo 'viewform1.php?formid='.$row['formid']. '&courseid='.$row['coursecode'].'' ?>" class="w3-btn w3-red w3-round-medium w3-tiny">View Details</a></td>
   <td><a href="<?php echo 'genratemeritlist.php?formid='.$row['formid']. '&courseid='.$row['coursecode'].'' ?>" class="w3-btn w3-green w3-round-medium w3-tiny">Approve</a></td>
    </tr>
    <?php
	}
	?>
    </table>
    </div>
</body>
</html>