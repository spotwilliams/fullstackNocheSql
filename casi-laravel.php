<?php


include 'models.php';

$opt     = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$host    = 'mysql:host=127.0.0.1;dbname=movies_db;port=3306';
$db_user = 'root';
$db_pass = 'ksk()sk2312';


try {

	//$movie = $_POST;

	$movie = [
		'title'    => 'Matrix 3',
		'release_date' => '2010-09-18',
		'rating'   => 5.2,
		'awards'   => 2,
		'genre_id' => 1,
	];

	$db = new PDO($host, $db_user, $db_pass, $opt);

	 $sqlString = insert($movie, 'movies');


$genero = [
'name' => 'Richard lo mas',
'ranking' => 18.9
];
	$sqlString = insert($genero, 'genres');


	$query =  $db->prepare($sqlString);

	$query->execute();

} catch(\Exception $e) {

	echo $e->getMessage();

}



?>