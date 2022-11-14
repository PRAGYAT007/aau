<?php 
   session_start();

   include("connect.php");
   
 
    if (isset($_POST['submit']))
    {
    	$mail=$_POST['mail'];
    	$pass=mysqli_escape_string($con,$_POST['pass']);
    	$pwd="";
    	$sql= "SELECT * FROM student WHERE  email ='$mail'and verify='VERIFIED' ";
    	$result=mysqli_query($con,$sql);
        $row=mysqli_num_rows($result);
    	if($row==0)
    	{
          header("location:studentlogin.php?erroruser=1");
          return;
           
    	}
		
    	else {
			while($r=mysqli_fetch_array($result))
			{
				$pwd=$r[5];
				$username=$r['name'];
				$sid=$r['id'];
			}
			if($pass==$pwd)
			{
			$_SESSION["uname"]=$username;
			$_SESSION["sid"]=$sid;
		
			$_SESSION["user"]=true;
			header("location:fee1.php?save=1");
			}
            
		 else{
			 header("location:studentlogin.php?passerror=1");
	              
               }
    		                                      
    	    }
			}
			
?>