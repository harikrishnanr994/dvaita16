<?php
 require_once("config.php");
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");
session_start();
$data = array();
$t_no= mysqli_real_escape_string($mysqli, $_POST['ticket_no']);
$event= mysqli_real_escape_string($mysqli, $_POST['event']);
$uid= mysqli_real_escape_string($mysqli, $_POST['uid']);
$query = mysqli_query($mysqli, "UPDATE events SET ticket_no='$t_no' WHERE uid='$uid' AND event='$event'");
if (mysqli_affected_rows($mysqli) == 1) {
	$data['success'] = true;
	$data['message'] = 'Success!';
} else {
	$data['success'] = false;
}
echo json_encode( $data );
?>