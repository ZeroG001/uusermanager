(function($) {

	// ======================== //
	// 		Config Variables    //
	// ======================== //

	var s = {
		"droot" : "64.9.203.51/MyWebLinks",
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

		console.log("Results from serialToObj()")
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
					alert(" Did not recieve search results fast enough or unable to contact database on REOWEB02 ");
   				}

			});	


		},

		editUser: function( url ) {

			//ajax. update user user based on ID. Were going to update all of the data. Kinda depends on what the company database is looking like.

			$.ajax({

				type: "GET",
				url	: url,

				beforeSend : function(){
					$('.actions-form-status').html('<img class="loading-image" src="img/loading.png"> <span>Fetching info...</span>');
				},

				success	: function( results ) {
					var json_result =  $($.parseHTML( results )).filter("#ajax-results").text();

					console.log("JSON Returned from User was");
					console.log(json_result);

					json = JSON.parse(json_result);
					
					document.getElementById("form-template").reset();
					$('.form-area').show();

					//	EDIT User Form Elements
					// ===============================================

					setTimeout(function(){
						$('.actions-form-status').html("Editing User - " + json.FirstName + " " + json.LastName);

					

					$('.user-form #FirstName').val(json.FirstName);
					$('.user-form #LastName').val(json.LastName);
					$('.user-form #UserID').val(json.UserID);

					if ( json.OfficeID ) {
						$('.user-form #OfficeID option[value='+json.OfficeID+'] ').prop("selected", true);
					}
					
					$('.user-form #EmailAdd').val(json.EmailAdd);
					$('.user-form #payNumber').val(json.payNumber);
					$('.user-form #PWD').val(json.PWD);
					$('.user-form #dateEntered').val(json.dateEntered);


					if ( json.Role ) {
						$('.user-form #Role option[value='+json.Role+'] ').prop("selected", true);
					}

					$('.user-form #User1').val(json.User1);
					$('.user-form #AssociateCell').val(json.AssociateCell);

					$('.user-form #pkeyid').val(json.pkeyid); // PRIMARY KEY IN DATABASE

					if ( json.inactive == "0" ) {

						$('.user-form #user-active').prop('checked', true);
						
					} else if(json.inactive == "1") {

						$('.user-form #user-inactive').prop('checked', true);
					}
					// ===============================================

				}, 1000); // SetTimeout Function End

					/* This section declares the action of the form */
					$('.user-form').attr("action", "http://"+s.droot+"/uusermanager/actions/update.cfm");
	
			},

				error: function(){
					$(".alert").html("<h1> It Didn't work! </h1>");
				}

			});
		},

		createUser:	function( data ) {

			//ajax create a new user. You better check if that person already exists.
			//check if the data is an object and that it has certain fields

			document.getElementById("form-template").reset();
			$('.form-area').show();
			$('.actions-form-status').html("New User");
			$('.user-form').attr("action", "http://"+s.droot+"/uusermanager/actions/create.cfm");
			
		}

	}; //end user object


	// ========================================================== //
	// 						Main event							  //
	// ========================================================== //

	// When user submits form then send data over to eaither update.cfm or create.cfm

	$('#date-entered').val(s.date);

	// CREATE OR EDIT USER

	$('form.user-form').submit( function( event ) {
				event.preventDefault();
				var items = $( this ).serializeArray();
				var data  = serialToObj( items );
	
				$.ajax({

					type: "POST",
					url	: $(".user-form").attr("action"),
					data: data,
					timeout : 2000,

					beforeSend : function(){
						$('.actions-form-status').html('<img class="loading-image" src="img/loading.png"> <span>Performing Action...</span>');
					},

					success: function( data ){

						$(".actions-form-status").html(data);
					},

					error: function() {

						$(".actions-form-status").html("Span Timeout");
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