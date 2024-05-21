<?php
// Database connection
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

// Fetch students with status "paid"
$sql = "SELECT EN,Fullname,branch FROM student WHERE status = 'paid'";
$result = $conn->query($sql);

$students = array();
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

// Close connection
$conn->close();

// Return JSON response
header('Content-Type: application/json');
echo json_encode($students);
?>
