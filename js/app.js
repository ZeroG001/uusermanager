(function($){

	var User = {
		getUser:function(){
			$.ajax({
				type: "GET",
				url: "src/controllers/get_users.php",
				timeout: 2000,
				beforeSend: function(){
     				$(".search-button").prop('disabled', true);
     			},
				success: function( data ){
					$(".result-area").html(data);
					$(".search-button").prop('disabled', false);
				},
				error: function(JqXHR, testStatus, errorThrown) {
					alert("There was an issue connecting to the database");
   				}
			});		
		},
		updateUser:function( data ){
			//ajax. update user user based on ID. Were going to update all of the data. Kinda depends on what the company database is looking like.
		},
		createUser:function( data ){
			//ajax create a new user. You better check if that person already exists.
			//check if the data is an object and that it has certain fields
			$.ajax({
				url: "src/controllers/create_user.php",
				type: "POST",
				data: data
			});
		}
	}; //end user object

	$(".search-button").click(function(){
		User.getUser("query"); 
	});

	$(".new-user").click(function(){
		$(".form-area").load("src/templates/new_form.html", function(){
			$( "form" ).on( "submit", function( event ) {

				var lister = $( this ).serializeArray();
				var data = {};
				for (i = 0; i < lister.length; i++) {
					event.preventDefault(); //this needs to be moved
					console.log(lister[i]);
					data[lister[i].name] = lister[i].value;
				}
				
				console.log(data);
		  		
			});
		});
		
	});





})(jQuery);