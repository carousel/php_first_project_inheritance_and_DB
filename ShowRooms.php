<?php
require_once('connection.php');
require ('Rooms.php');
mysql_select_db($database, $connection); 


/*trait taggable {
	public function showThem(){
	
	}
}*/
/*class Show {

}*/


$cquery="SELECT * FROM `cinema_room`";  
$crooms = mysql_query($cquery) or die(mysql_error());
$cinema_rooms = array();
echo "Cinema Rooms<br>";
while ($row = mysql_fetch_array($crooms)) {
	array_push($cinema_rooms, new Cinema_Room($row['name'], $row['capacity'], $row['capacityLines'], $row['screenSize'], $row['screenType'], $row['soundType']));
}
foreach($cinema_rooms as $cinema_room){
	echo "<br>Name: " . $cinema_room->getName() . ", <br>Capacity: " . $cinema_room->getCapacity() . ", <br>Lines in Room: ". $cinema_room->getLines()."<br>Screen Type: " . $cinema_room->getScreenType() . ", <br>Screen Size: " . $cinema_room->getScreenSize() . ", <br>Sound Type: ". $cinema_room->getSoundType()."<br>";
}

$tquery="SELECT * FROM `theater_room`";  
$trooms = mysql_query($tquery) or die(mysql_error());
$theater_rooms = array();
echo "<br><br>Theater Rooms<br>";
while ($row = mysql_fetch_array($trooms)) {
	array_push($theater_rooms, new Theater_Room($row['name'], $row['capacity'], $row['capacityLines'], $row['dressingRooms']));
}
foreach($theater_rooms as $theater_room){
	echo "<br>Name: " . $theater_room->getName() . ", <br>Capacity: " . $theater_room->getCapacity() . ", <br>Lines in Room: ". $theater_room->getLines()."<br>Dressing Rooms: " . $theater_room->getDressingRooms() . "<br>";
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
