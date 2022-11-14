<?php
include 'connect.php';

	


if(isset($_POST['submit']))
{
	$name	=	$_POST['name'];
	$dob	=	$_POST['dob'];
	$gender	=	$_POST['gender'];
	$pass	=	$_POST['password'];
	$email	=	$_POST['email'];
	$phone	=	$_POST['phone'];
}
$sql1=mysqli_query($con,"select * from studentregister where email='$email'");
$n=mysqli_num_rows($sql1);
if($n > 0)
{
header('location:signup.php?mailtaken=1');
}

else
{
$sql2=mysqli_query($con,"select * from otp where email='$phone'");
$n2=mysqli_num_rows($sql2);
if($n2 > 0)
{
	header('location:signup.php?phone=1');
}



else{
$sql="insert into studentregister values(null,'$name','$dob','$gender','$phone','$email','$pass','NOTVERIFIED','NOTSELECTED')";
$result=mysqli_query($con,$sql);
if($result)
{	
	$otp=rand(1000,9999);
	
	include "connect.php";
	require 'Phpmailer/PHPMailerAutoload.php';
	
	
	
	$msgg="Your OTP For Verification Is $otp";
	 
	
	
	
		$mail = new PHPMailer();
	
		$mail->isSMTP();
		$mail->SMTPAuth = true;
	
		$mail->SMTPSecure = 'TLS';
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587;
		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Username = "assamagriculturaluniversity03@gmail.com";
		$mail->Password = 'jhdxttwvsribejfn';
		$mail->setFrom('assamagriculturaluniversity03@gmail.com', 'agri account system');
	
		$mail->Subject = "Verification Message";
		$mail->Body = $msgg;
		$mail->AddAddress($email);
		$mail->addReplyTo('assamagriculturaluniversity03@gmail.com', 'Information');
	
		if (!$mail->Send()) {
			echo $mail->ErrorInfo;
		} 
		else
		{		   
			$sql=mysqli_query($con,"insert into otp values('$email','$otp')");
			header('location:verify.php?register=1');
		}
		 
	   
         
       
            
        
	// $result="";
	// require 'Phpmailer/PHPMailerAutoload.php';
	
	// $mail= new PHPMailer;
        
    
        
  

    
	
	
	// $mail->Host='smtp.gmail.com';
	// $mail->port=587;
	// $mail->SMTPAuth = true;
	// $mail->SMTPSecure='tls';
	// $mail->Username='amguricollege01@gmail.com';
	// $mail->Password='amguri123@';
	
	// $mail->setFrom('amguricollege01@gmail.com','Amguri College');
	// $mail->AddAddress($_POST['email']);

	
	// $mail->isHTML(true);
	// $mail->Subject='Amguri College Verification OTP';
	// $mail->Body='Your Verification OTP For Amguri College Is '.$otp;
	
	// if(!$mail->send())
	// {
	// 	$result=  'Mail error: '.$mail->ErrorInfo;
	// 	echo $result;
			
	// }
	// else{
	// 	$sql=mysqli_query($con,"insert into otp values('$phone','$otp')");
	// 	header('location:verify.php?register=1');
	// }
	
}
else
{
	header('location:signup.php?error=1');
}

}
}
?>