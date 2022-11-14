<?php
session_start();
?>
<?php include 'nav.php';

 ?>	
 																	

	<div class="w3-row-padding">
		<div class=" w3-half w3-col w3-container" style="margin-top: 1%; margin-bottom: 1%;">
			<form class="w3-container" action="savedonetion.php"  method="post"  >
		<?php
		include 'connect.php';
		$mail=$_SESSION['email'];
		$sql=mysqli_query($con,"select * from register where email='$mail'");
		$row=mysqli_fetch_array($sql);
		
		?>

		<b><h2 class="w3-round" style="color: blue; text-shadow: 2px 2px black; border-bottom: 4px solid orange;"><b> PAYMENT  FORM 
	 </b></h2><br></b>
		<label class=" w3-left" style="color: blue; "><b> Name : </b></label>
		<input class="w3-input w3-border" name="name" type="text" placeholder="Name" required="" value="<?php echo $row['name']; ?>"><br>
		<label class=" w3-left" style="color: blue; "><b> Email : </b></label>
		<input class="w3-input w3-border" name="email" type="email" placeholder="Email" required="" value="<?php echo $row['email'];?>"><br>
		<label class=" w3-left"  style="color: blue;"><b> Phone no : </b></label>
		<input class="w3-input w3-border" name="phone" type="tell" placeholder="9999999999" maxlength="10" required="" value="<?php echo $row['phone'];?>"><br>
		
		
		<label class=" w3-left"  style="color: blue;"><b> AMOUNT : </b></label>
		<input class="w3-input w3-border" name="addr" type="text" placeholder="address" required=""><br>
		<label class=" w3-left" style="color: blue; "><b> SOUVRNIR : </b></label>
		<select name="adr" class="w3-select w3-border">
			
           <option value="Yes">Yes</option>
           <option value="No">No</option></select><br><br>
		
		   <h5 class="w3-round" style="color: red;  "> *** For souvenir min amount is 1000 . you have to pay the remaing amount while collecting souvenier
</h5></b>
		<input type="radio"  name="pay" class="w3-radio" value="online">
        <label class="" style="color: blue;"><b> Online</b></label>
		<input type="radio" class="w3-radio" name="pay" value="offline">
        <label  class="" style="color: blue;"><b> Offline</b>
        <br><br><br>
		<input class="w3-btn w3-round w3-blue"  type="submit" value="PAY"><br>
	</form>
	
</div>

</div>

<?php include 'footer.php' ?>
<script type="text/javascript">
	function calculate()
	{
	var a = document.getElementById('km').value;
var b = document.getElementById('pfix').value; 
document.getElementById('price').value=parseInt(a) * parseInt(b);
 
	}
</script>