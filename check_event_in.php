<?php

include("config.php");
$link = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");
$i = 0;
$events_array = array();
$uid= mysqli_real_escape_string($link, $_POST['uid']);
$query_events = mysqli_query($link,"Select * from events WHERE uid='$uid'");
while($row_e = mysqli_fetch_array($query_events)) {
    $events_array[$i++] = $row_e['event'];
}
echo json_encode( $events_array );
?>