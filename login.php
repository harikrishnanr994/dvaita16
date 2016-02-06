<?php
 require_once("config.php");
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");
session_start();
    $email= mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['pwd']);
    $bool = true;
    $data = array();
    $errors = array(); 
    $error = "";
    $query = mysqli_query($mysqli, "Select * from users WHERE email='$email'"); // Query the users table
    $exists = mysqli_num_rows($query); //Checks if email exists
    $table_users = "";
    $table_password = "";
    $username = "";
    $uuid = "";


    function checkhashSSHA($salt, $password) {

        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }

    if($exists > 0) 
    {
       while($row = mysqli_fetch_assoc($query))
       {
          $table_users = $row['email']; // the first username row is passed on to $table_users, and so on until the query is finished
          $encrypted_password = $row['password']; // the first password row is passed on to $table_password, and so on until the query is finished
          $username = $row['name'];
          $uuid= $row['uid'];
          $salt = $row['salt'];
          $activated=$row['activated'];
          $table_password = checkhashSSHA($salt, $password);
       }
          if($activated==1)
          {
              if($encrypted_password == $table_password)
              {
                 $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
                 $_SESSION['uid'] = $uuid;
                 $data['success'] = true;
                $data['message'] = 'Success!';
              }
              else
              {
                $data['success'] = false;
                $errors['pwd'] = 'Incorrect Password!';
              }
          }
          else
          {
            $data['success'] = false;
            $errors['act'] = 'Activate your account from your e-mail!';
          }
    }
    else
      {
        $data['success'] = false;
        $errors['email'] = 'Incorrect email!';
      }
      $data['errors']  = $errors;
      echo json_encode( $data );
?>