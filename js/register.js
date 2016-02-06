$(document).ready(function() {

	$('#reg-form').submit(function(event) {
		event.preventDefault();

		$('.form-group').removeClass('has-error');
		$('.help-block').remove();

		$.ajax({
			type 		: 'POST',
			url 		: 'register.php',
			data 		: $("#reg-form").serialize(),
			dataType 	: 'json',
			encode 		: true
		})
			.done(function(data) {
				console.log(data); 
				if ( ! data.success) {
					if (data.errors.email) {
						$("#error").fadeIn().show();
						$("#error").html(data);
						$('#email-group').addClass('has-error');
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); 
					}
				} else {
					$("#message").fadeIn().show();
				    $("#reg-form")[0].reset();
				}
			})

			.fail(function(data) {
				console.log(data);
				$("#error").fadeIn().show();
			});

		
	});

});

function checkAvailability() {
    document.getElementById("submit-btn").disabled = true; 
    jQuery.ajax({
        url: "check_email.php",
        data:'email='+$("#email").val(),
        type: "POST",
        success:function(data){
            $("#availability-status").html(data);
            if(data != "") {
                document.getElementById("submit-btn").disabled = true;
            } else {
                document.getElementById("submit-btn").disabled = false;
            }
        },
        error:function (){}
    });
}

/*function checkLength() {
	var len = document.getElementById("phone").lenghth;
	if(len != 10){

	}
}*/