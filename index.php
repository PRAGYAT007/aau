<?php include 'nav.php';?>



<div class="w3-row-padding " style="max-width: 100%;">
<div class="w3-fourth w3-content" style="float: left;">
<div class="w3-content" style=" font-family:roboto; margin-top:10px">
	<img src="images/bgimg1.jpg" style="width:100%;">
        <div class="w3-half">
  <h1 style="border-bottom: 4px solid green"><b> Assam Agricultural University </b></h1></div>
  <br><br><br><br><br><br><br>
        
        
         <p  style="text-indent: 40px;  margin-left: 5%; margin-right: 5%">Assam Agricultural University is the first institution of its kind in the whole of North-Eastern
          Region of India. The main goal of this institution is to produce globally competitive human resources in farm sectorand to carry out research in both conventional 
          and frontier areas for production optimization as well as to disseminate the generated technologies as public good for benefitting the food growers/produces and 
          traders involved in the sector while emphasizing on sustainability, equity and overall food security at household level. 
    <br>
    Assam Agricultural University (AAU) is an agricultural education state university which was established on 1 April 1969 in Jorhat in the state of Assam, India. 
    The jurisdiction of the university extends to the entire State of Assam with regard to teaching, research and extension education in the field of agriculture and allied sciences. The university has a number of campuses with its headquarters at Borbheta, Jorhat. 
    </p>
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
