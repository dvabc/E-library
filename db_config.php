<?php
$servername = "localhost";
$username = "dhruvie"; 
$password = "21042003"; 
$dbname = "Userswp";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
