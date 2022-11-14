<?php               
   include 'connect.php';
   if(isset($_POST['submit']))
   {             
                
                
                
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["mark"]["name"]);

                $fileData = pathinfo(basename($_FILES["mark"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["mark"]["tmp_name"], $target_path);

                $marksheet="documents/" . $fileName;
                
                
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["caste"]["name"]);

                $fileData = pathinfo(basename($_FILES["caste"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["caste"]["tmp_name"], $target_path);

                $caste="documents/" . $fileName;
                
                
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["photo"]["name"]);

                $fileData = pathinfo(basename($_FILES["photo"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["photo"]["tmp_name"], $target_path);

                $photo="documents/" . $fileName;
                
                
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["sig"]["name"]);

                $fileData = pathinfo(basename($_FILES["sig"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["sig"]["tmp_name"], $target_path);

                $signature="documents/" . $fileName;


                if(isset($_FILES["income"]))
                {
                
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["income"]["name"]);

                $fileData = pathinfo(basename($_FILES["income"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["income"]["tmp_name"], $target_path);

                $income="documents/" . $fileName;
                }

                else
                {
                    $income="";
                }
                

                if(isset($_FILES["tree"]))
                {
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["tree"]["name"]);

                $fileData = pathinfo(basename($_FILES["tree"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["tree"]["tmp_name"], $target_path);

                $tree="documents/" . $fileName;

                }

                else
                {
                    $tree="";
                }
                
                
                
                
                 if(isset($_FILES["gap"]))
                {
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["gap"]["name"]);

                $fileData = pathinfo(basename($_FILES["gap"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["gap"]["tmp_name"], $target_path);

                $gap="documents/" . $fileName;

                }

                else
                {
                    $gap="";
                }

                $formid=$_POST['formid'];
                
                $sql=mysqli_query($con,"insert into documents values('$formid','$marksheet','$caste','$photo','$signature','$income','$tree', '$gap', NULL)");

                if($sql)
                {
                    header("location:paymentdetails.php?formid=$formid");
                }
   }
                
?>