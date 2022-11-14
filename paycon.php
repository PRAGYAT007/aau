<?php
session_start();
include "connect.php";

//$pmode=$_POST["pmode"];




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Amguri College Admission Portal</title>
<link href="css/w3.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body{
		font-family: 'Montserrat', sans-serif;
	}
</style>
</head>
<body>
	<p align="center" style="margin-top:128px;">
    	<img src="images/load.gif" style="width:10%;"><br>
        Redirecting to payment gateway<br><br>
        Please donot refresh the page or click the 'back' button or 'close' button
    </p>
</body>
</html>
<?php

$amount=$_POST['amt'];
$_SESSION["amount"]=$_POST["amt"];

$address=$_POST["add"];
$_SESSION["add"]=$_POST["add"];

$reason='Alumni Donation Fees';
$name=$_POST["name"];
$_SESSION["name"]=$_POST["name"];

$phone=$_POST["phone"];
$_SESSION["phone"]=$_POST["phone"];

$batch=$_POST["batch"];
$_SESSION["batch"]=$_POST["batch"];

$date=date("Y-m-d");


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:521269ef9c632cf16e0133ea0d1584c3",
                  "X-Auth-Token:405893ff2ef40182d1ab25a73fb1583b"));

$payload = Array(
		'purpose' => $reason,
		'amount' => $amount,
		'phone' => $phone,
		'buyer_name' => $name,
		'redirect_url' => 'http://ahdhs.in/postcon.php',
		'send_email' => true,
		'webhook' => 'http://ahdhs.in/postcon.php',
		'send_sms' => true,
		'email' => 'dipankarneog64@gmail.com',
		'allow_repeated_payments' => false
	);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 


$payment=json_decode($response,true);
if($payment['success']==true)
{
    echo "success";
    $successdata=$payment['payment_request'];
	$payurl=$successdata['longurl'];
	
	//header("location:".$payurl);

	echo "<script>location='".$successdata['longurl']."'</script>";
}
else
{
    echo "Failed to Procced....";
}

?>