

<?php
if(isset($_POST['submit']))
{
	$result="";
	require '../Phpmailer/PHPMailerAutoload.php';
	require '../Phpmailer/class.phpmailer.php';
	require '../Phpmailer/class.smtp.php';
	$mail= new PHPMailer;
        
    
        
  

    $mail->IsSMTP();
	
	$mail->Host='smtp.gmail.com';
	$mail->port=587;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure='tls';
	$mail->Username="dipankarneog64@gmail.com";
	$mail->Password="7002483097";
	
	$mail->setFrom($_POST['email'],$_POST['name']);
	$mail->AddAddress($_POST['email']);
	
	
	$mail->isHTML(true);
	$mail->Subject='Form Submission: '.$_POST['subject'];
	$mail->Body='New message';
	
	if(!$mail->send())
	{
		$result=  'Mail error: '.$mail->ErrorInfo;
	}
	else{
		$result="thanks";
	}
	
	
	
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form  method="post" action="mail.php">
	<div class="tblLogin">
		<h1><?php echo $result ?></h1>
		<div class="tablerow"><input type="text" name="subject" placeholder="subject" class="login-input" required>
		<div class="tablerow"><input type="text" name="name" placeholder="name" class="login-input" required>
		<div class="tablerow"><input type="email" name="email" placeholder="Email" class="login-input" required></div>
		<div class="tableheader"><input type="submit" name="submit" value="Submit" class="btnSubmit"></div>
		
	</div>
</form>
</body>
</html>
