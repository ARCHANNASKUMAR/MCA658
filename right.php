<?php
$sec30=60*60*24*30+time();
setcookie('lastVisit',date("g:i:s - d/m/y"),$sec30);
?>
<html>
<body bgcolor="grey">
<h1 style="color:white">Hello
<?php
$visit =$_COOKIE['lastVisit'];
if(isset($_COOKIE['lastVisit']))
	echo "Your last visit was=".$visit;
else
	echo "You've got some stale cookies!";
?>
</h1>
</body>
</html>