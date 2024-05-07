<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Sports4users1425*";
$dbname = "sportssite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert form data into database
$sql = "INSERT INTO contactresponses (name, email, phone, message) VALUES ('$name', '$email','$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Successfully sent form!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


