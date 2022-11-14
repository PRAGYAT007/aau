<?php include 'nav.php';?>

<div class="w3-row-padding w3-content" style="max-width:95%">
<div class="w3-half">
<div class=" w3-content w3-card-4" style=" height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="" style="background:steelblue; height:40px;  color:white; font-family:roboto;">
<center><h3> Student Registration Form.</h3></center>
</div>
<div class="w3-container" style="padding:5%; color:Slategray;">
<form action="ssignup1.php" method="post">
<label style="color:black;font-size:13px;">Register for new Account <span style="color:red; font-size:12px;">(*Name entered during registration cannot be modified afterwards)</span></label><br><br><br>
<label> <i class='fa fa-user' style="padding-right:10px; "></i>Enter Full Name *</label><br>
<input type="text" class="w3-input w3-animate-input" style="width:90%;" placeholder="Enter Your Name" name="name" required><br>
<label>  <i class='fa fa-calendar' style="padding-right:10px;"></i> Date Of Birth *</label><br>
<input type="date" class="w3-input w3-animate-input" style="width:90%;"  name="dob" required>
<br>
<label> <i class='fa fa-users' style="padding-right:10px;"></i> Gender *</label><br>
<select class="w3-input w3-animate-input" style="width:90%;" name="gender" required>
<option selected disabled value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<br>
<label> <i class='fa fa-users' style="padding-right:10px;"></i> Semester*</label><br>
<select class="w3-input w3-animate-input" style="width:90%;" name="semester" required>
<option selected disabled value="">Select Semester</option>
<option value="1st"> 1st</option>
<option value="2nd">2nd</option>
<option value="3rd">3rd</option>
<option value="4th">4th</option>
<option value="5th">5th</option>
<option value="6th">6th</option>
</select>
<br>
<label> <i class='fa fa-key' style="padding-right:10px;"></i> New Password *</label><br>
<input type="text" class="w3-input w3-animate-input" style="width:90%;" placeholder="Enter Password" id="pass" name="password"  required><br>
<label> <i class='fa fa-key' style="padding-right:10px;"></i> Confirm Password *</label>
<br>

<input type="password" class="w3-input w3-animate-input" style="width:90%;" placeholder="Re-enter Password" id="cpass"  required>

 <span id="result2"></span><br>
 <label> <i class='fa fa-phone' style="padding-right:10px;"></i> Phone Number *</label><br>
<input type="text" class="w3-input w3-animate-input" style="width:90%;" id="phone" placeholder="Enter Your Phone Number" name="phone" required>
<span id="result1"></span><br>
 <label> <i class='fa fa-envelope' style="padding-right:10px;"></i> Enter Email *</label><br>
<input type="email" class="w3-input w3-animate-input" style="width:90%;" placeholder="xyz@gmail.com" name="email" id='email' required>
<span id="result"></span><br>
<center><input type="submit" value="REGISTER" style="background:steelblue; width:40%; padding:2%; border-radius:5px; " onclick="return confirm('Do you really Want to Save the Data')" class="w3-btn w3-medium w3-text-white " id='sub' name="submit">

</center>
<br>
<h7 style="color:crimson">( Already Recieved The OTP )</h7>
<br><br><a href="verify.php" style="background:crimson; width:200px; padding:1%; border-radius:5px; " class="w3-btn w3-medium w3-text-white">Click here To enter OTP</a><br><br>
<h7 style="color:crimson">( Already Registered )</h7>
<br><br><a href="studentlogin.php" style="background:lightseagreen; width:20%; padding:1%; border-radius:5px; " class="w3-btn w3-medium w3-text-white">Log In</a>
</form>
<!--<form >
    

        <input type="password" placeholder="Password" id="password"  required>
       
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>
        
        <button type="submit" onClick="validatePassword();">Confirm</button>
   
</form>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
	function validatePhone(phone) {
  const re1= /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
  return re1.test(phone);
}

function validatephone() {
  const $result = $("#result1");
  const phone = $("#phone").val();
  const $sub = $("#sub");

  $result.text("");

  if (validatePhone(phone)) {
    $result.text("Phone Number is valid");
    $result.css("color", "green");
     $sub.prop( "disabled", false );

  } else {
    $result.text(" Phone Number is not valid ");
    $result.css("color", "red");
     $sub.prop( "disabled", true );
  }
  return false;
}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
  const $result = $("#result");
  const email = $("#email").val();
  const $sub = $("#sub");
  $result.text("");

  if (validateEmail(email)) {
    $result.text(email + " is valid ");
    $result.css("color", "green");
    $sub.prop( "disabled", false );
  } else {
    $result.text(email + " is not valid ");
    $result.css("color", "red");
    $sub.prop( "disabled", true );
  }
  return false;
}



function validatepass() {
  const $result = $("#result2");
const pass = $("#pass").val();
const cpass = $("#cpass").val();
const $sub = $("#sub")
  
 	
  if (pass==cpass) {
    $result.text("Password Matched Successfully");
    $result.css("color", "green");
     $sub.prop( "disabled", false );

  } else {
    $result.text("Password Not Matched");
    $result.css("color", "red");
    $sub.prop( "disabled", true );
  
}
}

$("#cpass").on("input", validatepass);
$("#pass").on("input", validatepass);

$("#phone").on("input", validatephone);
$("#email").on("input", validate);
</script>

<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script>

var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");
var text;
function validatePassword() {
  if (password.value != confirm_password.value || password.value == '') {
    text = "Password Wrong";
	 
  } else {
    text = "Password Match";
	
  		}
 document.getElementById("demo").innerHTML = text;
  
}


</script>

</div>
<br>
</div>
</div>
<div class="w3-half">
<div class=" w3-content w3-card-4" style="max-width:; height:auto; border-radius:10px; margin-top:2%; background:white; line-height:4vh">
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




if(isset($_GET['register']))
{
	echo '<script>
alert("Registered Successfully");
</script>';

}
?>