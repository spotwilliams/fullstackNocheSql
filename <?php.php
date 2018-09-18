<?php

include 'models.php';


$opt     = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$host    = 'mysql:host=127.0.0.1;dbname=movies_db;port=3306';
$db_user = 'root';
$db_pass = 'ksk()sk2312';


try {



$db = new PDO($host, $db_user, $db_pass, $opt);

$sql = insert()	
	$query =  $db->prepare("SELECT movies.title as lalala, genres.name
FROM movies 
JOIN genres ON movies.genre_id = genres.id WHERE movies.id = :id");

	$query->bindParam(':id', $peli);


	$query->execute();
} catch(\Exception $e) {

}



?>