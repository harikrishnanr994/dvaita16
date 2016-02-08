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

function enterEvent(uid, _event) {
	//var event_clicked = document.getElementById(_event);
	var formData = {
			'uid' 				: uid,
			'event' 			: _event,
			'action'			:'in'
		}; 
   $.ajax({
			type 		: 'GET',
			url 		: 'check_event.php',
			data 		: formData,
			dataType 	: 'json',
			encode 		: true
		})
			.done(function(data) {
				console.log(data); 
				if ( ! data.success) {

				} else {
					switch (_event) { 
						case 'boombox_in': 
							$('#boombox_in').fadeIn().hide();
							$('#boombox_out').fadeIn().show();
							$('#boombox_pay').fadeIn().show();
							break;
						case 'respawn_in': 
							$('#respawn_in').fadeIn().hide();
							$('#respawn_out').fadeIn().show();
							break;
						case 'mootools': 
							alert('mootools Wins!');
							break;		
						case 'dojo': 
							alert('dojo Wins!');
							break;
						default:
							alert('Nobody Wins!');
					}
				}
			})

			.fail(function(data) {
				console.log(data);
			});
}