<?php
// MySQL database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // assuming empty password
$database = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query for hostel 1
$query_hostel_1 = "SELECT count(*) AS count FROM alloted 
                   WHERE room_id IN (SELECT room_id FROM room WHERE hostel_id = 1) 
                   AND student_id IS NULL";
$result_hostel_1 = $conn->query($query_hostel_1);
$row_hostel_1 = $result_hostel_1->fetch_assoc();
$count_hostel_1 = $row_hostel_1['count'];

// Query for hostel 2
$query_hostel_2 = "SELECT count(*) AS count FROM alloted 
                   WHERE room_id IN (SELECT room_id FROM room WHERE hostel_id = 2) 
                   AND student_id IS NULL";
$result_hostel_2 = $conn->query($query_hostel_2);
$row_hostel_2 = $result_hostel_2->fetch_assoc();
$count_hostel_2 = $row_hostel_2['count'];

// Calculate percentages
$total_rows = $count_hostel_1 + $count_hostel_2;
$percentage_hostel_1 = round((($count_hostel_1 / 120) * 100),2);
$percentage_hostel_2 = round((($count_hostel_2 / 120) * 100),2);

// Close connection
$conn->close();
?>
