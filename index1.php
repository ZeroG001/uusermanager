<html>
<head>
	<title>Title</title>

	<link rel="stylesheet" type="text/css" href="src/components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<style>
		input[type='text'] {display: block;}
		select {display: block;}
	</style>

</head>

<body>

	<div class="alert"> <!-- This area shows alert from Ajax Requests --> </div>

	<div class="container">
		<div class="row">

			<div class="left-side col-xs-6 col-sm-6 col-md-6 col-lg-6">

				<form class="search-form" action="http://192.168.1.212/uusermanager/src/actions/search.php" method="POST">
					<button class="search-button"> Search </button> 
					<input type="search" name="q" class="search-box">
				</form>

				<button class="new-user"> Add User </button>

				<div class="result-area">
					<!-- Stuff that is produced by querys -->
				</div>

			</div>

			<div class="right-side col-xs-6 col-sm-6 col-md-6 col-lg-6">

				<div class="form-area">

					<form method="POST" class="new_user_form" action="dynamic-action" id="form-template">
						
						<label for="username">Username</label>
						<input id="username" type="text" name="username" value="" />

						<label for="password">password</label>
						<input id="password" type="text" name="password"  value="" />

						<label for="licID">licID</label>
						<input id="licID" type="text" name="licID" value="" />

						<label for="paynum">Paynum</label>
						<input id="paynum" type="text" name="paynum" value="" />

						<label for="role"> Role </label>
						<select id="role" name="role">
							<option> agent </option>
							<option> manager </option>
							<option> admin </option>		
						</select>

						<label for="office">Office</label>
						<select id="office" name="office">
							<option value="1"> Office 1 </option>
							<option value="2"> Office 2 </option>
							<option value="3"> Office 3 </option>		
						</select>

						<label for="active"> Active? </label><br />
						<input type="radio" name="active" value="0"> Yes </input>
						<input type="radio" name="active" value="-1"> No </input>

						<input type="text" name="userid" id="userid" />
						<input type="submit"> go </input>

					</form>
					
				</div>

			</div>

		</div>
	</div>

</body>

</html>

<script type="text/javascript" src="src/components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"> </script>