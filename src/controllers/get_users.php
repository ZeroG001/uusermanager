<?php
	require_once("../db_config.php");

	// Retreiving user information when paynum is passed in
	if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['paynum'])) {
		$query = "SELECT * FROM users WHERE paynum LIKE ? or username LIKE ?";
		$paynum = $_POST['paynum'];

		try {
			$stmt = $db->prepare($query);
			$stmt->bindValue(1,$paynum);
			$stmt->execute();
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch(Exception $e) {
			echo "There was a problem retreving the user";
		}
	}




	//retreiving user information from search query
	if( $_SERVER["REQUEST_METHOD"] == "GET" ) {

		//Do this when a search query is entered
		if(isset($_GET['q']) and trim($_GET['q']) != "") {


			try {

				$search_query = $_GET['q'];
				$query = "SELECT * FROM users WHERE username LIKE :keyword or licID LIKE :keyword OR paynum LIKE :keyword";
				$stmt = $db->prepare($query);
				$stmt->bindValue(':keyword', $search_query );
				$stmt->execute();
				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


			} catch ( Exception $e ) {

				echo "There was a problem querying the database";

			}

		} else {

			try {

				$query = "SELECT * FROM users LIMIT 10";
				$stmt=$db->prepare($query);
				$stmt->execute();
				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

			} catch ( Exception $e ) {

				echo "There was a problem querying the database";

			}	
			
		}

	}

	if(!isset($results)) {
		echo "There was an error trying to grab the data";
		die();
	}

	foreach ($results as $key => $value) {
		echo "<ul>";
		echo "<li>";
		echo '<div class="agent_result" id="'. $value['paynum'] .'" Hello </div>';
		echo $value['username'];
		echo "</li>";
		echo "</ul>";
	}

?>