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
				url	    : $('.search-form').attr('action'),
				data    : {q: data},
				timeout : 2000,

				beforeSend: function(){
					// Before anything is sent out, disable search button 
     				$(".search-button").prop('disabled', true);
     			},
				success: function( results ){

					// Show results in Search Results area and enable the button

					$(".result-area").html( results );
					$(".search-button").prop('disabled', false);

					// If agent-result link is clicked. run show uuser
					$(".agent-result a").click(function( event ){

						var url = $( this ).attr( "href" );
						var userid = $( this ).attr( "id" );

						event.preventDefault();
						User.showUser( url );

						
					});

					// $("a").on("click", function( event ){
						
						
					// 	var url = $( this ).attr("href");
					// 	User.updateUser( url );
					// });
					
				},
				error: function(JqXHR, testStatus, errorThrown) {
					alert("There was an issue connecting to the database");
   				}
			});	


		},
		showUser:function( url ){
			//ajax. update user user based on ID. Were going to update all of the data. Kinda depends on what the company database is looking like.

					//Getting ready to update the user by changing the form action
					// $('.form-area').show();
					// $('.form-area').attr("action", "http://10.9.64.84/uusermanager/show.php");

					$.ajax({

						type: "GET",
						url	: url,

					success	: function( results ){
							var json = JSON.parse( results );
							console.log(json);
						$('.form-area').show();
						$('.new_user_form').attr("action", "http://10.9.63.84/uusermanager/src/actions/update.php");

						$('.new_user_form #username').val(json.fname);
						// $('.new_user_form #username').val(json.userID);
						// $('.new_user_form #username').val(json.email);
						// $('.new_user_form #username').val(json.office);
						// $('.new_user_form #username').val(json.role);

					},
					error: function(){
						$(".alert").html("<h1> It Didn't work! </h1>");
					}
				});

		},
		createUser:function( data ){
			$('.form-area').show();
			$('.new_user_form').attr("action", "http://10.9.63.84/uusermanager/src/actions/create.php");
			//ajax create a new user. You better check if that person already exists.
			//check if the data is an object and that it has certain fields
			$('form.new_user_form').submit( function( event ) {
				event.preventDefault();
				var items = $( this ).serializeArray();
				var data  = serialToObj( items );
	
				$.ajax({

					type: "POST",
					url	: $(".new_user_form").attr("action"),
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