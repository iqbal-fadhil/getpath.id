
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "getpath_lp_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$full_name = mysqli_real_escape_string($link, $_REQUEST['full_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$whatsapp = mysqli_real_escape_string($link, $_REQUEST['whatsapp']);
 
// Attempt insert query execution
$sql = "INSERT INTO getbook_registration (full_name, email, whatsapp) VALUES ('$full_name', '$email', '$whatsapp')";
if(mysqli_query($link, $sql))
    {readfile("thankyou_registration.html");
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>