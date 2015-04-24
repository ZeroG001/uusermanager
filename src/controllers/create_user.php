<?php
	if($_SERVER['REQUEST_METHOD'] == "POST") {

	 	require_once("../db_config.php");

	 	$username = $_POST['username'];
	 	$password = $_POST['password'];
	 	$role = $_POST['role'];
	 	$licID = $_POST['licID'];
	 	$office = $_POST['office'];
	 	$paynum = $_POST['paynum'];

	 	// Check to see if the user already exists. If someone does then quit
	 	try {
		 		$query = "SELECT * FROM users WHERE paynum = ?";

		 		$stmt = $db->prepare($query);
		 		$stmt->bindValue(1,$paynum);
		 		$stmt->execute();
				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

			if ( $results ) {
				
				die('This user already exists');
			}

	 	} catch (Exception $e) {
	 		// For some reason exit() triggers this...you wouldn't really know what the matter is...
	 	}

	 	//Add the user since the user does not already exist.
	 	try {

		 	$query = "UPDATE users SET username = 'Bllling' WHERE id = 24";
		
			$stmt->execute();

			echo "<p> User has been added updated</p>";

	 	} catch (Exception $e) {
	 		echo "<p> Error Adding User to database </p>";
	 		die();
	 	}

	 	
	} else {
	 	echo "Error. Not using POST";
	 	die();
	}
?>