<?php
	require_once("../db_config.php");

	$query = "SELECT * FROM users";

try {
	$stmt=$db->prepare($query);
	$stmt->execute();
} catch (Exception $e) {
	echo "There was a problem connecting to the database.";
	die();
}

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($results as $key => $value) {
		echo "<ul>";
		echo "<li>";
		echo '<div class="agent_result" id="'. $value['paynum'] .'" Hello </div>';
		echo $value['username'];
		echo "</li>";
		echo "</ul>";
	}

?>