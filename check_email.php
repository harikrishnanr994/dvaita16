<?php

include("config.php");
$link = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");

$email = mysqli_real_escape_string($link,$_POST['email']);
$query = mysqli_query($link, "Select count(*) from users where email='$email'");

    $row = mysqli_fetch_row($query);
    $count = $row[0];
	    if($count>0) echo "<span class='status-not-available alert alert-danger'> This email is already registered with us!</span>";
		else echo "";