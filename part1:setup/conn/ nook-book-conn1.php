<?php
//* print_r($_POST); //*shows post array for each submitted form

//* Initializing variables so it will be defined 
$servername = "localhost";
$username = "user_name";
$password = "pass12324";
$database = "db_name";

//* conn to created datsbase
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
