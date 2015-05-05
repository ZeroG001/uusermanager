<html>
<head>
	<title>Title</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="src/components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<style>
		input[type='text'] {display: block;}
		select {display: block;}
	</style>

</head>

<body>

	<div class="alert"> <!-- This area shows alert from Ajax Requests --> </div>

	<div class="container main-content-container">

		<center> <h1> User Management System  </h1> </center>

		<div class="row">

			<!--
			 // ============================== //
			 //    Search Form - Left Side     //
			 // ============================== //
			 -->

			<div class="left-side col-xs-6 col-sm-6 col-md-6 col-lg-6">

				<!-- <div class="actions-container">
					<button class="new-user">  + Add User </button>
				</div> -->

			
				<form class="search-form" action="http://192.168.1.212/uusermanager/src/actions/search.php" method="GET">
					<div class="search-input-wrapper">
						<input type="text" name="q" class="search-box" placeholder="Search users..." />
						<input type="submit" class="search-button" value="" /> 
					</div>
				</form>
			

				<!-- Search Result Area
				==================================== -->

				<div class="search-results-wrapper">
					<!-- Search results will appear here -->
				</div>

			</div>







			<!--
			 // ============================== //
			 //	    User Form - Right Side	   //
			 // ============================== //
			 -->
			<div class="right-side col-xs-6 col-sm-6 col-md-6 col-lg-6">

				<div class="actions-container">
					<span class="status-area"> Editing User </span>
					<button class="new-user">  + Add User </button>
				</div>


				<!-- 	NEW/EDIT User Form
				================================= -->
				<div class="form-area">

					<form method="POST" class="user-form" action="dynamic-action" id="form-template">

						
						<div class="row">

							<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">	
								<label for="fname">First Name:</label>
								<input id="fname" type="text" name="username" value="" />
							</div>

							<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
								<label for="lname">Last Name:</label>
								<input id="lname" type="text" name="username" value="" />
							</div>

						</div>

						<div class="row">

							<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
								<label for="login">Lisence ID:</label>
								<input id="licID" type="text" name="licID" value="" />
							</div>


							<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
								<label for="password">Password:</label>
								<input id="password" type="text" name="password"  value="" />
							</div>

						</div>

						<div class="row">

							<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
								<label for="paynum">Pay Number:</label>
								<input id="paynum" type="text" name="paynum" value="" />
							</div>

						</div>

						<div class="row">
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<label for="email-address">Email Address:</label>
								<input id="email-address" type="text" name="email-address" value="" />
							</div>

							<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<label for="email-address">Phone Number:</label>
								<input id="phone-number" type="text" name="phone-number" value="" />
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<label for="office">Office:</label>
								<select id="office" name="office">
									<option value="1"> Office 1 </option>
									<option value="2"> Office 2 </option>
									<option value="3"> Office 3 </option>		
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<label for="role">Role:</label>
								<select id="role" name="role">
									<option> Agent </option>
									<option> Manager </option>
									<option> Admin </option>		
								</select>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<label for="security-group">Security Group:</label>
								<select id="security-group" name="security">
									<option value="AGENT">Agent (default)</option>
			                        <option value="MANAGER">Manager</option>
			                        <option value="ADMINISTRATOR">System Administrator (not office admin)</option>
		                        </select>
		                    </div>
	                	</div>


	                	<div class="row">
		                    <div class="col-xs-12 col-sm-12 ">
		                        <label for="user1">User 1</label>
								<select id="user1" name="user1">
									<option value="AGENT">Agent</option>
			                        <option value="MANAGER">Staff</option>
		                        </select>
		                    </div>
		                </div>

		                <div class="row">
		                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input class="user-active-radio" id="user-active" type="radio" name="active" value="0" checked />
								<label for="user-active"> Active </label>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input class="user-active-radio" id="user-inactive" type="radio" name="active" value="-1" />
								<label for="user-inactive"> Inactive </label>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<input id="submit-button" class="submit-button" type="submit" />
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<label for="date-entered">Date Entered</label>
								<input id="date-entered" type="text" name="date-entered" value="" />
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<label for="userid"> database ID </label>
								<input type="text" name="userid" id="userid" />
							</div>
						</div>

					</form>
					
				</div>

			</div>

		</div>
	</div>

</body>

</html>

<script type="text/javascript" src="src/components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"> </script>