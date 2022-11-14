<?php
include 'connect.php';
if(isset($_POST['submit']))
{	$cid=$_POST['cid'];
	$formid=$_POST['formid'];

	$exam=mysqli_real_escape_string($con,$_POST['examination']);
	$board=mysqli_real_escape_string($con,$_POST['board']);
	$roll=mysqli_real_escape_string($con,$_POST['rollno']);
	$year=mysqli_real_escape_string($con,$_POST['year']);
	$inst=mysqli_real_escape_string($con,$_POST['inst']);
	$division=mysqli_real_escape_string($con,$_POST['division']);
	
	$subn1=$_POST['subn1'];
     
    
	$subn2=mysqli_real_escape_string($con,$_POST['subn2']);
     
	$subn3=mysqli_real_escape_string($con,$_POST['subn3']);
	$subn4=mysqli_real_escape_string($con,$_POST['subn4']);
	$subn5=mysqli_real_escape_string($con,$_POST['subn5']);
	$subn6=mysqli_real_escape_string($con,$_POST['subn6']);
	$subn7=mysqli_real_escape_string($con,$_POST['subn7']);
	$subn8=$_POST['subn8'];
	$subn9=$_POST['subn9'];
	$subn10=$_POST['subn10'];
	$subn11=$_POST['subn11'];
	$subn12=$_POST['subn12'];
	$fmarks1=$_POST['fmarks1'];
	$fmarks2=$_POST['fmarks2'];
	$fmarks3=$_POST['fmarks3'];
	$fmarks4=$_POST['fmarks4'];
	$fmarks5=$_POST['fmarks5'];
	$fmarks6=$_POST['fmarks6'];
	$fmarks7=$_POST['fmarks7'];
	$fmarks8=$_POST['fmarks8'];
	$fmarks9=$_POST['fmarks9'];
	$fmarks10=$_POST['fmarks10'];
	$fmarks11=$_POST['fmarks11'];
	$fmarks12=$_POST['fmarks12'];
	$totalmark=$_POST['fullmarks'];
	
	$smarks1=$_POST['smarks1'];
	$smarks2=$_POST['smarks2'];
	$smarks3=$_POST['smarks3'];
	$smarks4=$_POST['smarks4'];
	$smarks5=$_POST['smarks5'];
	$smarks6=$_POST['smarks6'];
	$smarks7=$_POST['smarks7'];
	$smarks8=$_POST['smarks8'];
	$smarks9=$_POST['smarks9'];
	$smarks10=$_POST['smarks10'];
	$smarks11=$_POST['smarks11'];
	$smarks12=$_POST['smarks12'];
	$stotalmarks=$_POST['stotalmarks'];
	
	
	
	
	$sql=mysqli_query($con,"insert into examinationpassed values('$formid','$exam','$board','$roll','$year','$inst','$division')");
	$sql1=mysqli_query($con,"insert into markssecured values('$formid','$subn1','$fmarks1','$smarks1','$subn2','$fmarks2','$smarks2','$subn3','$fmarks3','$smarks3','$subn4','$fmarks4','$smarks4','$subn5','$fmarks5','$smarks5','$subn6','$fmarks6','$smarks6','$subn7','$fmarks7','$smarks7','$subn8','$fmarks8','$smarks8','$subn9','$fmarks9','$smarks9','$subn10','$fmarks10','$smarks10','$subn11','$fmarks11','$smarks11','$subn12','$fmarks12','$smarks12','$totalmark','$stotalmarks')");
	if($cid=='100'|| $cid=='101' || $cid=='105' || $cid=='106')
	{
			$compul=$_POST['compul'];
			$sub1=$_POST['subject1'];
			$sub2=$_POST['subject2'];
			$sub3=$_POST['subject3'];
			$sub4=$_POST['subject4'];
			$mil=$_POST['mil'];
			$sql3=mysqli_query($con,"insert into hssubjectstaken values('$formid','$compul','$sub1','$sub2','$sub3','$sub4','$mil')");
	if($sql3)
	{
		header('location:formstep3.php?formid='.$formid.'&courseid='.$cid.'');
		
	}
	
	}
 else if($cid=='103' || $cid=='102')
 {
	 $compul=$_POST['compul'];
	 $mil=$_POST['mil'];
	 $generic=mysqli_real_escape_string($con,$_POST['generic']);
	 $core1=mysqli_real_escape_string($con,$_POST['core']);
	 
	 $sql3=mysqli_query($con,"insert into bachelorsubjecttaken values('$formid','$core1','$compul','$mil','$generic')");
		if($sql3)
	{
		header('location:formstep3.php?formid='.$formid.'&courseid='.$cid.'');
		
	}	
	 else{
		 echo mysqli_error($con);
	 }
 }
  else if($cid=='104' )
 {
	  $compul=$_POST['compul'];
	 $mil=$_POST['mil'];
	 $generic="";
	 $core1="";
	 
	 $sql3=mysqli_query($con,"insert into bachelorsubjecttaken values('$formid','$core1','$compul','$mil','$generic')");
		if($sql3)
	{
		header('location:formstep3.php?formid='.$formid.'&courseid='.$cid.'');
		
	}	
	 else{
		 echo mysqli_error($con);
	 }
 }
 else if($cid == '107' || $cid == '109' || $cid == '111' || $cid == '112')
 	{
	 $core=mysqli_real_escape_string($con,$_POST['core']);
	 
	 $sql3=mysqli_query($con,"insert into thirdfifthsubjecttaken values('$formid','$core')");
		if($sql3)
	{
		header('location:formstep3.php?formid='.$formid.'&courseid='.$cid.'');
		
	}	
	 else{
		 echo mysqli_error($con);
	 }
 }
 else if($cid == '110')
 	{

		header('location:formstep3.php?formid='.$formid.'&courseid='.$cid.'');
		
     }
	
	/*else{
		$major=$_POST['major'];
	$compul=$_POST['compul'];
	$mil=$_POST['mil'];
	$core1=$_POST['core1'];
	$core2=$_POST['core2'];
	$sql3=mysqli_query($con,"insert into bachelorsubjecttaken values('$formid','$major','$compul','$mil','$core1','$core2')");
			}
	
	if($sql3)
	{
		header('location:formstep3.php?formid=$formid');
		
	}*/
	
	
	}

?>