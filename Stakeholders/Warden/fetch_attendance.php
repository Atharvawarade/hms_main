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
    error_log("Connection failed: " . $conn->connect_error); // Log the error
    http_response_code(500); // Set the response code to 500 for internal server error
    echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
    exit();
}

// Fetch students with status "paid"
$sql = "SELECT * FROM attendance_files";
$result = $conn->query($sql);

if ($result === false) {
    error_log("SQL error: " . $conn->error); // Log the SQL error
    http_response_code(500); // Set the response code to 500 for internal server error
    echo json_encode(['success' => false, 'message' => 'Database query failed.']);
    $conn->close(); // Ensure the connection is closed before exiting
    exit();
}

$item = array();
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $item[] = $row;
    }
} else {
    // No records found
    $item = [];
}

// Close connection
$conn->close();

// Return JSON response
header('Content-Type: application/json');
echo json_encode(['success' => true, 'data' => $item]);
?>
