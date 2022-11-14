<?php               
   include 'connect.php';
   if(isset($_POST['submit']))
   {             
            

        $sid=$_POST['sid'];
        
        $uniqueid=mysqli_real_escape_string($con,$_POST['uniqueid']);  
        


        $check=mysqli_query($con,"select * from uniqueid where sid='$sid'");
        $n1=mysqli_num_rows($check);
        if($n1 > 0)
        {
            header('location:uniqueid.php?already=1');
        }
        else
        {

                



                $target_dir = "uniqueid/";
                $file = $target_dir .basename($_FILES["uniqueidfile"]["name"]);

                $fileData = pathinfo(basename($_FILES["uniqueidfile"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "uniqueid/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "uniqueid/". $fileName;

                }
                move_uploaded_file($_FILES["uniqueidfile"]["tmp_name"], $target_path);

                $uniqueidfile="uniqueid/" . $fileName;
                
                
       
                $sql1=mysqli_query($con,"insert into uniqueid values('$sid','$uniqueid', '$uniqueidfile')");

               

                if($sql1)
                {
                    header("location:uniqueid.php?save=1");
                }
                else
                {
                    echo mysqli_error($con);
                }
   }
       }         
?>