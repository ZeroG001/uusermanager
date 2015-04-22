<?php
	
	// require_once("../db_config.php");
	// //retreiving user information from search query
	// if( $_SERVER["REQUEST_METHOD"] == "GET" ) {

	// 	//Do this when a search query is entered
	// 	if(isset($_GET['q']) and trim($_GET['q']) != "") {


	// 		try {

	// 			$search_query = $_GET['q'];
	// 			$query = "SELECT * FROM users WHERE username LIKE :keyword or licID LIKE :keyword OR paynum LIKE :keyword";
	// 			$stmt = $db->prepare($query);
	// 			$stmt->bindValue(':keyword', $search_query );
	// 			$stmt->execute();
	// 			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


	// 		} catch ( Exception $e ) {

	// 			echo "There was a problem querying the database";

	// 		}

	// 	} else {

	// 		try {

	// 			$query = "SELECT * FROM users LIMIT 10";
	// 			$stmt=$db->prepare($query);
	// 			$stmt->execute();
	// 			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// 		} catch ( Exception $e ) {

	// 			echo "There was a problem querying the database";

	// 		}	
			
	// 	}

	// }

	// if(!isset($results)) {
	// 	echo "There was an error trying to grab the data";
	// 	die();
	// }

	// foreach ($results as $key => $value) {
	// 	echo "<ul>";
	// 	echo "<li>";
	// 	// echo '<div class="agent_result" id="'. $value['paynum'] .'" Hello </div>';
	// 	echo "<a href='http://192.168.1.212/login_system_2/src/actions/show.php?userId=". $value['id'] ."'> This user </a>";
	// 	echo $value['username'];
	// 	echo "</li>";
	// 	echo "</ul>";
	// }
?>

 	<ul>
		<li>
			<div class="agent_result" id="123456"> 
				<a href='http://192.168.1.212/login_system_2/src/actions/show.php?userId=123456'> Blayne Holland </a>
			</div>
		</li>
	</ul>