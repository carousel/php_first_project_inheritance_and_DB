<?php
require_once('connection.php'); 
require ('Rooms.php');
require ('Plays.php');

if (isset($_POST['submit_cinema'])) {   
	echo "1";
    $name=$_POST['name'];
    $capacity=$_POST['capacity'];
    $capacityLines=$_POST['capacityLines'];
    $screenSize=$_POST['screenSize'];
    $screenType=$_POST['screenType'];
    $soundType=$_POST['soundType'];
    echo "2";
    $insert = "INSERT INTO `cinema_room` (name, capacity, capacityLines, screenSize, screenType, soundType) VALUES ('$name', '$capacity', '$capacityLines', '$screenSize', '$screenType', '$soundType')";
    echo "3";
    mysql_select_db($database, $connection);
    echo "4";
    $Result = mysql_query($insert, $connection);
    echo "5";
}

if (isset($_POST['submit_theater'])) {   
    $name=$_POST['name'];
    $capacity=$_POST['capacity'];
    $lines=$_POST['lines'];
    $dressingRooms=$_POST['dressingRooms'];
    $insert = "INSERT INTO `theater_room` (name, capacity, capacityLines, dressingRooms) VALUES ('$name', '$capacity', '$lines', '$dressingRooms')";
    mysql_select_db($database, $connection);
    $Result = mysql_query($insert, $connection);
}

if (isset($_POST['submit_movie'])) {   
    $name=$_POST['name'];
    $director=$_POST['director'];
    $actors=$_POST['actors'];
    $duraction=$_POST['duraction'];
    $insert = "INSERT INTO `movie_play` (name, director, actors, duraction) VALUES ('$name', '$director', '$actors', '$duraction')";
    mysql_select_db($database, $connection);
    $Result = mysql_query($insert, $connection);
}

if (isset($_POST['submit_schedule'])) {  
    $name=$_POST['name'];
    $room=$_POST['room'];
    $date=$_POST['date'];
    $duraction=$_POST['duraction'];
    $insert = "INSERT INTO `schedule` (movie, room, time) VALUES ('$name', '$room', '$date')";
    mysql_select_db($database, $connection);
    $Result = mysql_query($insert, $connection);
}

?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>

<body>
<div id="addCinemaRoom" style="float:left;">
<form name="CinemaRoom" method="POST" action="Main.php" id="CinemaRoom">
Name:<br>
<input type="text" name="name" id="name" required><br>
Capacity:<br>
<input type="text" name="capacity" id="capacity" required><br>
Lines:<br>
<input type="text" name="capacityLines" id="capacityLines" required><br>
Screem Size:<br>
<input type="text" name="screenSize" id="screenSize" required><br>
Screen Type:<br>
<input type="text" name="screenType" id="screenType" required><br>
Sount Type:<br>
<input type="text" name="soundType" id="soundType" required><br>

<input id="submit_cinema" type="submit" name="submit_cinema" value="Add Cinema Room"><br>

</form>
<a href="ShowRooms.php">show rooms</a>
</div>

<div id="addTheaterRoom" style="margin-left:10%; float:left;">
<form name="TheaterRoom" method="POST" action="Main.php" id="TheaterRoom">
Name:<br>
<input type="text" name="name" id="name" required><br>
Capacity:<br>
<input type="text" name="capacity" id="capacity" required><br>
Lines:<br>
<input type="text" name="lines" id="lines" required><br>
Dressing Rooms:<br>
<input type="text" name="dressingRooms" id="dressingRooms" required><br>

<input id="submit_theater" type="submit" name="submit_theater" value="Add Theater Room"><br>

</form>
</div>



<div id="addMoviePlay" style="margin-left:10%; float:left;">
<form name="MoviePlay" method="POST" action="Main.php" id="MoviePlay">
Name:<br>
<input type="text" name="name" id="name" required><br>
Director:<br>
<input type="text" name="director" id="director" required><br>
Actors:<br>
<input type="text" name="actors" id="actors" required><br>
Durection:<br>
<input type="text" name="duraction" id="duraction" required><br>

<input id="submit_movie" type="submit" name="submit_movie" value="Add Movie"><br>

</form>
<a href="ShowMovies.php">show movies</a>
</div>


<div id="addSchedule" style="margin-left:10%; float:left;">
<?php
$cquery="SELECT * FROM `movie_play`";  
$crooms = mysql_query($cquery) or die(mysql_error());
?>
<form name="Schedule" method="POST" action="Main.php" id="Schedule">
Movie:<br>
 <select name="name">
 <?php
	while ($row = mysql_fetch_array($crooms)) {
		echo "<option value='".$row['id']."'>".$row['name']."</option>";
	}
 ?>
</select> 
<!--<input type="text" name="name" id="name" required><br>-->
Room:<br>
<?php
$cquery="SELECT * FROM `cinema_room`";  
$crooms = mysql_query($cquery) or die(mysql_error());

?>
 <select name="room">
 <?php
	while ($row = mysql_fetch_array($crooms)) {
		echo "<option value='".$row['id']."'>".$row['name']."</option>";
	}
?>
</select> 

<!--<input type="text" name="room" id="room" required><br>-->
Date:<br>
<input type="text" name="date" id="date" required><br>

<input id="submit_schedule" type="submit" name="submit_schedule" value="Add Schedule"><br>

</form>
<a href="ShowSchedule.php">show schedule</a>
</div>







</body>

</html>
