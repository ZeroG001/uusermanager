(function($){

	// ======================== //
	// 		Config Variables    //
	// ======================== //

	var s = {
		"droot" : "192.168.1.212",
	};


	// Take All Elements Passed in and serialize the values
	function serialToObj(formInputs){

		console.log(formInputs);

		obj = {};
		for (i = 0; i < formInputs.length; i++) {
			console.log(formInputs[i]); // Show input submitted
			obj[formInputs[i].name] = formInputs[i].value;
		}

		console.log(obj);

		return obj;
	}

	var User = {

		searchUser: function( data ){

			if( !data ) {
				alert("Please enter search criteria");
				return false;
			} 
			
			$.ajax({

				type	: "POST",
				url	    : $('.search-form').attr('action'),
				data    : {q: data},
				timeout : 2000,

				beforeSend: function() {
					// Before anything is sent out, disable search button 
     				$(".search-button").prop('disabled', true);
     			},

				success: 	function( results ) {

					// Show results in Search Results area and enable the button

					$(".result-area").html( results );
					$(".search-button").prop('disabled', false);

					// If agent-result link is clicked. run show uuser
					$(".agent-result a").click(function( event ){

						var url = $( this ).attr( "href" );
						// var userid = $( this ).attr( "id" );

						event.preventDefault();
						User.showUser( url );

						
					});

				},

				error: 	function(JqXHR, testStatus, errorThrown) {

					$(".search-button").prop('disabled', false);
					alert("There was an issue connecting to the database");
   				}

			});	


		},
		showUser: function( url ){

			//ajax. update user user based on ID. Were going to update all of the data. Kinda depends on what the company database is looking like.

					$.ajax({

						type: "GET",
						url	: url,

					success	: function( results ){

						var json = JSON.parse( results );
						console.log(json);

						$('.form-area').show();
						$('.new_user_form #userid').val(json.userid);
						$('.new_user_form #username').val(json.fname);

						$('.new_user_form').attr("action", "http://"+s.droot+"/uusermanager/src/actions/update.php");

						
					},
					error: function(){
						$(".alert").html("<h1> It Didn't work! </h1>");
					}
				});

		},
		createUser:function( data ){
			document.getElementById("form-template").reset();
			$('.form-area').show();
			$('.new_user_form').attr("action", "http://"+s.droot+"/uusermanager/src/actions/create.php");
			//ajax create a new user. You better check if that person already exists.
			//check if the data is an object and that it has certain fields
		}
	}; //end user object


	// When Search form is submitted then send data to search.cfm

	$("form.search-form").submit(function( event ){
		event.preventDefault();
		var query = $(".search-box").val()
		User.searchUser(query); 
	});

	// When user submits form then send data over to eaither update.cfm or create.cfm

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


	// When User clicks the Add User button show the form

	$(".new-user").click(function(){
		User.createUser();	
	});

	

})(jQuery);