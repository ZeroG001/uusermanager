(function($) {

	// ======================== //
	// 		Config Variables    //
	// ======================== //

	var s = {
		"droot" : "192.168.1.212",
		"duser" : "/localhost/10.9.0.12",
		"date"	: function() { 
			var date = new Date()
			var fdate = (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear()
			return fdate;
		}
	};

	// ============================================= //
	//					Functions					 //
	// ============================================= //

	// Take All Elements Passed in and serialize the values
	function serialToObj( formInputs ) {

		console.log(formInputs);

		obj = {};

		for ( i = 0; i < formInputs.length; i++ ) {

			console.log(formInputs[i]); // Log the inputs submittd for debugging
			obj[formInputs[i].name] = formInputs[i].value; // Convert searlized items to jobject

		}

		console.log(obj);

		return obj;
	}


	// ==================================================== //
	//  			User Object & Actions                   //
	// ==================================================== //

	var User = {

		searchUser: function( data ){

			if( !data ) {
				alert("Please enter search criteria");
				return false;
			} 
			
			$.ajax({

				type	: "GET",
				url	    : $('.search-form').attr('action'),
				data    : {q: data},
				timeout : 2000,

				beforeSend: function() {
					// Before anything is sent out, disable search button 
     				$(".search-button").prop('disabled', true);
     			},

				success: 	function( results ) {

					// Show results in Search Results area and enable the button

					$(".search-results-wrapper").html( results );
					$(".search-button").prop('disabled', false);

					// If search-results-wrapper link is clicked. run show uuser
					$(".search-results-wrapper a").click(function( event ){

						event.preventDefault();

						//URL is what was in the link. Should contain show.php with USERID
						var url = $( this ).attr( "href" );

						
						User.editUser( url );

						
					});

				},

				error: 	function(JqXHR, testStatus, errorThrown) {

					$(".search-button").prop('disabled', false);
					alert("Timeout! ");
   				}

			});	


		},

		editUser: function( url ) {

			//ajax. update user user based on ID. Were going to update all of the data. Kinda depends on what the company database is looking like.

			$.ajax({

				type: "GET",
				url	: url,

				success	: function( results ) {

					json = JSON.parse( results );
					console.log(json);

					$('.form-area').show();
					$('.user-form #userid').val(json.userid);
					$('.user-form #username').val(json.fname);

					if ( json.inactive == "1" ) {
						$('.user-form #user-active').prop('checked', true);
						
					} else if(json.inactive == "0") {
						$('.user-form #user-inactive').prop('checked', true);
					}

					$('.user-form').attr("action", "http://"+s.droot+"/uusermanager/src/actions/update.php");
	
			},

				error: function(){
					$(".alert").html("<h1> It Didn't work! </h1>");
				}

			});
		},

		createUser:function( data ) {

			//ajax create a new user. You better check if that person already exists.
			//check if the data is an object and that it has certain fields

			document.getElementById("form-template").reset();
			$('.form-area').show();
			$('.user-form').attr("action", "http://"+s.droot+"/uusermanager/src/actions/create.php");
			
		}

	}; //end user object


	// ========================================================== //
	// 						Main event							  //
	// ========================================================== //

	// When user submits form then send data over to eaither update.cfm or create.cfm

	$('#date-entered').val(s.date);

	$('form.user-form').submit( function( event ) {
				event.preventDefault();
				var items = $( this ).serializeArray();
				var data  = serialToObj( items );
	
				$.ajax({

					type: "POST",
					url	: $(".user-form").attr("action"),
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

	// When Search form is submitted then send data to search.cfm

	$("form.search-form").submit(function( event ){
		event.preventDefault();
		var query = $(".search-box").val()
		User.searchUser(query); 
	});


	

})(jQuery);