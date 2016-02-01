<?php
    $mysqli = new mysqli("mysql.hostinger.in", "u227242915_eedc", "phacsinc850", "u227242915_eedc");
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    session_start();
    $email= mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $bool = true;

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

    if($exists > 0) //IF there are no returning rows or no existing username
    {
       while($row = mysqli_fetch_assoc($query)) // display all rows from query
       {
          $table_users = $row['email']; // the first username row is passed on to $table_users, and so on until the query is finished
          $encrypted_password = $row['password']; // the first password row is passed on to $table_password, and so on until the query is finished
          $username = $row['name'];
          $uuid= $row['uid'];
          $salt = $row['salt'];
          $activated=$row['activated'];
          $table_password = checkhashSSHA($salt, $password);
       }
       if(($email== $table_users))// checks if there are any matching fields
       {
          if($activated==1)
          {
              if($encrypted_password == $table_password)
              {
                 $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
                 $_SESSION['uid'] = $uuid;
                 header("location: index"); // redirects the user to the authenticated home page
              }
              else
              {
                Print '<script>alert("Incorrect Password!");</script>'; // Prompts the user
                Print '<script>window.location.assign("login");</script>'; // redirects to login.php
              }
          }
          else
          {
            Print '<script>alert("Activate your account in your e-mail!");</script>'; 
 	          header("location: login");
          }
        }
        else
        {
            Print '<script>alert("Incorrect email!");</script>'; // Prompts the user
            Print '<script>window.location.assign("login");</script>'; // redirects to login.php
        }
    }
    else
      {
        Print '<script>alert("Incorrect email!");</script>'; // Prompts the user
        Print '<script>window.location.assign("login");</script>'; // redirects to login.php
      }
?>