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
						$('#errors-login').append('' + data.errors + '');
					}
				} else {
					$("#message-login").fadeIn().show();
				    $("#reg-form")[0].reset();
				    window.location.replace("http://www.dvzita16.com");
				}
			})
			.fail(function(data) {
				$("#errors-login").fadeIn().show();
				console.log(data);
			});
	});

});