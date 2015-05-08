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

<div class="agent-result-header"> 
		<div class="row">
			<div class="hidden-xs hidden-sm hidden-md col-lg-12">
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						<span> Name </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						 <span> Lisence ID </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						  <span> Pay Number </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						 <span> Office Number </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						  <span> Role </span>
					</div>
			</div>
		</div>
	</div>

	
	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>


	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>


	<div class="agent-result"> 
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='http://10.9.63.84/uusermanager/src/actions/show.php?userId=123456' id='id="123456"'>
			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						 <span class="agent-result-inline-header"> Full Name </span> <span> Blayne Holland </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Lisence ID  </span> <span> 123456 </span> 
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Pay Number </span> <span> 12345 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Office Number </span> <span> 13 </span>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						<span class="agent-result-inline-header"> Role </span> Office Admininstrator </span>
					</div>
				</a>
			</div>
		</div>
	</div>
			



