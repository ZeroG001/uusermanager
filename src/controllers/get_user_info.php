<?php
	// What do we want to get? Get the data we search for...Only...maybe later on show the top added users
	//
	require_once("../db_config.php");

	if($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['userId'])) {
		$userId = $_GET['userId'];

		$query = "SELECT * FROM users WHERE id = ? LIMIT 1"
		$stmt = $db->prepare($query);
		$stmt->bindValue(1,"userId");
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$db->close();
	}

	var_dump($results);	
?>

<style>
	input[type='text'] {display: block;}
	select {display: block;}
	
</style>

<form method="POST" class="update_user_form">
	
	<label for="username">Username</label>
	<input type="text" name="username" value="" />

	<label for="password">password</label>
	<input type="text" name="password" value="" />

	<label for="licID">licID</label>
	<input type="text" name="licID" value="" />

	<label for="paynum">Paynum</label>
	<input type="text" name="paynum" value="" />

	<label for="role"> Role </label>
	<select name="role">
		<option> agent </option>
		<option> manager </option>
		<option> admin </option>		
	</select>

	<label for="office">Office</label>
	<select name="office">
		<option> Office 1 </option>
		<option> Office 2 </option>
		<option> Office 3 </option>		
	</select>

	<label for="active"> Active? </label><br />
	<input type="radio" name="active" value="0"> Yes </input>
	<input type="radio" name="active" value="-1"> No </input>
	<input type="submit"> go </input>

	<input type="text" value="" />

</form>
