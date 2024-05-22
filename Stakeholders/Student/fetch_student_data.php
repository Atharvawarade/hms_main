<?php
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

// Fetch student data
$enrollment_no = 'EN21107544'; // This should be dynamic based on logged-in user
$sql = "SELECT * FROM student WHERE EN = '$enrollment_no'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $student = $result->fetch_assoc();
} else {
    echo "0 results";
}

$conn->close();
?>
