<style>
	.icos
	{
		padding-right:12px;	
	}
</style>
<div id="sb" class="sidebar" style="width:230px; background-color:#2A3F54;">
	<div class="display-topright">
        <a onclick="hidesb();" class="btn hover-green" style="padding-top:15px; padding-bottom:15px; color:white"><i class="fa fa-bars xlarge" aria-hidden="true"></i></a>
    </div>
	<div class="container center padding-16 ">
    	<img src="images/admin-png-4.png" class="" style="width:50%; margin-top:30px"><br><br>
    	<span style="font-family:roboto; color:white">Welcome Administrator</span>
        <a href="logout.php" class="btn blue round-medium text-white tiny hover-green" style="text-decoration:none; margin-top:10px;"><i class="fa fa-power-off" style="margin-right:4px"></i> <b> Logout</b></a><br>
        
    </div>
    <div class="container" style="padding-top:32px; padding-left:20px;">
    	<div class="bar-block" style="color:white">
        	<a href="admin.php" class="bar-item button"><i class="fa fa-dashboard icos"></i>Dashboard<i class="fa fa-angle-right right"></i></a>
            <a href="viewmeritlist.php" class="bar-item button"><i class="fa fa-list icos"></i>Merit List<i class="fa fa-angle-right right"></i></a>
            <hr>
    		<a href="news.php" class="bar-item button"><i class="fa fa-newspaper-o icos"></i>Notifications <i class="fa fa-angle-right right"></i></a>
             <a href="importantlinks.php" class="bar-item button"><i class="fa fa-link icos"></i>Important Links<i class="fa fa-angle-right right"></i></a>
            <hr>
            <a href="regstudents.php" class="bar-item button"><i class="fa fa-drivers-license icos"></i>Regd Students<i class="fa fa-angle-right right"></i></a>
            <a href="hsforms.php" class="bar-item button"><i class="fa fa-list icos"></i>H.S Forms <i class="fa fa-angle-right right"></i></a>
            <a href="baforms.php" class="bar-item button"><i class="fa fa-list icos"></i>B.A Forms <i class="fa fa-angle-right right"></i></a>
            <a href="bcomforms.php" class="bar-item button"><i class="fa fa-list icos"></i>B.Com Forms <i class="fa fa-angle-right right"></i></a>
        </div>
    </div>
</div>




<div id="sb1" class="sidebar" style="width:70px; background-color:#2A3F54 ;display:none;">
	<div class="display-topmiddle" style="padding-top:15px">
        <a href="#" onClick="showmenu();"><i class="fa fa-bars xlarge text-white" id="menu" style="display:none;"></i></a>
        
    </div>
	<div class="container center padding-16 border-bottom" style="margin-top:50px;">
    	<img src="images/admin-png-4.png"  style="width:100%; "><br><br>
    	
        
    </div>
    <div class="container" style="padding-top:32px; padding-left:10px;">
    	<div class="bar-block" style="color:white">
        	<a href="admin.php" class="bar-item button"><i class="fa fa-dashboard icos"></i></a>
            <hr>
    		<a href="news.php" class="bar-item button"><i class="fa fa-newspaper-o icos"></i></a>
             <a href="importantlinks.php" class="bar-item button"><i class="fa fa-link icos"></i></a>
            <hr>
            <a href="regstudents.php" class="bar-item button"><i class="fa fa-drivers-license icos"></i></a>
            <a href="hsforms.php" class="bar-item button"><i class="fa fa-list icos"></i></a>
            <a href="baforms.php" class="bar-item button"><i class="fa fa-list icos"></i></a>
            <a href="bcomforms.php" class="bar-item button"><i class="fa fa-list icos"></i></a>
        </div>
    </div>
</div>
<script>
function hidesb()
{   
	document.getElementById('sb').style.display='none';
	document.getElementById('menu').style.display='block';
	document.getElementById('main').style.marginLeft='70px';
	document.getElementById('sb1').style.display='block';
}
function showmenu()
{
	document.getElementById('sb').style.display='block';
	document.getElementById('sb1').style.display='none';
	document.getElementById('menu').style.display='none';
	document.getElementById('main').style.marginLeft="230px";
}
</script>