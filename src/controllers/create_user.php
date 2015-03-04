<?php
	 if($_SERVER['REQUEST_METHOD'] == "POST") {
	 	echo $_POST['name'];
	 } else {

	 	echo "Error. Not using POST";
	 	die();
	 }
?>