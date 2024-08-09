<?php
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

// Get POST data
$en = $_POST['en'];
$status = $_POST['status'];

// Prepare and execute SQL query to update status
$sql = "UPDATE student SET status = ? WHERE EN = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $status, $en);

if ($stmt->execute()) {
    echo "Status updated successfully.";
} else {
    echo "Error updating status: " . $conn->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
