$(document).ready(function() {
	$('#boombox_cancel').click(function(e) {
		$('#verify_boombox').fadeIn().hide();
		$('#boombox_pay').fadeIn().show();
	})
	$('#sidhandics_cancel').click(function(e) {
		$('#verify_sidhandics').fadeIn().hide();
		$('#sidhandics_pay').fadeIn().show();
	})
	$('#startaction_cancel').click(function(e) {
		$('#verify_startaction').fadeIn().hide();
		$('#startaction_pay').fadeIn().show();
	})
	/*$('#boombox_pay').click(function(e) {
		$('#verify_boombox').fadeIn().show();
		$('#boombox_pay').fadeIn().hide();
	})
	$('#sidhandics_pay').click(function(e) {
		$('#verify_sidhandics').fadeIn().show();
		$('#sidhandics_pay').fadeIn().hide();
	})
	$('#startaction_pay').click(function(e) {
		$('#verify_startaction').fadeIn().show();
		$('#startaction_pay').fadeIn().hide();
	})*/

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

$('#verify_boombox').submit(function(event) {
		event.preventDefault();

		$.ajax({
			type 		: 'POST',
			url 		: 'verify_pay.php',
			data 		: $("#verify_boombox").serialize(),
			dataType 	: 'json',
			encode 		: true
		})
			.done(function(data) {
				console.log(data); 
				if ( ! data.success) {
				} else {
					$('#verify_boombox').fadeIn().hide();
					$('#boombox_pay').fadeIn().hide();
					$('#boombox_out').fadeIn().hide();
					$('#regd-bb').fadeIn().show();
				}
			})

			.fail(function(data) {
				console.log(data);
			});

		
	});

$('#verify_sidhandics').submit(function(event) {
		event.preventDefault();

		$.ajax({
			type 		: 'POST',
			url 		: 'verify_pay.php',
			data 		: $("#verify_sidhandics").serialize(),
			dataType 	: 'json',
			encode 		: true
		})
			.done(function(data) {
				console.log(data); 
				if ( ! data.success) {
				} else {
					$('#verify_sidhandics').fadeIn().hide();
					$('#sidhandics_pay').fadeIn().hide();
					$('#sidhandics_out').fadeIn().hide();
					$('#regd-sd').fadeIn().show();
				}
			})

			.fail(function(data) {
				console.log(data);
			});

		
	});
$('#verify_startaction').submit(function(event) {
		event.preventDefault();

		$.ajax({
			type 		: 'POST',
			url 		: 'verify_pay.php',
			data 		: $("#verify_startaction").serialize(),
			dataType 	: 'json',
			encode 		: true
		})
			.done(function(data) {
				console.log(data); 
				if ( ! data.success) {
				} else {
					$('#verify_startaction').fadeIn().hide();
					$('#startaction_pay').fadeIn().hide();
					$('#startaction_out').fadeIn().hide();
					$('#regd-sa').fadeIn().show();
				}
			})

			.fail(function(data) {
				console.log(data);
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
						case 'bestengineer_in': 
							$('#bestengineer_in').fadeIn().hide();
							$('#bestengineer_out').fadeIn().show();
							break;
						case 'bashemup_in':
							$('#bashemup_in').fadeIn().hide();
							$('#bashemup_out').fadeIn().show();
							break;
						case 'maestro_in': 
							$('#maestro_in').fadeIn().hide();
							$('#maestro_out').fadeIn().show();
							break;
						case 'swatthebug_in': 
							$('#swatthebug_in').fadeIn().hide();
							$('#swatthebug_out').fadeIn().show();
							break;
						case 'hackerjack_in': 
							$('#hackerjack_in').fadeIn().hide();
							$('#hackerjack_out').fadeIn().show();
							break;
						case 'langx_in': 
							$('#langx_in').fadeIn().hide();
							$('#langx_out').fadeIn().show();
							break;		
						case 'codezilla_in': 
							$('#codezilla_in').fadeIn().hide();
							$('#codezilla_out').fadeIn().show();
							break;
						case 'codeswap_in': 
							$('#codeswap_in').fadeIn().hide();
							$('#codeswap_out').fadeIn().show();
							break;
						case 'sidhandics_in': 
							$('#sidhandics_in').fadeIn().hide();
							$('#sidhandics_out').fadeIn().show();
							$('#sidhandics_pay').fadeIn().show();
							break;
						case 'startaction_in': 
							$('#startaction_in').fadeIn().hide();
							$('#startaction_out').fadeIn().show();
							$('#startaction_pay').fadeIn().show();
							break;		
						case 'mrcad_in': 
							$('#mrcad_in').fadeIn().hide();
							$('#mrcad_out').fadeIn().show();
							break;
						case 'shutterbug_in': 
							$('#shutterbug_in').fadeIn().hide();
							$('#shutterbug_out').fadeIn().show();
							break;
						case 'highq_in': 
							$('#highq_in').fadeIn().hide();
							$('#highq_out').fadeIn().show();
							break;
						case 'contraption_in': 
							$('#contraption_in').fadeIn().hide();
							$('#contraption_out').fadeIn().show();
							break;		
						case 'crossfire_in': 
							$('#crossfire_in').fadeIn().hide();
							$('#crossfire_out').fadeIn().show();
							break;
						case 'pirate_in': 
							$('#pirate_in').fadeIn().hide();
							$('#pirate_out').fadeIn().show();
							break;
						case 'mysteriarch_in': 
							$('#mysteriarch_in').fadeIn().hide();
							$('#mysteriarch_out').fadeIn().show();
							break;
						case 'hudrolaunch_in': 
							$('#hudrolaunch_in').fadeIn().hide();
							$('#hudrolaunch_out').fadeIn().show();
							break;		
						case 'disco_in': 
							$('#disco_in').fadeIn().hide();
							$('#disco_out').fadeIn().show();
							break;
						case 'cognizance_in': 
							$('#cognizance_in').fadeIn().hide();
							$('#cognizance_out').fadeIn().show();
							break;
						case 'wikisurf_in': 
							$('#wikisurf_in').fadeIn().hide();
							$('#wikisurf_out').fadeIn().show();
							break;
						case 'roadies_in': 
							$('#roadies_in').fadeIn().hide();
							$('#roadies_out').fadeIn().show();
							break;
						default:
					}
				}
			})

			.fail(function(data) {
				console.log(data);
			});
}

function exitEvent(uid, _event) {
	//var event_clicked = document.getElementById(_event);
	var formData = {
			'uid' 				: uid,
			'event' 			: _event,
			'action'			:'out'
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
						case 'boombox_out': 
							$('#boombox_in').fadeIn().show();
							$('#boombox_out').fadeIn().hide();
							$('#boombox_pay').fadeIn().hide();
							break;
						case 'respawn_out': 
							$('#respawn_in').fadeIn().show();
							$('#respawn_out').fadeIn().hide();
							break;
						case 'bestengineer_out': 
							$('#bestengineer_in').fadeIn().show();
							$('#bestengineer_out').fadeIn().hide();
							break;
						case 'bashemup_out':
							$('#bashemup_in').fadeIn().show();
							$('#bashemup_out').fadeIn().hide();
							break;
						case 'maestro_out': 
							$('#maestro_in').fadeIn().show();
							$('#maestro_out').fadeIn().hide();
							break;
						case 'swatthebug_out': 
							$('#swatthebug_in').fadeIn().show();
							$('#swatthebug_out').fadeIn().hide();
							break;
						case 'hackerjack_out': 
							$('#hackerjack_in').fadeIn().show();
							$('#hackerjack_out').fadeIn().hide();
							break;
						case 'langx_out': 
							$('#langx_in').fadeIn().show();
							$('#langx_out').fadeIn().hide();
							break;		
						case 'codezilla_out': 
							$('#codezilla_in').fadeIn().show();
							$('#codezilla_out').fadeIn().hide();
							break;
						case 'codeswap_out': 
							$('#codeswap_in').fadeIn().show();
							$('#codeswap_out').fadeIn().hide();
							break;
						case 'sidandhics_out': 
							$('#sidandhics_in').fadeIn().show();
							$('#sidandhics_out').fadeIn().hide();
							$('#sidandhics_pay').fadeIn().hide();
							break;
						case 'startaction_out': 
							$('#startaction_in').fadeIn().show();
							$('#startaction_out').fadeIn().hide();
							$('#startaction_pay').fadeIn().hide();
							break;		
						case 'mrcad_out': 
							$('#mrcad_in').fadeIn().show();
							$('#mrcad_out').fadeIn().hide();
							break;
						case 'shutterbug_out': 
							$('#shutterbug_in').fadeIn().show();
							$('#shutterbug_out').fadeIn().hide();
							break;
						case 'highq_out': 
							$('#highq_in').fadeIn().show();
							$('#highq_out').fadeIn().hide();
							break;
						case 'contraption_out': 
							$('#contraption_in').fadeIn().show();
							$('#contraption_out').fadeIn().hide();
							break;		
						case 'crossfire_out': 
							$('#crossfire_in').fadeIn().show();
							$('#crossfire_out').fadeIn().hide();
							break;
						case 'pirate_out': 
							$('#pirate_in').fadeIn().show();
							$('#pirate_out').fadeIn().hide();
							break;
						case 'mysteriarch_out': 
							$('#mysteriarch_in').fadeIn().show();
							$('#mysteriarch_out').fadeIn().hide();
							break;
						case 'hudrolaunch_out': 
							$('#hudrolaunch_in').fadeIn().show();
							$('#hudrolaunch_out').fadeIn().hide();
							break;		
						case 'disco_out': 
							$('#disco_in').fadeIn().show();
							$('#disco_out').fadeIn().hide();
							break;
						case 'cognizance_out': 
							$('#cognizance_in').fadeIn().show();
							$('#cognizance_out').fadeIn().hide();
							break;
						case 'wikisurf_out': 
							$('#wikisurf_in').fadeIn().show();
							$('#wikisurf_out').fadeIn().hide();
							break;
						case 'roadies_out': 
							$('#roadies_in').fadeIn().show();
							$('#roadies_out').fadeIn().hide();
							break;
						default:
					}
				}
			})

			.fail(function(data) {
				console.log(data);
			});
}