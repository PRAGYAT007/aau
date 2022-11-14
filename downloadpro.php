<?php session_start();

require('constant.php');

?>
<?php include 'nav.php' ;?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
 <script>
 
    function enableBtn()
        {   
          document.getElementById("send").disabled = false;
        } 
         // $(document).ready(function (e){
    /*$("#frmContact").on('submit',(function(e){
      e.preventDefault();
      $("#mail-status").hide();
      $('#send-message').hide();
      $('#loader-icon').show();
      $.ajax({
        url: "contact.php",
        type: "POST",
        dataType:'json',
        data: {
        
        "g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()}, 

        success: function(response){
        $("#mail-status").show();
        $('#loader-icon').hide();

        if(response.type == "error") {
          $('#send-message').show();
          $("#mail-status").attr("class","error");        
        } else if(response.type == "message"){
          $('#send-message').hide();

          $("#mail-status").attr("class","success");  

        }
        $("#mail-status").html(response.text);  
        },
        error: function(){} 
      });
    }));
  });*/
  </script>


  <style>
  .label {margin: 2px 0;}
  .field {margin: 0 0 20px 0;}  
    .content {width: 960px;margin: 0 auto;}
    h1, h2 {font-family:"roboto", Times, serif;font-weight: normal;}
    div#central {margin: 40px 0px 100px 0px;}
    @media all and (min-width: 768px) and (max-width: 979px) {.content {width: 750px;}}
    @media all and (max-width: 767px) {
      body {margin: 0 auto;word-wrap:break-word}
      .content {width:auto;}
      div#central { margin: 40px 20px 100px 20px;}
    }
    body {font-family: 'roboto',sans-serif;background:#ffffff;margin: 0 auto;-webkit-font-smoothing: antialiased;  font-size: initial;line-height: 1.7em;} 
    input, textarea {width:100%;padding: 15px;font-size:1em;border: 1px solid #A1A1A1;  }
    button {
      padding: 12px 60px;
      background: #5BC6FF;
      border: none;
      color: rgb(40, 40, 40);
      font-size:1em;
      font-family: "roboto", sans-serif;
      cursor: pointer;  
    }
    #message {  padding: 0px 40px 0px 0px; }
    #mail-status {
      padding: 12px 20px;
      width: 100%;
      display:none; 
      font-size: 1em;
      font-family: "Georgia", Times, serif;
      color: rgb(40, 40, 40);
    }
    .error{background-color: #F7902D;  margin-bottom: 40px;}
    .success{background-color: #48e0a4; }
    .g-recaptcha {margin: 0 0 25px 0;}    
  </style>
  <script src='https://www.google.com/recaptcha/api.js'></script>  









<div class="w3-container" style="margin-top:1%;">
<div class=" w3-content w3-card-4" style="max-width:500px;;height:auto; border-radius:10px; margin-top:2%; background:white;">
<div class="w3-padding" style="background:steelblue; height:auto;  color:white; font-family:roboto;">
<center><h3>Download Prospectus And Form</h3></center>
</div>
<div class="w3-container" style="margin-top:2%; padding:5%; color:Slategray;">


<form action="savedownloadpro.php" method="post" enctype="multipart/form-data">
   <h5><span style="color:crimson">Payment Of Rs. 100 to be made in favour of the following account to download prospectus and form</span> <br>
    <b>PUNJAB NATIONAL BANK<br>AMGURI BRANCH<br>A/C - 0024010100099<br>IFSC - PUNB0002420 <br> A/C Name - Principal & Secretary Amguri College, Amguri</b></h5>
    <br><br>
    <label><i class="fa fa-users" style="padding-right:10px;"></i>Enter Student Name *</label><br>
<input type="text" class="w3-input w3-animate-input" style="width:90%;" placeholder="Enter Student Name" name="sname" required=""><br>

<label><i class="fa fa-users" style="padding-right:10px;"></i>Enter Email *</label><br>
<input type="email" class="w3-input w3-animate-input" style="width:90%;" placeholder="xyz@gmail.com" name="mail" required=""><br>
<label><i class="fa fa-users" style="padding-right:10px;"></i>Enter Student Phone Number *</label><br>
<input type="text" class="w3-input w3-animate-input" style="width:90%;" placeholder="Enter Student Phone Number" name="sphone" required=""><br>

<label><i class="fa fa-key" style="padding-right:10px;"></i>Upload Payment Reciept File <span style="color:red;">(Only JPG,JPEG,PNG Files Allowed)*</span></label><br>
<input type="file" accept=".jpeg,.jpg,.png" class="w3-input w3-animate-input" style="width:90%;" placeholder="" name="tfile" required="" id="file" onchange="return fileValidation()"><br>
<div class="w3-container" id="imagePreview"></div>
<div class="w3-container" style="font-size: 12px;color: green" id="size"></div>





<div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>" data-callback="enableBtn"></div>      
     
<br>
<center>
<input type="submit" style="background:#999; padding:2%; border-radius:5px; " class="w3-btn w3-medium w3-text-white w3-green" value="Download Prospectus" id="send" disabled="disabled" name="submit">

</form>
<!--<h5 style="color:crimson">( If Not Registered)</h5><a href="signup.php" style="background:crimson; width:30%; padding:2%; border-radius:5px; " class="w3-btn w3-medium w3-text-white ">Register </a><br><br>-->
<!--<a href="forgetpass.php" class="w3-text-red">Forget Password Click here..?</a>-->
</div>
</div>
</div>
</div>

<?php include 'footer.php' ?>

</html>
<script>
	function fileValidation() {
            var fileInput = 
                document.getElementById('file');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type, only JPEG,JPG and PNG is accepted!!');
                fileInput.value = '';
                return false;
            } 
            else 
            {

           const fi = document.getElementById('file');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 300) {
                    alert(
                      "File too Big, please select a file less than 300KB");
                    fileInput.value = '';
                    	return false;
                } else {
                    document.getElementById('size').innerHTML = '<b> File Size: '
                    + file + '</b> KB';
                                    if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML = 
                            '<img src="' + e.target.result
                            + '" style="width:150px; border: 2px solid #555"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }


                }
            }
        }
              
    }
}
</script>
<?php
if(isset($_GET['captcha']))
{
	echo '<script>
alert("Enter Captcha First");
</script>';

}
if(isset($_GET['passerror']))
{
	echo '<script>
alert("Wrong Password !");
</script>';

}
if(isset($_GET['erroruser']))
{
	echo '<script>
alert("Wrong Username / Email !");
</script>';

}
if(isset($_GET['pass']))
{
	echo '<script>
alert("Password has been send to your registered mobile number.");
</script>';

}

?>
