<?php
require_once("../db_config.php");
	// Retreiving user information when userID is passed in
	if($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET['userId'])) {
		$query = "SELECT * FROM users WHERE id = ? LIMIT 1";
		
		$userId = $_GET['userId'];

		try {

			$stmt = $db->prepare($query);
			$stmt->bindValue(1,$userId);
			$stmt->execute();
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch(Exception $e) {
			echo "There was a problem retreving the user";
		}
	}

	foreach ($results as $key => $value) {

		echo '<form method="POST"  class="update_user_form">
	
	<label for="username">Username</label>
	<input type="text" name="username" value="<?php $value["username"] ?>" />

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

</form>';
}
		
?>