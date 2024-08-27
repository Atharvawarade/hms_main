<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the updated values from the AJAX request
$studentEN = $_SESSION['EN'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$room = $_POST['room'];

// Update student details in the database
$sql = "UPDATE student SET Fullname = ?, email = ?, room_id = ? WHERE EN = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $fullname, $email, $room, $studentEN);

if ($stmt->execute()) {
    echo "Success";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$conn->close();
?>
