<?php
session_start();
if(!isset($_SESSION["secratery"]))
{
	header("location:index.php");
	return;
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/w3.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 
<link rel="stylesheet" href="css/style.css">
<style>
.b{
	font-family:roboto;color:white; background:crimson;border-style:none;border-radius:10px;padding-left:3%;padding-right:3%;padding-bottom:1%; padding-top:1%;font-size:15px; float:right;cursor:pointer;
}
.lin{
	text-decoration:none;
	color: gray;
	
}
.lin:hover{
	color:crimson;
}
h4{
	font-family:Roboto;
}
.lin span{
	padding-right:15%;
	padding-left:8%;
}
.navi{
	
	color:white;
	text-decoration:none;
}
.navi h5{
	font-family:roboto;
}
ul{
	list-style:none;
	margin-top:-0.5px;
	margin-left:-5.9%;
}
li{
	list-style:none;
	display:inline-block;
	padding-left:30px;
}
</style>
</head>
<body >




<?php include 'sidebar.php'; ?>
</div>

</body>
</html>