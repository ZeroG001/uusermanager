<?php
	
	// require_once("../db_config.php");
	// //retreiving user information from search query
	// if( $_SERVER["REQUEST_METHOD"] == "GET" ) {

	// 	//Do this when a search query is entered
	// 	if(isset($_GET['q']) and trim($_GET['q']) != "") {


	// 		try {

	// 			$search_query = $_GET['q'];
	// 			$query = "SELECT username, id FROM users WHERE username LIKE :keyword OR licID LIKE :keyword OR paynum LIKE :keyword";
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
	// 			var_dump($e);

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
	// 	echo "<a href='http://192.168.2.11/uusermanager/src/actions/show.php?userId=". $value['id'] ."'> This user </a>";
	// 	echo $value['username'];
	// 	echo "</li>";
	// 	echo "</ul>";
	// }
?>

	<div class="agent-result"> 
		<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'> 
			<span> Blayne Holland </span> <br />
			<span> LIC# - 123456 </span> <br />
			<span> Pay# - 12345 </span>
		</a>
	</div>

	<div class="agent-result"> 
		<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'> 
			<span> Blayne Holland </span> <br />
			<span> LIC# - 123456 </span> <br />
			<span> Pay# - 12345 </span>
		</a>
	</div>
			



