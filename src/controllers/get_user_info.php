<?php
	require_once("../db_config.php");

	if($_SERVER['REQUEST_METHOD'] == "GET") {
		echo $_GET['name'];
	}

	// $query = "SELECT * FROM users WHERE id = '24'";
	// $stmt = $db->prepare($query);
	// $stmt->execute();
	// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// foreach ($results as $key => $value) {
	// 		echo "";
	// }


	// $result->bindValue(1,$detail);
	// $result->execute();
?>