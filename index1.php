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

	<div class="container main-content-container">

		<center> <h3> User Management System  </h3> </center>

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

			
				<form class="search-form" action="http://192.168.1.212/uusermanager/src/actions/search.php" method="POST">
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
					<span class="actions-form-status"> &nbsp; <!-- Editing / New User --> </span>

					<!-- <div class="alert">  This area shows alert from Ajax Requests </div> --> 
					<button class="new-user">  New User + </button>
					
				</div>


				<!-- 	NEW/EDIT User Form
				================================= -->
				<div class="form-area">

					<form method="POST" class="user-form" action="dynamic-action" id="form-template">

						
						<div class="row">

							<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">	
								<label for="FirstName">First Name:</label>
								<input id="FirstName" type="text" name="FirstName" value="" />
							</div>

							<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
								<label for="LastName">Last Name:</label>
								<input id="LastName" type="text" name="LastName" value="" />
							</div>

						</div>

						<div class="row">

							<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
								<label for="UserID">Lisence ID:</label>
								<input id="UserID" type="text" name="UserID" value="" />
							</div>


							<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
								<label for="PWD">Password:</label>
								<input id="PWD" type="text" name="PWD"  value="" />
							</div>

						</div>

						<div class="row">

							<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
								<label for="payNumber">Pay Number:</label>
								<input id="payNumber" type="text" name="payNumber" value="" />
							</div>

						</div>

						<div class="row">
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<label for="EmailAdd">Email Address:</label>
								<input id="EmailAdd" type="text" name="EmailAdd" value="" />
							</div>

							<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<label for="AssociateCell">Phone Number:</label>
								<input id="AssociateCell" type="text" name="AssociateCell" value="" />
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<label for="OfficeID">Office:</label>
								<select id="OfficeID" name="OfficeID">
									<option value="">Select</option>
					                <option value="5">5 Dearborn Heights/Dearborn</option>
					                <option value="7">7 Livonia</option>
					                <option value="13">13 Commerce</option>
					                <option value="15">15 Milford</option>
					                <option value="17">17 Southfield/Lathrup  Village</option>
					                <option value="21">21 Southgate</option>
					                <option value="23">23 Plymouth/Canton</option>
					                <option value="24">24 Brighton</option>
					                <option value="27">27 Clinton Twp</option>
					                <option value="28">28 Royal Oak</option>
					                <option value="31">31 Ann Arbor</option>
					                <option value="32">32 Fraser</option>
					                <option value="34">34 Troy</option>
					                <option value="35">35 Clarkston/Waterford</option>
					                <option value="39">39 Rochester</option>
					                <option value="41">41 Berridge &amp; Morrison</option>
					                <option value="42">42 Grosse Pointe - J &amp; J</option>
					                <option value="43">43 Dexter</option>
					                <option value="45">45 West Bloomfield - Middlebelt</option>
					                <option value="46">46 Shelby Twp - Realty Execs</option>
					                <option value="50">50 South Lyon</option>
					                <option value="51">51 Novi</option>
					                <option value="55">55 Birmingham</option>
					                <option value="56">56 Bloomfield Hills - Max Broock Realtors</option>
					                <option value="58">58 Birmingham 275 Woodward - Max Broock Realtors</option>
					                <option value="59">59 Rochester - Max Broock Realtors</option>
					                <option value="63">63 Traverse City - Front St.</option>
					                <option value="65">65 Traverse City - Randolph St.</option>
					                <option value="67">67 Bellaire</option>
					                <option value="68">68 Beulah</option>
					                <option value="69">69 Sutons Bay</option>
					                <option value="70">70 Traverse City - Commercial</option>
					                <option value="72">72 St. Clair Shores</option>
					                <option value="73">73 Dearborn Heights - Ford Rd.</option>
					                <option value="74">74 Shelby Twp. - Real Estate One</option>
					                <option value="78">78 Milan</option>
					                <option value="79">79 Saline</option>
					                <option value="80">80 Leland</option>
					                <option value="81">81 Cadillac </option>
					                <option value="85">85 Charlevoix</option>
					                <option value="86">86 CAR East</option>
					                <option value="87">87 CAR North</option>
					                <option value="88">88 CAR West</option>
					                <option value="89">89 CAR South</option>
					                <option value="90">90 CAR Saline</option>
					                <option value="91">91 CAR Grass Lake</option>
					                <option value="92">92 CAR Chelsea</option>
					                <option value="94">94 Ypsilanti</option>
					                <option value="12">12 Gaylordr</option>
					                <option value="214">214 Richmond</option>
					                <option value="215">215 Caseville</option>
					                <option value="216">216 Houghton Lake</option>
					                <option value="223">223 Rogers City</option>
					                <option value="226">226 Port Huron</option>
					                <option value="227">227 Oscoda</option>
					                <option value="228">228 Marine City</option>
					                <option value="229">229 Mio</option>
					                <option value="230">230 Petosekey</option>
					                <option value="233">223 Jackson</option>
					                <option value="234">234 Evart</option>
					                <option value="235">235 Howell</option>
					                <option value="237">237 Algonac</option>
					                <option value="238">238 Charlevoix</option>
					                <option value="239">239 Cheboygan</option>
					                <option value="240">240 Fenton</option>
					                <option value="241">241 Gladwin</option>
					                <option value="243">243 Harbor Beach</option>
					                <option value="244">244 Higgins Lake</option>
					                <option value="246">246 Holt</option>
					                <option value="247">247 Indian River</option>
					                <option value="249">249 Lewiston</option>
					                <option value="250">250 Lapeer - Gardner &amp; Assoc.</option>
					                <option value="252">252 Alpena</option>
					                <option value="253">253 Ortonville</option>
					                <option value="254">254 Caro</option>
					                <option value="255">255 Grand Rapids</option>
					                <option value="256">256 Holly</option>
					                <option value="257">Real Estate One Legacy - Greenville </option>
					                <option value="258">Real Estate One Legacy - Stauton</option>
					                <option value="308">308 45th Parallel Realty</option>		
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<label for="Role">Role:</label>
								<select id="Role" name="Role">
									<option value="agent">Agent</option>
               						<option value="Manager">Manager</option>
					                <option value="office_admin">Office Admininstrator</option>
					                <option value="Executive Assistant">Executive Assistant</option>
					                <option value="Staff">Staff</option>		
								</select>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<label for="security">Security Group:</label>
								<select id="security" name="security">
									<option value="AGENT">Agent (default)</option>
                					<option value="MANAGER">Manager</option>
                					<option value="ADMINISTRATOR">System Administrator (not office admin)</option>
		                        </select>
		                    </div>
	                	</div>


	                	<div class="row">
		                    <div class="col-xs-12 col-sm-12 ">
		                        <label for="User1">User 1</label>
								<select id="User1" name="User1">
									<option value="agent">Agent</option>
               						<option value="staff">Staff</option>
		                        </select>
		                    </div>
		                </div>

		                <div class="row">
		                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input class="user-active-radio" id="user-active" type="radio" name="inactive" value="0" checked />
								<label for="user-active"> Active </label>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input class="user-active-radio" id="user-inactive" type="radio" name="inactive" value="1" />
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
								<label for="dateEntered">Date Entered</label>
								<input id="dateEntered" type="text" name="dateEntered" />
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input type="hidden" name="pkeyid" id="pkeyid" />
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