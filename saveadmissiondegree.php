<?php               
   include 'connect.php';
   if(isset($_POST['submit']))
   {             
                
        $formid=$_POST['formid'];
        $sid=$_POST['sid'];
        $sname=mysqli_real_escape_string($con,$_POST['sname']);
        $phone=$_POST['phone'];
        $caste=$_POST['caste'];
        if(isset($_POST['core']))
        {
        $core=$_POST['core']; 
        }
        else
        {
        $core="";   
        }
        $courseid=$_POST['courseid'];
        $cname=$_POST['cname'];
        $year=$_POST['year'];
        $lpercent=$_POST['lpercent'];
        if(isset($_POST['preference']))
        {
        $preference=$_POST['preference']; 
        }
        else
        {
        $preference="";   
        }
        $uniqueid=mysqli_real_escape_string($con,$_POST['uniqueid']);   
        $sql=mysqli_query($con,"select * from documents where formid='$formid'");
        $row=mysqli_fetch_array($sql);  
        $check=mysqli_query($con,"select * from confirmadmission where sid='$sid' AND preference='$preference' ");
        $n1=mysqli_num_rows($check);
        if($n1 > 0)
        {
            header('location:takeadmissiondegree.php?formid='.$formid.'&courseid='.$courseid.'&preference=1');
        }
        else
        {
                

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


                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["uniqueidfile"]["name"]);

                $fileData = pathinfo(basename($_FILES["uniqueidfile"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["uniqueidfile"]["tmp_name"], $target_path);

                $uniqueidfile="documents/" . $fileName;


                if (empty($_FILES['gap']['name']))
                {
                    $gap=$row['gap'];
                }
                else
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


                if (empty($_FILES['castefile']['name']))
                {
                    $castefile=$row['caste'];
                }
                else
                {
                $target_dir = "documents/";
                $file = $target_dir .basename($_FILES["castefile"]["name"]);

                $fileData = pathinfo(basename($_FILES["castefile"]["name"]));

                $fileName = uniqid() . '.' . $fileData['extension'];
                $target_path = "documents/". $fileName;

                while (file_exists($target_path)) 
                {
                    $fileName = uniqid() . '.' . $fileData['extension'];
                     $target_path = "documents/". $fileName;

                }
                move_uploaded_file($_FILES["castefile"]["tmp_name"], $target_path);

                $castefile="documents/" . $fileName;
                }



                

                $formid=$_POST['formid'];
                $sql1=mysqli_query($con,"insert into undertaking_challan values('$formid','$undertaking')");

                $sql2=mysqli_query($con,"insert into confirmadmission values('$formid','$sid', '$sname', '$phone', '$caste', '$core', '$courseid', '$cname', '$year', '$lpercent', '$preference', '$uniqueid', '$uniqueidfile', '$undertaking', '$gap' , '$castefile',NULL )");

                $sql3=mysqli_query($con,"update documents set  gap='$gap', caste='$castefile', uniqueid='$uniqueidfile' where formid='$formid' ");

                $sql4=mysqli_query($con,"insert into uniqueiddegree values('$formid','$sid','$uniqueid','$uniqueidfile')");

                if($sql2 && $sql4)
                {
                    header("location:downloadadmissionconfirmdegree.php?formid=$formid&courseid=$courseid");
                }
                else
                {
                     echo mysqli_error($con);
                }
   } }
                
?>