<?php
include '../../php/connection/connect.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$application_id = $_POST['application_id'];
$candidate_name = $_POST['candidate_name'];
$father_name = $_POST['father_name'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];
$category = $_POST['category'];
$course_name = $_POST['course_name'];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO candidates (Application_ID, Candidate_Name, Father_Name, Mobile_No, E_Mail_ID, Category, Course_Name) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $application_id, $candidate_name, $father_name, $mobile_no, $email, $category, $course_name);

// Execute the statement and store the result
if ($stmt->execute()) {
    $message = "Registration successful!";
    $message_type = "success";
} else {
    $message = "Error: " . $stmt->error;
    $message_type = "error";
}

// Close the statement and connection
$stmt->close();
$conn->close();

// Redirect back to the form page with the message
header("Location: Main_dashboard_accnt.php");
exit();
