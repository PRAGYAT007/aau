<?php include 'nav.php';
include 'connect.php';

  ?>
  <body>
      <h1>THIS IS THE DEPARTMENT OF AGRICULTURAL ECONOMICS</h1>
     <h3> STUFF OF ECONOMICS DEPARTMENT </h3>

 	<div class=" w3-row-padding" style="height:800px; width: 100%; margin-top: 0%; background: whitesmoke; overflow: scroll;">
 		<?php  
$a=mysqli_query($con,"select * from stuff");
while($r=mysqli_fetch_array($a))
{
 		?>																									
 		<div class="w3-quarter " style="border-radius: 30px; margin-top: 1%;">
 			<div class=" w3-card w3-container w3-padding" style="background: white;">
 			<center>
             <img src="<?php echo './documents/'.$r['image'] ?>"  style="width:250px; height: 150px;">
 			<p><b> </b><?php echo $r['name'] ?></p>
 			<p><b>  </b><?php echo $r['post'] ?></p>
 			<p><b> </b><?php echo $r['email'] ?></p>
 			<p><b>  </b> <?php echo $r['ph'] ?></p>	
			 
</CENTER>
 	</div>
 		</div>

<?php
}
?> 		
 	</div>
	 <?php include 'footer.php' ?>
</body>
</html>