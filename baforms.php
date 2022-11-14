<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Amguri College Admission Portal.</title>
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
        <div class="w3-container w3-padding w3-card" style="background-color:white">&nbsp;<i class="fa fa-list"></i> &nbsp;Bachelor of Arts
        
        	<span style="float:right; font-size:24px">Amguri College <img src="images/logo_new2.png" style="width:60px; "></span>
        </div>
        </span>
        <center>
        <div class="w3-padding">
        <div class="w3-quarter">
        <form action="" method="post"><input type="number" placeholder="Enter Percentage." style="width:60%" name="percent" min="0"> <input type="submit" value="search" class="w3-yellow w3-btn w3-small"></form>
        </div>
       <div class="w3-quarter">
        <form action="" method="post"><select name="caste" style="width:60% ">
        <option selected disabled>Select-Caste</option>
        <option>General</option>
		<option>OBC (NCL Required)</option>
		<option>ST</option>
		<option>SC</option></select> <input type="submit" value="search" class="w3-yellow w3-btn w3-small"></form>
        
        </div>
        <div class="w3-quarter">
        
        <form action="" method="post">
        <select name="course" style="width:60% ">
        <option selected disabled>Select-Course</option>
        <?php
		include 'connect.php'; 
		$sql=mysqli_query($con,'select courseid,name from courses where courseid<>100 and courseid<>101 and courseid<>102');
		while($r=mysqli_fetch_array($sql))
		{
		?>
        
        
        
       
		<option value="<?php echo $r['courseid']?>"><?php echo $r['name']?></option>
        <?php } ?>
        </select> <input type="submit" value="search" class="w3-yellow w3-btn w3-small"></form>
        
        </div>
        <div class="w3-quarter">
        <form action="" method="post"><input type="number" placeholder="Enter Range." style="width:60%" name="range" min="0">
        <input type="submit" value="search" class="w3-yellow w3-btn w3-small"></form>
        
        </div>
        </div>
        </center>
    <div class="w3-content padding-16" style="font-family:roboto ;overflow:scroll ; height:700px; background:white; margin-top:4%; ">
 <table class="w3-table-all w3-card-2" style="">
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
	if(isset($_POST['percent']))
	{
	$per=$_POST['percent'];
	if($per=="")
	{
		$result=mysqli_query($con,"select * from formgenerate where coursecode <> 102 and coursecode <> 101 and  coursecode <> 100 and payment='PAID' and 		merit='NOTSELECTED' order by lpercent desc");
	}
	else
	{
	$result=mysqli_query($con,"select * from formgenerate where coursecode <> 102 and coursecode <> 101 and  coursecode <> 100 and payment='PAID' and merit='NOTSELECTED' and lpercent='$per' order by lpercent desc");	
	}
	}
	
	else if(isset($_POST['caste']))
	{
	$caste=$_POST['caste'];
	if($caste=="")
	{
		$result=mysqli_query($con,"select * from formgenerate where coursecode <> 102 and coursecode <> 101 and  coursecode <> 100 and payment='PAID' and 		merit='NOTSELECTED' order by lpercent desc");
	}
	else
	{
	$result=mysqli_query($con,"select * from formgenerate where coursecode <> 102 and coursecode <> 101 and  coursecode <> 100 and payment='PAID' and merit='NOTSELECTED' and caste='$caste' order by lpercent desc");	
	}
	}

	else if(isset($_POST['course']))
	{
	$course=$_POST['course'];
	if($course=="")
	{
		$result=mysqli_query($con,"select * from formgenerate where coursecode <> 102 and coursecode <> 101 and  coursecode <> 100 and payment='PAID' and 		merit='NOTSELECTED' order by lpercent desc");
	}
	else
	{
	$result=mysqli_query($con,"select * from formgenerate where coursecode <> 102 and coursecode <> 101 and  coursecode <> 100 and payment='PAID' and merit='NOTSELECTED' and coursecode='$course' order by lpercent desc");	
	}
	}
	else if(isset($_POST['range']))
	{
	$range=$_POST['range'];
	if($range=="")
	{
		$result=mysqli_query($con,"select * from formgenerate where coursecode <> 102 and coursecode <> 101 and  coursecode <> 100 and payment='PAID' and 		merit='NOTSELECTED' order by lpercent desc");
	}
	else
	{
	$result=mysqli_query($con,"select * from formgenerate where coursecode <> 102 and coursecode <> 101 and  coursecode <> 100 and payment='PAID' and merit='NOTSELECTED' and lpercent>='$range' order by lpercent desc");	
	}
	}
	
	




else{
	$result=mysqli_query($con,"select * from formgenerate where coursecode <> 102 and coursecode <> 101 and  coursecode <> 100 and payment='PAID' and 		merit='NOTSELECTED' order by lpercent desc");
    }
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
    <td><a href="<?php echo 'viewform1.php?formid='.$row['formid'].'&courseid='.$row['coursecode'].'' ?>" class="w3-btn w3-red w3-round-medium w3-tiny">View Details</a></td>
    <td><a href="<?php echo 'genratemeritlist.php?formid='.$row['formid'].'&courseid='.$row['coursecode'].'' ?>" class="w3-btn w3-green w3-round-medium w3-tiny">Approve</a></td>
    </tr>
    <?php
	}
	?>
    </table>
    </div>
</body>
</html>