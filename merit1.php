<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SELECTED</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link href="css/w3.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cute+Font" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>

</head>

<body style="background:#ECECEC">
<?php include 'nav.php'; ?>

	
    
   <div class="w3-main" style="margin-left:30px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-list"></i>Selected Students</b></h5>
  </header>
  <script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
  <div class="w3-container">
    <input  type="button" onclick="tableToExcel('forms', 'W3C Example Table')" value="Export to Excel"></div> <br>
    <div class="w3-content" style="font-family:roboto; max-width: 95%; overflow:scroll;" >
     <div class="w3-content" style="font-family:roboto; max-width: 95%;" >
 <table class="w3-table-all w3-card-2" style="" id="forms">
    <thead>
    <tr class="w3-blue">
    <th>ID</th> 
    <th>Name</th>
    <th>Course</th>
    <th>persentage</th>
    <th>Caste</th>
    <th>DisabliTY</th>
    <th>Ecomonic Status</th>
    <th>Selected</th>
    
    
    </tr>
</thead>
    <?php
	include 'connect.php';
	$result=mysqli_query($con,"SELECT * from formgenerate where selection ='SELECTED'");
	while($row=mysqli_fetch_array($result))
	{
    $id=$row['formid'];
	?>
    <tr style="font-size:13px">
    <td><?php echo $row['formid'] ?></td>
    
    <td><?php echo $row['sname'] ?></td>
    <td><?php echo $row['cname'] ?></td>
    <td><?php echo $row['lpercent'] ?></td>
    <td><?php echo $row['caste'] ?></td>
    
    <td><?php echo $row['dabled'] ?></td>
    <td><?php echo $row['bpl'] ?></td>
    <td><?php echo $row['selection'] ?></td>

    
    </tr>
    <?php
	}
	?>
    </table>
    </div>
</body>
</html>
<script src="jQueryAssets/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script>
  
  $(document).ready(function() {
    $('#forms').DataTable( {
        "lengthMenu": [[10, 100, 200, -1], [10, 25, 200, "All"]]
    } );
} );
</script>



<script>
  $(document).ready(function(){
    $('#forms').DataTable();
  });
</script>
