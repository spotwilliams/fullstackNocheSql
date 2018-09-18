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

	
	$sql = "INSERT INTO movies (id, title, release_date, rating, awards)
	VALUES (505, 'Big Fish', '2013-01-01', 10, 2)";

	$query = $db->prepare($sql);
	$query->execute(); //primera insercción
	$query->execute(); //segunda insercción??
	$query->execute(); //tercera insercción???
	$db = null;


	$db = null;
} catch(\Exception $e) {

	var_dump($e);

	// ENTRO SOLO SI ERROR
	echo $e->getMessage();
}



echo '<br>sigo ejecutando';
