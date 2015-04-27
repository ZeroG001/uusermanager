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

		<h1> Test 1 </h1>

		<div class="row">


			<div class="left-side col-xs-6 col-sm-6 col-md-6 col-lg-6">

				<div class="actions-container">
					<button class="new-user">  + Add User </button>
				</div>

			
					<form class="search-form" action="http://10.9.63.84/uusermanager/src/actions/search.php" method="GET">
						<div class="search-input-wrapper">
							<input type="text" name="q" class="search-box" placeholder="Search..." />
							<input type="submit" class="search-button" value="" /> 
						</div>
					</form>
			

				<div class="search-results-wrapper">
					<!-- Stuff that is produced by querys -->
				</div>

			</div>

			<!--
			 // ============================== //
			 //			  User Form 		   //
			 // ============================== //
			 -->
			<div class="right-side col-xs-6 col-sm-6 col-md-6 col-lg-6">

				<div class="form-area">

					<form method="POST" class="user-form" action="dynamic-action" id="form-template">

						<center> <h3> Editing Test </h3> </center>
						
						<label for="fname">First Name</label>
						<input id="fname" type="text" name="username" value="" />

						<label for="lname">Last Name</label>
						<input id="lname" type="text" name="username" value="" />

						<label for="login">Lisence ID</label>
						<input id="licID" type="text" name="licID" value="" />


						<label for="password">Password</label>
						<input id="password" type="text" name="password"  value="" />

						
						<label for="paynum">Paynum</label>
						<input id="paynum" type="text" name="paynum" value="" />

						<label for="role">Role</label>
						<select id="role" name="role">
							<option> Agent </option>
							<option> Manager </option>
							<option> Admin </option>		
						</select>

						<label for="office">Office</label>
						<select id="office" name="office">
							<option value="1"> Office 1 </option>
							<option value="2"> Office 2 </option>
							<option value="3"> Office 3 </option>		
						</select>

						
						<input class="user-active-radio" id="user-active" type="radio" name="active" value="0" />
						<label for="user-active"> Active </label>
						
						<input class="user-active-radio" id="user-inactive" type="radio" name="active" value="-1" />
						<label for="user-inactive"> Inactive </label>

						<label for="userid"> UserID </label>
						<input type="text" name="userid" id="userid" />
						<input type="submit" /> 

					</form>
					
				</div>

			</div>

		</div>
	</div>

</body>

</html>

<script type="text/javascript" src="src/components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"> </script>