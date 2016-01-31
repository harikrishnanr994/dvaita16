$(document).ready(function() {

	$('#reg-form').submit(function(event) {
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();

		$('.form-group').removeClass('has-error');
		$('.help-block').remove();

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'process.php', // the url where we want to POST
			data 		: $("#reg-form").serialize(), // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data); 

				// here we will handle errors and validation messages
				if ( ! data.success) {
					
					// handle errors for email ---------------
					if (data.errors.email) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}

				} else {

					$("#message").fadeIn().show(); //show confirmation message
				    $("#reg-form")[0].reset();
				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

		
	});

});