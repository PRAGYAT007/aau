<?php 
include 'connect.php'; ?>
<body>
     <center> 
     <h1> Profile Of Student </h1>
</center>
 	<div class=" w3-row-padding" style="height: 800px; width: 100%; margin-top: 0%; background: whitesmoke; overflow: scroll;">
 		<?php  
        $id = $_GET["id"];
$a=mysqli_query($con,"select * from studentprofile where stid= '$id'");
($r=mysqli_fetch_array($a))
 ?>
            
             <center>
 <div class="w3-container " style="max-width: 600px; border-radius: 30px; margin-top: 1%;">
 			<div class=" w3-card w3-container w3-padding" style="background: white;">
 			
             <img src="<?php echo './' .$r['img1'] ?>"  style="width:250px; height: 230px;">
             <label for="id"></label>
             <h3><p><?php echo $r['name']; ?></p></h3>
        <p><b> Semister  <?php echo $r['semester'] ?></b></p>
        <p><b> Date of Enrolled </b><?php echo $r['year'] ?></p>
 			<p><b> </b><?php echo $r['phone'] ?></p>
 			<p><b>contact- </b> <?php echo $r['email'] ?></p>
             
             
             <b><span class="heading-para">Eduacation Details</b></span>
             
 			<p><b> Father Name</b><br>  <?php echo $r['fname'] ?></p>
 			<p><b>Mother Name </b><br> <?php echo $r['mname'] ?></p>
            <p><b>Address</b> <br><?php echo $r['addr'] ?></p></div>
</div>
</div>
<?php

?> 		
 	</div>
	 <?php include 'footer.php' ?>
</body>
</html>