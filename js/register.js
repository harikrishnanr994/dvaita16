$(document).ready(function() {

	$('#register').submit(function(event) {

		$('.form-group').removeClass('has-error');
		$('.help-block').remove();

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		if($('input[name="security"]').prop('checked')){
			var accom = "yes";
		} else {
			var accom = "no";
		}

		/*var formData = {
			'name' 		: 	$('input[name=name]').val(),
			'email' 	: 	$('input[name=email]').val(),
			'pwd' 		: 	$('input[name=pwd]').val(),
			'cpwd' 		: 	$('input[name=cpwd]').val(),
			'phone' 	: 	$('input[name=phone]').val(),
			'college' 	: 	$('input[name=college]').val(),
			'gender' 	: 	$('input[type="radio"]:checked').val(),
			'accom' 	: 	accom
		};*/

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'process.php', // the url where we want to POST
			data 		: $("#register").serialize(), // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data); 

				// here we will handle errors and validation messages
				if ( ! data.success) {
					
					// handle errors for name ---------------
					if (data.errors.name) {
						$('#name-group').addClass('has-error'); // add the error class to show red input
						$('#name-group').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}

				} else {

					// ALL GOOD! just show the success message!
					$('form').append('<div class="alert alert-success">' + data.message + '</div>');

					// usually after form submission, you'll want to redirect
					// window.location = '/thank-you'; // redirect a user to another page

				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});