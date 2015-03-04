<?php
	define('DB_NAME', 'one');
	define('DB_USER', 'root');
	define('DB_PASS', 'sonic001');
	define('DB_HOST', 'localhost');

	try {

		$db = new PDO("mysql:host=localhost;port=3360;dbname=one", "root", "sonic001");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Turns on error reporting and catches the exception
		$db->exec("SET NAMES 'utf8'");

	} catch(Exception $e) {

		echo "Unable to connect to the database";
		var_dump($e);
		echo "remove error handling when done";
		die();
	}


	## Testing area
	## your bread and butter commands

	## getting values
// 	$query = "SELECT * FROM table";
// 	$stmt = $db->prepare($query);
// 	$results = $stmt->execute();

// 	results_array = $stmt->fetchAll(PDO::FETCH_ASSOC);	
// $results_array = array_reverse($results_array);

// foreach ($results_array as $value)

	// #setting vlaues

	// $query = "INSERT INTO tbl_notes (details,title, note_color) VALUES (?,?,?)";
	// $result = $db->prepare($query);
	// $result->bindValue(1,$detail);
	// $result->bindValue(2,$title);
	// $result->bindValue(3,$noteColor);
	// $result->execute();

	// $db = null;

?>