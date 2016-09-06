<?php
require_once('connection.php');
mysql_select_db($database, $connection); 

$squery="SELECT * FROM `schedule`";  
$schedule = mysql_query($squery) or die(mysql_error());
while ($row = mysql_fetch_array($schedule)) {
	echo $row['id'];
	//......... showing schedule with full info about movie play and room (capacity etc)
}

?>









<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>

<body>

</body>

</html>
