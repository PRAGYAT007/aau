<?php include 'nav.php' ?><div class=""><div class="w3-row-padding"><center>
   
  <h1 style="border-bottom: 4px solid green"><b>   WELCOME  ALUMNI </b></h1>
  <br></center>
  <p  style="text-indent: 20px; text-align: justify;">
  <h3><b> WE ARE HAPPY TO INFORM YOU THAT WE ARE GOING TO ORGANIZE A ALUMNI MEET IN AUGUST 2022.</b><BR> </h3>
  <b><center> WE WELCOME ALL THE ALUMNI OF AGRICULTURAL ECONOMICS AND FARM MANAGEMENT TO TO JOIN US AND </center><center>HELP US TO MAKE THE EVENT SUCCESSFULL.
</center></b><p>
<div class=""><center>
  <div class="w3-display-container mySlides ">
    <img class="" src="images/agri-3.jpg" style="height: 250px; width:100%;position: bottom">
    <div class="w3-display-middle w3-large w3-container w3-text-white">
     
    </div>
  </div>
   <div class="w3-display-container mySlides w3-animate-fading">
    <img class="" src="images/aau1.jpg" style="height: 250px;width:100%">
    <div class="w3-display-middle w3-large w3-container w3-text-white">
     
</center></div>
  </div>
  <p  style="text-indent: 20px; text-align: justify;"><br>
  <center><b> YOU CAN DONATE HERE FOR THE EVENT.</b><BR>
  <a href="donetion.php" class="w3-button w3-hover-white w3-hover-text-orange"><i class="fa fa-envelope"></i>&nbsp;&nbsp;DONATE</a>
</center>

  <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000); 
}
</script>
<?php include 'footer.php'; ?>

 

</body>
