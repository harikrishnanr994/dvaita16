 <?php
include("config.php");
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");
if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $_GET['email']))
{
    $email = $_GET['email'];
}
if (isset($_GET['key']) && (strlen($_GET['key']) == 32))//The Activation key will always be 32 since it is MD5 Hash
{
    $key = $_GET['key'];
}

$query = mysqli_query($mysqli, "Select * from users WHERE email='$email'");
while($row = mysqli_fetch_assoc($query)) // display all rows from query
       {$activated=$row['activated'];
        }
if (isset($email) && isset($key))
{
   if($activated==1) {
        header("location: activated.php?id=aact");
    }
    else{
    $query_activate_account = "UPDATE users SET activation=NULL,activated=1 WHERE(email ='$email' AND activation='$key')LIMIT 1";

    
    $result_activate_account = mysqli_query($mysqli, $query_activate_account) ;
    

    if (mysqli_affected_rows($mysqli) == 1)
    {
        header("location: activated.php?id=act");
    } else
    {
        header("location: activated.php?id=nact");

    }
}
    mysqli_close($mysqli);

} else {
        echo '<div class="errormsgbox">Error Occured .</div>';
}


?>