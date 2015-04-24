<?php
// require_once("../db_config.php");
// 	// Retreiving user information when userID is passed in
// 	if($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET['userId'])) {
// 		$query = "SELECT * FROM users WHERE id = ? LIMIT 1";
		
// 		$userId = $_GET['userId'];

// 		try {

// 			$stmt = $db->prepare($query);
// 			$stmt->bindValue(1,$userId);
// 			$stmt->execute();
// 			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 		} catch(Exception $e) {
// 			echo "There was a problem retreving the user";
// 		}
// 	}

//  	# for each key value. Create a json object
//  	echo "{"
// 	foreach ($results as $key => $value) {
// 		echo $key.":".$value; 
// }
// 	echo "{"
	
?>

{"userid" : "123", "fname" : "Blayne", "email" : "ZeroG001@hotmail.com", "office" : "23"}

