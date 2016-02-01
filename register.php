<?php

include("config.php");
$link = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");

$errors = array();
$data = array(); 

$name = mysqli_real_escape_string($link,$_POST['name']);
$pwd = mysqli_real_escape_string($link,$_POST['pwd']);
$cpwd = mysqli_real_escape_string($link,$_POST['cpwd']);
$college = mysqli_real_escape_string($link,$_POST['college']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$phone = mysqli_real_escape_string($link,$_POST['phone']);
$accom = isset($_POST['accom']) ? mysqli_real_escape_string($link,$_POST['accom']) : 'no'; 
$gender =  mysqli_real_escape_string($link,$_POST['gender']);
  
$activation = md5(uniqid(rand(), true));
$activated = "0";
$bool = true;

function hashSSHA($password) {
    $salt = sha1(rand());
    $salt = substr($salt, 0, 10);
    $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
    $hash = array("salt" => $salt, "encrypted" => $encrypted);
    return $hash;
}

if($pwd == $cpwd) { 
    $id = mysqli_query($link, "Select *  from users ORDER BY id DESC limit 1 ");
    $row = mysqli_fetch_array($id);
    $uid=$row['id'];
     
    $uid++;
    $uuid="D16".$uid;
    $query = mysqli_query($link, "Select * from users");

    while($row = mysqli_fetch_array($query)) {
      	$table_users = $row['email']; 
	      	if($email == $table_users) {
	      		$bool = false;
	      $errors['email']= 'This email is already registered with us!';
	    }
	}
    
	if($bool) {
	    $hash = hashSSHA($pwd);
	    $encrypted_password = $hash["encrypted"];
	    $salt = $hash["salt"];
	      
	    mysqli_query($link, "INSERT INTO users (uid, name, password, salt, email, mobile, college, accommodation, activation, activated, gender) VALUES ('$uuid','$name','$encrypted_password','$salt','$email','$phone','$college','$accom','$activation','$activated','$gender')"); 

	    if (mysqli_affected_rows($link) == 1) {
	    	// Send the email:
                $message = " To activate your account, please click on this link:\n\n";
                $message .= WEBSITE_URL . '/activate.php?email=' . urlencode($Email) . "&key=$activation";
                mail($Email, 'Registration Confirmation', $message, 'From:'.EMAIL);
 
            } else { // If it did not run OK.
            	$errors['mail']= 'You could not be registered due to a system error. We apologize for any inconvenience.';
            }

	        $data['success'] = true;
	        $data['message'] = 'Success!';
	    }
	    else {
	        $data['success'] = false;
		    $data['errors']  = $errors;
	    }
	}
	echo json_encode( $data );
}
?>