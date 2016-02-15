<?php
include("config.php");
$link = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");
$data = array();
$action = mysqli_real_escape_string($link,$_GET['action']);
$uid = mysqli_real_escape_string($link,$_GET['uid']);
$event = mysqli_real_escape_string($link,$_GET['event']);
if ($action == 'in') {
	switch ($event) {
		case 'boombox_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','boombox')");
			break;
		case 'respawn_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','respawn')");
			break;
		case 'bestengineer_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','bestengineer')");
			break;
		case 'bashemup_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','bashemup')");
			break;
		case 'maestro_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','maestro')");
			break;
		case 'swatthebug_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','swatthebug')");
			break;
		case 'hackerjack_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','hackerjack')");
			break;
		case 'langx_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','langx')");
			break;
		case 'codezilla_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','codezilla')");
			break;
		case 'codeswap_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','codeswap')");
			break;
		case 'sidhandics_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','sidhandics')");
			break;
		case 'startaction_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','startaction')");
			break;
		case 'mrcad_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','mrcad')");
			break;
		case 'shutterbug_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','shutterbug')");
			break;
		case 'highq_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','highq')");
			break;
		case 'contraption_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','contraption')");
			break;
		case 'crossfire_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','crossfire')");
			break;
		case 'pirate_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','pirate')");
			break;
		case 'mysteriarch_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','mysteriarch')");
			break;
		case 'hudrolaunch_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','hudrolaunch')");
			break;
		case 'disco_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','disco')");
			break;
		case 'cognizance_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','cognizance')");
			break;
		case 'wikisurf_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','wikisurf')");
			break;
		case 'roadies_in':
			$query = mysqli_query($link, "INSERT INTO events (uid, event) VALUES ('$uid','roadies')");
			break;
		default:
			# code...
			break;
	}
	if (!$query) {
	    printf("Error: %s\n", mysqli_error($link));
	    exit();
	}
	if (mysqli_affected_rows($link) == 1) {
		$data['success'] = true;
	} else {
		$data['success'] = false;
	}
} else {
	switch ($event) {
		case 'boombox_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='boombox'");
			break;
		case 'respawn_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='respawn'");
			break;
		case 'bestengineer_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='bestengineer'");
			break;
		case 'bashemup_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='bashemup'");
			break;
		case 'maestro_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='maestro'");
			break;
		case 'swatthebug_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='swatthebug'");
			break;
		case 'hackerjack_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='hackerjack'");
			break;
		case 'langx_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='langx'");
			break;
		case 'codezilla_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='codezilla'");
			break;
		case 'codeswap_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='codeswap'");
			break;
		case 'sidhandics_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='sidhandics'");
			break;
		case 'startaction_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='startaction'");
			break;
		case 'mrcad_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='mrcad'");
			break;
		case 'shutterbug_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='shutterbug'");
			break;
		case 'highq_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='highq'");
			break;
		case 'contraption_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='contraption'");
			break;
		case 'crossfire_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='crossfire'");
			break;
		case 'pirate_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='pirate'");
			break;
		case 'mysteriarch_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='mysteriarch'");
			break;
		case 'hudrolaunch_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='hudrolaunch'");
			break;
		case 'disco_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='disco'");
			break;
		case 'cognizance_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='cognizance'");
			break;
		case 'wikisurf_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='wikisurf'");
			break;
		case 'roadies_out':
			$query_out = mysqli_query($link, "DELETE FROM events WHERE event='roadies'");
			break;
		default:
			# code...
			break;
	}
	if (!$query_out) {
	    printf("Error: %s\n", mysqli_error($link));
	    exit();
	}
	if (mysqli_affected_rows($link) == 1) {
		$data['success'] = true;
	} else {
		$data['success'] = false;
	}
}
echo json_encode($data);
?>