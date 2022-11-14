<?php
include 'connect.php';
if(isset($_POST['submit']))
{	$cid=$_POST['courseid'];
	$formid=$_POST['formid'];

	$exam=mysqli_real_escape_string($con,$_POST['examination']);
	$board=mysqli_real_escape_string($con,$_POST['board']);
	$roll=mysqli_real_escape_string($con,$_POST['rollno']);
	$year=mysqli_real_escape_string($con,$_POST['year']);
	$inst=mysqli_real_escape_string($con,$_POST['inst']);
	$division=mysqli_real_escape_string($con,$_POST['division']);
	
	$subn1=mysqli_real_escape_string($con,$_POST['subn1']);
     
    
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
	
	
	
	
	$sql=mysqli_query($con,"update examinationpassed set examination='$exam',board='$board',rollno='$roll',year='$year',institution='$inst',division='$division' where formid='$formid' ");
	$sql1=mysqli_query($con,"update markssecured set s1n='$subn1',s1f='$fmarks1',s1s='$smarks1',s2n='$subn2',s2f='$fmarks2',s2s='$smarks2',s3n='$subn3',s3f='$fmarks3',s3s='$smarks3',s4n='$subn4',s4f='$fmarks4',s4s='$smarks4',s5n='$subn5',s5f='$fmarks5',s5s='$smarks5',s6n='$subn6',s6f='$fmarks6',s6s='$smarks6',s7n='$subn7',s7f='$fmarks7',s7s='$smarks7',s8n='$subn8',s8f='$fmarks8',s8s='$smarks8',s9n='$subn9',s9f='$fmarks9',s9s='$smarks9',s10n='$subn10',s10f='$fmarks10',s10s='$smarks10',s11n='$subn11',s11f='$fmarks11',s11s='$smarks11',s12n='$subn12',s12f='$fmarks12',s12s='$smarks12',totalmarks='$totalmark',securedmarks='$stotalmarks' where formid='$formid' ");
	if($cid=='100'||$cid=='101')
	{
			$compul=$_POST['compul'];
		    $sub1=mysqli_real_escape_string($con,$_POST['subject1']);
			$sub2=mysqli_real_escape_string($con,$_POST['subject2']);
			$sub3=mysqli_real_escape_string($con,$_POST['subject3']);
			$sub4=mysqli_real_escape_string($con,$_POST['subject4']);
			$mil=$_POST['mil'];
			$sql3=mysqli_query($con,"update hssubjectstaken set compul='$compul',sub1='$sub1',sub2='$sub2',sub3='$sub3',sub4='$sub4',mil='$mil' where formid='$formid' ");
	if($sql3)
	{
			header('location:formstep2.php?formid='.$formid.'&courseid='.$cid.'');
		
	}
	else{
	header('location:formstep2.php?error='.$formid.'&courseid='.$cid.'');
}
	
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