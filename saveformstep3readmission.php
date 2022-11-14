<?php               
   include 'connect.php';
   if(isset($_POST['submit']))
   {             
                
                
                
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
                $file = $target_dir .basename($_FILES["signature"]["name"]);

                $fileData = pathinfo(basename($_FILES["signature"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["signature"]["tmp_name"], $target_path);

                $signature="documents/" . $fileName;
                
                
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["uniqueid"]["name"]);

                $fileData = pathinfo(basename($_FILES["uniqueid"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["uniqueid"]["tmp_name"], $target_path);

                $uniqueid="documents/" . $fileName;




                if (empty($_FILES['receipt']['name']))
                {
                    $receipt="";
                }
                else
                {
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["receipt"]["name"]);

                $fileData = pathinfo(basename($_FILES["receipt"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["receipt"]["tmp_name"], $target_path);

                $receipt="documents/" . $fileName;
                }
                
                
                
                if (empty($_FILES['comreceipt']['name']))
                {
                    $comreceipt="";
                }
                else
                {
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["comreceipt"]["name"]);

                $fileData = pathinfo(basename($_FILES["comreceipt"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["comreceipt"]["tmp_name"], $target_path);

                $comreceipt="documents/" . $fileName;
                }

                
                
                

                $formid=$_POST['formid'];
                
                $sql=mysqli_query($con,"insert into readmissiondocuments values('$formid','$photo','$signature','$uniqueid','$receipt','$comreceipt')");

                if($sql)
                {
                    header("location:paymentdetails.php?formid=$formid");
                }
   }
                
?>