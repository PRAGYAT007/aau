
<?php include 'nav.php';?>



<div class="w3-row-padding " style="max-width: 100%;">
<div class="w3-fourth w3-content" style="float: left;">
<div class="w3-content" style=" font-family:roboto; margin-top:10px">
	<div class="w3-row-padding">
	     <div class="w3-half w3-padding-16">
        	<div class="container hover-shadow w3-center w3-card-4 btn-hover color-9" style=" width: 400px; height:240px; padding:20px;">
            	<a href="merit1.php" style="text-decoration:none">
            	<i class="fa fa-external-link-square w3-xxlarge" style="margin-top:10px"></i>
            	<br><span style="font-size:30px">UDERGRADUATE MERIT LIST 2021 (Provisional)</span><br><br>
              Download / View Here<br></a>
            </div>
        </div>
	  
	  <!-- <div class="w3-half w3-padding-16" style=""> 
        	<div class="container hover-shadow w3-center w3-card-4 btn-hover color-3" style=" height:240px; padding:20px;">
            	<a href="meritlist/Waiting List (Provisional) for HS Arts Stream, 2021-2022 Session, JKM.pdf" target="_blank" style="text-decoration:none">
            	<i class="fa fa-external-link-square w3-xxlarge" style="margin-top:10px"></i>
            	<br><span style="font-size:30px">H.S ARTS WAITING LIST 2021 (Provisional)</span><br><br>
                Download / View Here<br></a>    
            </div>
        </div> -->
    
    	<div class="w3-half w3-padding-16">
        	<div class="container hover-shadow w3-center w3-card-4 btn-hover color-5" style="width: 400px; height:240px; padding:20px;">
            <a href="studentlogin.php"  style="text-decoration:none">
            	<i class="fa fa-external-link-square w3-xxlarge" style="margin-top:10px"></i>
            	<br><span style="font-size:30px">Fee Payment</span><br><br>
                Login <br></a>
            </div>
        </div>
        <div class="w3-row-padding">
        <div class="w3-half w3-padding-16" >
           <div class="container hover-shadow w3-center w3-card-4 btn-hover color-2" style=" height:240px;  padding:20px;">
            	<a href="signup.php" style="text-decoration:none">
            	<i class="fa fa-external-link-square w3-xxlarge" style="margin-top:10px"></i>
            	<br><span style="font-size:30px">New Admission 2021</span><br><br>
                Take Admission into the Required Course or Stream<br>
                </a>
            </div>
        </div>
    </div>   
    
    </div>
    
    <div class="w3-row-padding">
        
          
        
        	<div class="w3-half w3-padding-16">
        	
        </div>
        
    	
        
    </div>
    
    
    
</div>
</div>
<div class="w3-quarter" style="float: right;">
<div class="" style="margin-top:28px;">
<div class="w3-container w3-card-2" style="height:50px; background:#2995A0;color:white; ">
<h4 style="font-family:'Oswald', sans-serif;"><i class="fa fa-external-link"></i> Important Links</h4>
</div>

<div class="w3-container w3-justify" style="height:320px; background:white;  font-size:14px; padding:16px" > 
<?php include 'connect.php';
$result=mysqli_query($con,"select * from link order by id desc limit 6");
while($row=mysqli_fetch_array($result))
{
?>
        <div class="w3-border-bottom"><a href="<?php echo $row['link']?>" style="text-decoration:none;"><span class="fa fa-hand-o-right" style="margin-right:5%; font-size:16px;"></span><span style="color:#009"><strong><?php echo $row['heading'] ?></strong></span></a></div><br>
     <?php } ?> </div>
 <div class="w3-container w3-card-2" style="height:50px; background:#FF6666;color:white; margin-top:40px">
<h4 style="font-family:'Oswald', sans-serif;"><i class="fa fa-bell" aria-hidden="true"></i> Notifications</h4>
</div>
<div class="w3-container w3-justify" style="background:white;  font-size:14px; padding:16px" > 

<marquee class="marq w3-container" id="s" direction = "up" loop=""   scrolldelay="150" style="height:285px"
onMouseOver="document.getElementById('s').stop();" onMouseOut="document.getElementById('s').start();"> 
<?php
include 'connect.php';
$result=mysqli_query($con,"select * from news order by id desc");
while($row=mysqli_fetch_array($result))
{
	?>

        <div class="w3-border-bottom">Date: <?php echo $row['date'] ?> <br><span class="w3-animate-fading-fast w3-text-red"><strong><?php echo $row['heading'] ?></strong></span><br><span class="w3-justify"><?php echo $row['news'] ?></span></div> <br>
        
<?php
}
?>
</marquee>
</div>
</div>
</div></div>
<?php include 'footer.php'; ?>

 

</body>


</html>
