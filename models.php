<?php



function insert($data, $table) {

	$sql = "INSERT INTO $table (";


	foreach ($data as $colum => $value) {
	
		$sql .= "$colum, ";

	}
	$sql .= ") VALUES (";

	foreach ($data as $colum => $value) {
	
		$sql .= "'$value', ";

	}


	$sql .= ');';


	$sql = str_replace(', )', ')', $sql);

	return $sql;

}




?>