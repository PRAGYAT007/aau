<?php 
   session_start();

   include("connect.php");
   
 
    if (isset($_POST['submit']))
    {
    	$mail=$_POST['mail'];
    	$pass=mysqli_escape_string($con,$_POST['pass']);
    	$pwd="";
    	$sql= "SELECT * FROM register WHERE  email ='$mail' ";
    	$result=mysqli_query($con,$sql);
        $row=mysqli_num_rows($result);
    	if($row==0)
    	{
          header("location:alulogin.php?erroruser=1");
          return;
           
    	}
		
    	else {
			while($r=mysqli_fetch_array($result))
			{
				$pwd=$r[''];
				$username=$r['name'];
				$sid=$r['slno'];
			}
			if($pass==$pwd)
			{
			$_SESSION["uname"]=$username;
			$_SESSION["sid"]=$sid;
		
			$_SESSION["user"]=true;
			header("location:depeco.php?save=1");
			}
            
		 else{
			 header("location:login.php?passerror=1");
	              
               }
    		                                      
    	    }
			}
			
?>