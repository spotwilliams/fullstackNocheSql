<pre>
<?php

$opt     = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$host    = 'mysql:host=127.0.0.1;dbname=movies_db;port=3306';
$db_user = 'root';
$db_pass = 'ksk()sk2312';



try {
	// Primero obtengo la conexion al server
	$db = new PDO($host, $db_user, $db_pass, $opt);

	// Con esa conexion trabajo
	$query = $db->query('SELECT * from movies');


	var_dump($query->fetch());

} catch( PDOException $Exception ) {
    // Que pacho?
    echo $Exception->getMessage();
}
