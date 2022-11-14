<?php include 'connect.php';
	    
		
		$sql=mysqli_query($con,"select * from carbok order by slno desc limit 1");
		$r=mysqli_fetch_array($sql);
		$slno=$r['slno'];
		
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Travel Life home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href=" https://www.w3schools.com/w3css/4/w3.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style type="text/css">
    	
    </style>
</head>
<body onload="window.print();">
	<div class="w3-card" style="">
		<center>
	<h3 class="w3-blue "><b>ONLINE GENERATED RECEIPT</b></h3>
	<div class="w3-container w3-content">
		<div class="w3-row-padding">
           <div class="w3-half">
           	   <img src="image/logo.jpg" style="width:;">
           </div>
           <div class="w3-half">
           	  
           </div>
		</div>
	</div>
    <h1 style="border-bottom: 4px solid orange"></h1>
      <div class="">
        <p><b class="w3-left"> Registered Id :</b> TVL000<?php echo $r['slno'] ;?></p>
		<p><b class="w3-left"> Name :</b> <?php echo $r['name'] ; ?></p>
		<p><b class="w3-left"> Email :</b> <?php echo $r['email'] ;?></p>
		<p><b class="w3-left"> Phone number :</b> <?php echo $r['phone'] ;?></p>
		<p><b class="w3-left"> Pickup Address :</b> <?php echo $r['pickup_add'] ;?></p>
		<p><b class="w3-left"> Destination Address :</b> <?php echo $r['destinatio_address'] ;?></p>
       
        <p><b class="w3-left"> Payment :</b> <?php echo $r['payment'] ;?></p>
       
    <h1 style="border-bottom: 4px solid black;"></h1>
        
</center>
</div>

</body>