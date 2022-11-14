<?php
include 'connect.php';

	


if(isset($_POST['submit']))
{
	
	$email	=	$_POST['mail'];
	


$sql1=mysqli_query($con,"select * from studentregister where email='$email'");
$n=mysqli_num_rows($sql1);
$r=mysqli_fetch_array($sql1);
if($n > 0)
{
	$phone=$r['phone'];
	$pass=mysqli_real_escape_string($con,$r['password']);
	$curl = curl_init();
          curl_setopt_array($curl, array( 
              
          CURLOPT_URL =>"https://2factor.in/API/R1/?module=TRANS_SMS&apikey=57bf9562-a634-11ea-9fa5-0200cd936042&to=".$phone."&from=ADMINA&templatename=resetamgurip&var1=".$email."&var2=".$pass."",
          
          
       
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } 
        else 
        {
         
       
		header('location:login.php?pass=1');
            
        }
}
else
{
	header('location:forgetpass.php?mailnotfound=1');
}
}
?>                                