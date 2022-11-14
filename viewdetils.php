<?php include 'nav.php';
include 'connect.php'; ?>
<body>
      
     <h3> DETAILED INFORMATION OF FACULITY </h3>

 	<div class=" w3-row-padding" style="height:100%; width: 100%; margin-top: 0%; background: whitesmoke; overflow: scroll;">
 		<?php  
        $id = $_GET["id"];
$a=mysqli_query($con,"select * from teacher where id= '$id'");
($r=mysqli_fetch_array($a))
 ?>
            
             <center>
 <div class="w3-container " style="max-width: 600px; border-radius: 30px; margin-top: 1%;">
 			<div class=" w3-card w3-container w3-padding" style="background: white;">
 			
             <img src="<?php echo './documents/'.$r['img'] ?>"  style="width:250px; height: 230px;">
             <label for="id"></label>
             <h3><p><?php echo $r['name']; ?></p></h3>
        <p><b>  <?php echo $r['position'] ?></b></p>
        <p><b> Date of Joining in Service </b><?php echo $r['doj'] ?></p>
 			<p><b> </b><?php echo $r['qualification'] ?></p>
 			<p><b>contact- </b> <?php echo $r['email'] ?></p>
             
             
             <b><span class="heading-para">Eduacation Details</b></span>
             
 			<p><b> GRADUATION </b><br>  <?php echo $r['grad'] ?></p>
 			<p><b>POSTGRADUATION </b><br> <?php echo $r['master'] ?></p>
            <p><b>Ph.D</b> <br><?php echo $r['phd'] ?></p></div>
</div>
</div>
<?php

?> 		
 	</div>
	 <?php include 'footer.php' ?>
</body>
</html>