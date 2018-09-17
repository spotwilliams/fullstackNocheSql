<pre>
<?php

include 'query.php';

$opt     = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$host    = 'mysql:host=127.0.0.1;dbname=movies_db;port=3306';
$db_user = 'root';
$db_pass = 'ksk()sk2312';


try {
	// SIEMPRE ENTRO ACA
	// Primero obtengo la conexion al server
	$db = new PDO($host, $db_user, $db_pass, $opt);

	$peli = $_GET['peli'];

	$query =  $db->query("SELECT movies.title as lalala, genres.name
FROM movies 
JOIN genres ON movies.genre_id = genres.id WHERE movies.id = $peli");

	/** $query es del tipo PDOStatement */


echo '<ul>';
	foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
		echo "<li>{$value['lalala']}</li>" ;
	}

	echo '</ul>';


	//var_dump($query->fetch(PDO::FETCH_ASSOC));


	$db = null;
} catch(\Exception $e) {

	var_dump($e);

	// ENTRO SOLO SI ERROR
	echo $e->getMessage();
}



echo '<br>sigo ejecutando';
