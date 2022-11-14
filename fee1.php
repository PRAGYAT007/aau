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
        		url: "getid.php?prog="+g,
				type: "GET",
				cache: false,
				success: function(grade) {
				$("#ssid").val(grade);   
				              
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


<?php include 'anav2.php';
;
		?>
<body style=" background-image:url(images/ef4656ed.png); " onload="document.getElementById('id01').style.display='block'" style=" background-image:url(images/ef4656ed.png); ">
    <div class="w3-container">


<!--<div id="id01" class="w3-modal">-->
<!-- <div class="w3-modal-content w3-card-4 w3-animate-zoom">-->
<!--  <header class="w3-container w3-blue"> -->
<!--   <span onclick="document.getElementById('id01').style.display='none'" -->
<!--   class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>-->
<!--   <h2>Amguri College</h2>-->
<!--  </header>-->

  

<!--  <div id="London" class="w3-container city ">-->
<!--   <h1 class="w3-animate-fading w3-text-red"><b>IMPORTANT ADMISSION NOTICE</b></h1>-->
<!--   <p class="w3-text-orange"><b> **Steps to confirm your admission into Amguri College for Degree Course (If you are selected in the provisional meritlist) : </b></p>-->
<!--   <p class="w3-text-indigo">-->
<!--   		<ol type="1">-->
<!--   		    <li>Head over to <b>DASHBOARD</b> section from the menu bar / navigation bar.</li>-->
<!--   			<li>Click on the "<b>Confirm Admission</b>" button next to the course you've been selected in the merit list.</li>-->
<!--   			<li>Choose your preference for the selected course (1st,2nd or 3rd for B.A Candidates only).</li>-->
<!--   			<li>Enter the UniqueID generated from Directorate of Higher Education Website</li>-->
<!--   			<li>Upload the following documents - <ul type="disc">-->
<!--   				<li>UniqueID Acknowledgement Slip <h7 style="color:red">(Mandatory)</h7></li>-->
<!--   				<li>Undertaking <h7 style="color:red"> (For B.A Candidates Only)</h7></li>-->
<!--   				<li>Challan Receipt Copy <h7 style="color:red"> (For B.Com Candidates Only)</h7></li>-->
<!--   				<li>Gap Certificate (Only if required)</li>-->
<!--   				<li>Caste Certificate (Only if required)</li>-->
<!--   			</ul>-->
<!--   		</ol>-->
<!--   </p>-->
<!--   <h3 class="w3-text-red">Important Points to be Noted -</h3>-->
<!--   <p class="w3-text-indigo"><ol type="1"><li> Simply clicking on the "Confirm" button does not guarantee obtainment of a seat.</li> -->

<!--   <p class="w3-text-red">**Any discrepancy found in the uploaded documents may result in the cancellation of your Admission !!</p>-->
<!--  </div>-->

<!--  <div class="w3-container w3-light-grey w3-padding">-->
<!--   <button class="w3-button w3-right w3-white w3-border" -->
<!--   onclick="document.getElementById('id01').style.display='none'">Close</button>-->
<!--  </div>-->
<!-- </div>-->
<!--</div>-->

</div>

<div class="w3-container w3-content w3-row-padding" style="max-width:1200px;">
<h3>Choose Your Programme To Procced For Application.</h3>
<div class="w3-half">
<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="max-width:;;height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>Our Available Programmes.</h3></center>
</div>
<div class="w3-container" style="margin-top:2%; padding:5%; color:Slategray;">
<form action="feesave1.php" method="post"  >
<label>Programme Name <span style="color:red; font-size:13px;">(*Programme once applied cannot be modified afterwards)</span></label><br><br>
<select class="w3-input" style="border:1px solid gray;" id="prog" name="prog" required="">
<option selected disabled value="">--Choose a Programme--</option>
<?php include 'connect.php'; 

$sql=mysqli_query($con,"select * from  courses");
while($row=mysqli_fetch_array($sql))
{
?>
<option  value="<?php echo $row[0]; ?>"> <?php echo $row[1] ;?></option>
<?php }?> 
</select>
<br><br>
<select class="w3-input" style="border:1px solid gray;" name="caste" required="" >
<option selected disabled value="">--Choose Your Caste--</option>
<option>General</option>
<option>OBC (NCL Required)</option>
<option>MOBC</option>
<option>TGL</option>

<option>ST</option>
<option>SC</option>
<option>Under General</option>
<option>Other</option>
</select>
<br><br>




<input type="submit" class="w3-btn w3-medium w3-green w3-text-white" value=">> Apply & Continue" style="font-family:roboto;" name="submit" onclick="return confirm('Do you really want to Proceed with this Course?');">
</form>
</div>
</div>


</div>
<div class="w3-half">
<div style="border-bottom:solid #090 4px;"></div>
<div class=" w3-content w3-card-4" style="max-width:;;height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>Programme Fee Details.</h3></center>
</div>
<div class="w3-container" style="margin-top:2%; padding:5%; color:Slategray;">

<br><br>
<div class="w3-border-top"></div><br>
<h7 >Programme Code : </h7> <input type="text" value="" id="code" readonly style="margin-left:5%; float:right; border:none;">
<br><br><div class="w3-border-top"></div><br>
<h7 >Programme Name : </h7> <input type="text" value="" id="pname" readonly style="margin-left:5%;float:right; border:none;">
<br><br><div class="w3-border-top"></div><br>
<h7 >Normal Fee :  (Rs.)    </h7> <input type="text" value="" id="fee" readonly style="margin-left:5%;float:right; border:none;">
<br><br><div class="w3-border-top"></div><br>
<h7 >St / Sc :  (Rs.)       </h7> <input type="text" value="" id="sfee" readonly style="margin-left:5%;float:right; border:none;">
</div>
</div>
</div>
</div>


<?php include 'footer.php' ?>
</body>
</html>
