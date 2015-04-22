(function($){

	// Take All Elements Passed in and serialize the values
	function serialToObj(formInputs){
		console.log(formInputs);
		obj = {};
		for (i = 0; i < formInputs.length; i++) {
			 //this needs to be moved
			console.log(formInputs[i]);
			obj[formInputs[i].name] = formInputs[i].value;
		}
		console.log(obj);

		return obj;
	}

	var User = {
		searchUser:function( data ){

			if( !data ) {

				var data = null;
			} 
			
			$.ajax({

				type	: "GET",
				url	    : "src/actions/search.php",
				data    : {q: data},
				timeout : 2000,

				beforeSend: function(){
     				$(".search-button").prop('disabled', true);
     			},
				success: function( data ){
					$(".result-area").html(data);
					$(".search-button").prop('disabled', false);

					// Return form if results
					$(".agent_result").click(function(){
						var userid = $(this).attr("id");
						User.showUser(userid);
					});

					$("a").on("click", function( event ){
						event.preventDefault();
						alert("ya got mt");
						var url = $( this ).attr("href");
						User.updateUser( url );
					});
					
				},
				error: function(JqXHR, testStatus, errorThrown) {
					alert("There was an issue connecting to the database");
   				}
			});	


		},
		updateUser:function( url ){
			//ajax. update user user based on ID. Were going to update all of the data. Kinda depends on what the company database is looking like.

					
					console.log(url);
					$('.form-area').attr("action", "http://10.9.64.84");

					$.ajax({
					type: "GET",
					url: url,
					success: function(data){
						$(".alert").html(data);
					},
					error: function(){
						$(".alert").html("<h1> It Didn't work! </h1>");
					}
				});

		},
		createUser:function( data ){
			$('.form-area').show();
			$('.form-area').attr("action", "http://10.9.64.84/create.php");
			//ajax create a new user. You better check if that person already exists.
			//check if the data is an object and that it has certain fields
			$( "form" ).on( "submit", function( event ) {
				event.preventDefault();
				var items = $( this ).serializeArray();
				var data  = serialToObj(items);
	
				$.ajax({

					type: "POST",
					url	: "src/controllers/create_user.php",
					data: data,

					success: function( data ){

						$(".alert").html(data);
					},

					error: function() {

						$(".alert").html("<h1> It Didn't work </h1>");
					}
				});
		  		
			});
	
		}
	}; //end user object

	$("form.search-form").submit(function( event ){
		event.preventDefault();
		var query = $(".search-box").val()
		User.searchUser(query); 

	});

	$(".new-user").click(function(){
		User.createUser();	
	});

	

})(jQuery);