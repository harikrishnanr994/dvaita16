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
					if (data.errors) {
						$('#error-login').fadeIn().show();
						if (data.errors.pwd) {
						$('#error-login').append('<div class="alert alert-danger">' + data.errors.pwd + '</div>');
					}

					if (data.errors.email) {
						$('#error-login').append('<div class="alert alert-danger">' + data.errors.email + '</div>');
					}
					if (data.errors.act) {
						$('#error-login').append('<div class="alert alert-danger">' + data.errors.act + '</div>');
					}

					}
				} else {
					$("#message-login").fadeIn().show();
				    $("#reg-form")[0].reset();
				    window.location.replace("index.php");
				}
			})
			.fail(function(data) {
				$("#errors-login").fadeIn().show();
				console.log(data);
			});
	});

});