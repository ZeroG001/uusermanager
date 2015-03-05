<html>
<head>
	<title>Title</title>

	<link rel="stylesheet" type="text/css" href="src/components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

	<div class="alert"> <!-- This area shows alert from Ajax Requests --> </div>

	<div class="container">
		<div class="row">

			<div class="left-side col-xs-6 col-sm-6 col-md-6 col-lg-6">

				<div class="search-area">
					<button class="search-button"> Search </button> <input type="search" name="item"> <button class="new-user"> Add User </button>
				</div>

				<div class="result-area">
					<!-- Stuff that is produced by querys -->
				</div>

			</div>

			<div class="right-side col-xs-6 col-sm-6 col-md-6 col-lg-6">

				<div class="form-area">
					<!-- Update and New user forms -->
				</div>

			</div>

		</div>
	</div>

</body>

</html>

<script type="text/javascript" src="src/components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"> </script>