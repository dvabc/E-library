<?php
// Establish a connection to your MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input from the form
$email = $_POST['email'];
$password = $_POST['password'];

// You should hash the password before storing it in the database for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert the user's login information into the database
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

