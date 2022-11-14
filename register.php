<?php include 'nav.php' ?>
<?php
   if(isset($_SESSION['uname']))
      {
        header("location:index.php?notallow=1");
      ?>
  <?php

}  ?>
<link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
	<div class="w3-row-padding">
		<div class=" w3-half w3-col w3-container" style="margin-top: 1%; margin-bottom: 1%;">
			<form class="w3-container" action="saveregister.php"  method="post"  >
			
		<b><h2 class="w3-round" style="color: blue; text-shadow: 2px 2px black; border-bottom: 4px solid orange;"><b> REGISTRATION FORM 
	 </b></h2><br></b>
	 <p class="w3-text-red">*Please fill up the form to connecting us.</p>
		<label class=" w3-left" style="color: blue; "><b> Name : </b></label>
		<input class="w3-input w3-border" name="name" type="text" placeholder="Name" required=""><br>
		<label class=" w3-left" style="color: blue; "><b> Email : </b></label>
		<input class="w3-input w3-border" name="email" type="email" placeholder="Email" required=""><br>
		<label class=" w3-left"  style="color: blue;"><b> Phone no : </b></label>
		<input class="w3-input w3-border" name="phone" type="tell" placeholder="9999999999" maxlength="10" required=""><br>
		<label  style="color: blue;">D.O.B:</label>
		<input class="w3-input w3-border" type="text" name="dob" required="" id="datepicker"><br>
		<label class="" style="color: blue;"><b> Gender :</b></label>
		<input type="radio"  name="gender" class="w3-radio" value="male">
        <label class="" style="color: blue;"><b> Male</b></label>
        <input type="radio" class="w3-radio" name="gender" value="female">
        <label  class="" style="color: blue;"><b> Female</b></label>
        <input type="radio" class="w3-radio"  name="gender" value="other">
        <label  class="" style="color: blue;"><b> Other</b></label><br><br>
        <label class="w3-left" style="color: blue;"><b> Address : </b></label>
		<textarea class="w3-input w3-border " name="address" placeholder="Address" required=""></textarea><br>
        <label class=" w3-left" style="color: blue; "><b> Password : </b></label>
        <input class="w3-password w3-input w3-border" type="Password" name="password" maxlength="8" placeholder="Password must be in 8 char or num" required=""><br>
        
        <input class="w3-btn w3-round w3-blue" type="submit"  value="Register">
			</form>
		</div>
			<div class=" w3-rest w3-half w3-container" style="margin-top: 6%;">
			<img src="images/aau1.jpg" style="width: 100%;">
				<img src="images/index2.jpg" style="width: 100%;">
				<img src="images/aau1.jpg" style="width: 100%;">
			</div>
	</div>
	<script src="jquery-3.6.0.min.js"></script>
	<script src="jquery-ui.min.js"></script>
<script>
	$(document).ready(function(){
      $('#datepicker').datepicker({
        dateFormat: "dd-mm-yy",
        changeMonth: true,
        changeYear: true
      });

  }) 
	

</script>
	<?php include 'footer.php' ?>

</body>
</html>