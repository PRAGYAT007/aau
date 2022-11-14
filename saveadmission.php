<?php               
   include 'connect.php';
   if(isset($_POST['submit']))
   {             
                
                $sname=mysqli_real_escape_string($con,$_POST['sname']);
                $sid=$_POST['sid'];
                $courseid=$_POST['courseid'];
                $meritstatus=$_POST['meritstatus'];
                

                if (empty($_FILES['undertaking']['name']))
                {
                    $undertaking='';
                }
                else
                {
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["undertaking"]["name"]);

                $fileData = pathinfo(basename($_FILES["undertaking"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["undertaking"]["tmp_name"], $target_path);

                $undertaking="documents/" . $fileName;
                }


                

                $formid=$_POST['formid'];
                $sql1=mysqli_query($con,"insert into undertaking_challan values('$formid','$undertaking')");

                $sql2=mysqli_query($con,"insert into meritlist values('$formid', '$courseid', '$sid', '$sname', '$meritstatus' , NULL, NULL,NULL)");

                if($sql2)
                {
                    header("location:downloadadmissionconfirm.php?formid=$formid");
                }
   }
                
?>