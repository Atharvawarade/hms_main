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

// Check if the student ID is provided
if (isset($_POST['student_id'])) {
    $student_id = $_POST['student_id'];

    // Update the student's status to "paid and approved"
    $sql = "UPDATE student SET status = 'paid and approved' WHERE EN = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to update status"]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid student ID"]);
}

$conn->close();
?>
