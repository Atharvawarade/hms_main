<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "hms";

// Establishing a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetching values from the form
    $start_date = $_POST['start-date'];
    $end_date = $_POST['end-date'];
    $reason = $_POST['reason'];
    
    // Fetching EN from the session
    if (isset($_SESSION['EN'])) {
        $EN = $_SESSION['EN'];
    } else {
        die('Error: Student is not logged in.');
    }

    // Fetching fullname and room_id from student table
    $sql = "SELECT fullname, room_id FROM student WHERE EN = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $EN);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();

    if ($student) {
        $fullname = $student['fullname'];
        $room_id = $student['room_id'];
    } else {
        die('Error: Student record not found.');
    }

    // Inserting values into the leave_requests table
    $sql = "INSERT INTO leave_requests (EN, fullname, room_id, status, start_date, end_date, reason) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $status = 'Pending'; // Setting initial status to 'Pending'
    $stmt->bind_param('sssssss', $EN, $fullname, $room_id, $status, $start_date, $end_date, $reason);

    if ($stmt->execute()) {
        echo 'Leave request submitted successfully.';
        header ("location: Main_dashboard.php");
    } else {
        echo 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo 'Invalid request method.';
}
?>
