$(document).ready(function() {

	$('#login-form').submit(function(event) {
		event.preventDefault();

		$('.form-group').removeClass('has-error');
		$('.help-block').remove();

		$.ajax({
			type 		: 'POST',
			url 		: 'login.php',
			data 		: $("#login-form").serialize(),
			dataType 	: 'json',
			encode 		: true
		})
			.done(function(data) {

				console.log(data); 

				if ( ! data.success) {
					
					if (data.errors.email) {
						$('#email-group').addClass('has-error');
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>');
					}

				} else {

					$("#message").fadeIn().show();
				    $("#reg-form")[0].reset();
				}
			})

			.fail(function(data) {
				$("#errors").fadeIn().show();
				console.log(data);
			});

		
	});

});