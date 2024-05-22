<?php
session_start();

// Database configuration
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

// Check if the student is logged in
if (isset($_SESSION['EN'])) {
    $enrollment_no = $_SESSION['EN'];
} else {
    // Redirect to login if not logged in
    header("Location: ../Stakeholders/Student/student-login.html");
    exit();
}

// Fetch student data
$sql = "SELECT * FROM student WHERE EN = '$enrollment_no'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
} else {
    echo "0 results";
}

$conn->close();
?>
