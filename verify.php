

<?php include 'nav.php';?>

<div class="w3-row-padding w3-content" style="max-width:95%;">
<div class="w3-half">
<div class=" w3-content w3-card-4" style=" height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3>Verification Process</h3></center>
</div>
<div class="w3-container" style="padding:5%; color:Slategray;">
<form action="verified.php" method="post">
<label style="color:black;font-size:13px;">Enter Your OTP. <span style="color:red; font-size:12px;">(*OTP has been send To Your given mail Address)</span></label><br><br><br>
<label> <i class='fa fa-phone' style="padding-right:10px; "></i>Enter Phone Number *</label><br>
<input type="text" class="w3-input w3-animate-input" style="width:90%;" placeholder="Enter Your Registered Phone Number" name="mail" required><br>
<label> <i class='fa fa-key' style="padding-right:10px; "></i>Enter OTP *</label><br>
<input type="text" class="w3-input w3-animate-input" style="width:90%;" placeholder="Enter Your Valid OTP" name="otp" required><br>

<center><input type="submit" value="VERIFY" style="background:steelblue; width:40%; padding:2%; border-radius:5px; " class="w3-btn w3-medium w3-text-white " name="submit">

</center>
<br>
<h7 style="color:crimson">( Already Verified )</h7>
<br><br><a href="login.php" style="background:lightseagreen; width:20%; padding:1%; border-radius:5px; " class="w3-btn w3-medium w3-text-white">Log In</a>
</form>
<!--<form >
    

        <input type="password" placeholder="Password" id="password"  required>
       
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>
        
        <button type="submit" onClick="validatePassword();">Confirm</button>
   
</form>-->


</div>
<br>
</div>
</div>
<div class="w3-half">
<div class=" w3-content w3-card-4" style="; height:auto; border-radius:10px; margin-top:2%; background:white; line-height:4vh">
<div class="" style="background:#F33; height:50px;  color:white; font-family:roboto;  padding-top:1px;">
<center><h3 class="w3-animate-fading-fast">Thing's To Remember.</h3></center>
</div>
<div class="w3-container" style="margin-top:2%; padding:5%; color:Slategray;">
<div class="w3-border-bottom"><a href="#" style="text-decoration:none"><span class="fa fa-hand-o-right" style="margin-right:5%; font-size:16px;"></span>Register Yourself To Proceed.</a></div><br>
 <div class="w3-border-bottom"><a href="#" style="text-decoration:none"><span class="fa fa-hand-o-right" style="margin-right:5%; font-size:16px;"></span>Data Given Once Cannot Be Changed.</a></div> <br>
        <div class="w3-border-bottom"><a href="#" style="text-decoration:none"><span class="fa fa-hand-o-right" style="margin-right:5%; font-size:16px;"></span>Remember Your Email And Given Password.</a></div><br>
        <div class="w3-border-bottom"><a href="#" style="text-decoration:none"><span class="fa fa-hand-o-right" style="margin-right:5%; font-size:16px;"></span>Use a Strong Password For Your Own Security.</a></div><br>
        
        <div class="w3-border-bottom"><a href="#" style="text-decoration:none"><span class="fa fa-hand-o-right" style="margin-right:5%; font-size:16px;"></span>Search Course Code</a></div><br>
        <div class="w3-border-bottom"><a href="#" style="text-decoration:none"><span class="fa fa-hand-o-right" style="margin-right:5%; font-size:16px;"></span>View Candidate Status</a></div><br>

</div>
<br><br>
</div>
</div>
</div>

</div>



<?php include 'footer.php'; ?>
</body>
</html>

<?php
if(isset($_GET['mailtaken']))
{
	echo '<script>
alert("This Email Has Been Already Taken");
</script>';

}
if(isset($_GET['otperror']))
{
	echo '<script>
alert("Invalid OTP Please Check It Correctly or Contact Site Developer");
</script>';

}

if(isset($_GET['register']))
{
	echo '<script>
alert("Registered Successfully");
</script>';

}
?>