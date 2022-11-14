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

<body style="  ">
<form class="w3-container" action="studentstep2save.php"  method="post"  enctype="multipart/form-data" >
<?php include 'anav2.php';
 
 include 'connect.php';
		$sid=$_SESSION['sid'];
		$sql=mysqli_query($con,"select * from student where id='$sid'");
		$row=mysqli_fetch_array($sql);
		
		?>
<div class=" w3-content w3-card-4" style="height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>STUDENT FORM.</h3></center>
</div>
<div class="w3-container " style="  margin-left:4.5%; margin-top:2%; ">



		<b><h2 class="w3-round" style="color: blue; text-shadow: 1px 1px black; border-bottom: 4px solid orange;"><b> Student Profile
	 </b></h2><br></b>
     <div class="w3-half" >
	 <label class=" w3-left" style="color: blue; "><b> Roll No : </b></label>
		<input class="w3-input w3-border" name="stid" readonly type="text" placeholder="Profile " required="" value="<?php echo $row['id']; ?>"><br>
		<label class=" w3-left" style="color: blue; "><b> Name : </b></label>
		<input class="w3-input w3-border" name="name" readonly type="text" placeholder="Name" required="" value="<?php echo $row['name']; ?>"><br>
		<label class=" w3-left"  style="color: blue;"><b> Mother"s Name : </b></label>
		<input class="w3-input w3-border" name="mname" type="text" placeholder="mother" required=""><br>
        <label class=" w3-left" style="color: blue; "><b> Semester : </b></label>
		<input class="w3-input w3-border" name="semester" readonly type="text" placeholder="Sem " required="" value="<?php echo $row['semester']; ?>"><br>
		<label class=" w3-left" style="color: blue; "><b> Gender: </b></label>
		<input class="w3-input w3-border" name="gender" readonly type="text" placeholder="gender" required="" value="<?php echo $row['gender'];?>"><br>
        <label class=" w3-left"  style="color: blue;"><b> Blood Group : </b></label>
		<input class="w3-input w3-border" name="blood" type="text" placeholder="blood" required=""><br>
        <label class=" w3-left" style="color: blue; "><b> Email : </b></label>
		<input class="w3-input w3-border" name="email" readonly type="email" placeholder="Email" required="" value="<?php echo $row['email'];?>"><br>
		<label class=" w3-left"  style="color: blue;"><b> Phone no : </b></label>
		<input class="w3-input w3-border" name="phone" readonly type="tell" placeholder="9999999999" maxlength="10" required="" value="<?php echo $row['phone'];?>"><br>
        <label class=" w3-left" style="color: blue; "><b>  Student Photo : </b></label>
		<input class="w3-input w3-border" name="img1" type="file" placeholder="Add Image" required="">
    </div>
        <div class="w3-half" >
		<label class=" w3-left"  style="color: blue;"><b> Year Enrolled: </b></label>
		<input class="w3-input w3-border" name="year" type="text" placeholder="year" required=""><br>	
		<label class=" w3-left"  style="color: blue;"><b> Fathers Name : </b></label>
		<input class="w3-input w3-border" name="fname" type="text" placeholder="name" required=""><br>
        <label class=" w3-left" style="color: blue; "><b> Date of Birth: </b></label>
		<input class="w3-input w3-border" name="dob" readonly type="text" placeholder="yyyy-mm-dd" required="" value="<?php echo $row['dob'];?>"><br>
		<label class=" w3-left"  style="color: blue;"><b> Address: </b></label>
		<input class="w3-input w3-border" name="addr" type="text" placeholder="address" required=""><br>
        <label class=" w3-left"  style="color: blue;"><b> Post Office: </b></label>
		<input class="w3-input w3-border" name="po" type="text" placeholder="po" required=""><br>
        <label class=" w3-left"  style="color: blue;"><b> PIN: </b></label>
		<input class="w3-input w3-border" name="pin" type="text" placeholder="pin" required=""><br>
        <label class=" w3-left"  style="color: blue;"><b> Alternate Phone No </b></label>
		<input class="w3-input w3-border" name="altph" type="text" placeholder="ph" required=""><br>
        <label class=" w3-left"  style="color: blue;"><b> Police Station: </b></label>
		<input class="w3-input w3-border" name="ps" type="text" placeholder="ps" required=""><br>
        </div>
        </div>
        <center>
        <br><br>
        
		<input class="w3-btn w3-round w3-blue"  type="submit" value="SUBMIT"><br>
	</form>
	



<?php include 'footer.php' ?>
<script type="text/javascript">
	function calculate()
	{
	var a = document.getElementById('km').value;
var b = document.getElementById('pfix').value; 
document.getElementById('price').value=parseInt(a) * parseInt(b);
 
	}
</script>