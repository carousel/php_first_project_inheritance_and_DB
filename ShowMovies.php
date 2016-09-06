<?php
require_once('connection.php');
require ('Plays.php');
mysql_select_db($database, $connection); 

$mquery="SELECT * FROM `movie_play`";  
$mplays = mysql_query($mquery) or die(mysql_error());
$movie_plays = array();
echo "<br><br>Movie Plays<br>";
echo $mplays ;
while ($row = mysql_fetch_array($mplays)) {
	array_push($movie_plays, new Movie_Play($row['name'], $row['director'], $row['actors'], $row['duraction']));

}
foreach($movie_plays as $movie_play){
	echo "<br>Name: " . $movie_play->getName() . ", <br>Director: " . $movie_play->getDirector() . ", <br>Lines in Room: ". $movie_play->getActors()."<br>Actors: " . $movie_play->getDuraction() . "<br>";
}





?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>

<body>

</body>

</html>
