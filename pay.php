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

$cartid=$_POST["formid"];
$amount=$_POST["amount"];
$email=$_POST["email"];
$reason='Application Form Fees';
$name=$_POST["name"];

$phone=$_POST["phone"];

$date=date("Y-m-d");
$_SESSION['formid']=$cartid;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:db9b64340618fb08e947cded4f588d76",
                  "X-Auth-Token:0a9aaa54f76a11e558f11ca0defa0d7d"));

$payload = Array(
		'purpose' => $reason,
		'amount' => $amount,
		'phone' => $phone,
		'buyer_name' => $name,
		'redirect_url' => 'http://admissionamguricollege.in/post.php',
		'send_email' => true,
		'webhook' => 'http://admissionamguricollege.in/post.php',
		'send_sms' => true,
		'email' => $email,
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