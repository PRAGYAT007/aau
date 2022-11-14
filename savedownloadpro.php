<?php               
   include 'connect.php';
   if(isset($_POST['submit']))
   {             
                
                
                
                $target_dir = "transactionfile/";
                $file = $target_dir .basename($_FILES["tfile"]["name"]);

                $fileData = pathinfo(basename($_FILES["tfile"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "transactionfile/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "transactionfile/". $fileName;

                }
                move_uploaded_file($_FILES["tfile"]["tmp_name"], $target_path);

                $tfile="transactionfile/" . $fileName;
                
               
                $name=mysqli_escape_string($con,$_POST['sname']);
                $mail=mysqli_escape_string($con,$_POST['mail']);
                $phone=mysqli_escape_string($con,$_POST['sphone']);
                
                $dod=date('Y-m-d');
                
                $sql=mysqli_query($con,"insert into prospectusdownload values(null,'$name','$mail','$phone','$dod','$tfile')");

                if($sql)
                {
                    header("location:prodownloaded.php?save=1");
                }
                else
                {
                    echo mysqli_error($con);
                }
   }
                
?>