<?php 
   session_start();

   include("connect.php");
   
 
    if (isset($_POST['submit']))
    {
    	$mail=$_POST['mail'];
    	$otp=$_POST['otp'];
    	$pwd="";
    	$sql= "SELECT * FROM otp WHERE  email ='$mail'";
    	$result=mysqli_query($con,$sql);
        $row=mysqli_num_rows($result);
    	if($row==0)
    	{
          header("location:verify.php?emailerror=1");
          return;
           
    	}
		
    	else {
			while($r=mysqli_fetch_array($result))
			{
				$pwd=$r[1];
				
				
			}
			if($otp==$pwd)
			{
				$sql=mysqli_query($con,"update studentregister set verify='VERIFIED'");
				if($sql)
				{
					header('location:login.php?logsuccess=1');
				}
			}
            
		 else{
			 header("location:verify.php?otperror=1");
	              
               }
    		                                      
    	    }
			}
			
?>