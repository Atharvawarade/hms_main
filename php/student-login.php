<?php
session_start();

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "hms"; // Replace with your database name

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $entered_email = $_POST['email'];
    $entered_password = $_POST['password'];

    $sql = "SELECT * FROM student WHERE email = '$entered_email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row['EN']; // Assuming EN is the stored password
        $status = $row['status'];
        $room_id = $row['room_id'];

        // Check if status is "Paid and Approved" and allotment is not null
        if ($status === "paid and approved" && !is_null($room_id)) {
            // Validate PRN only if the email exists in the database
            if ($entered_password == $stored_password) {
                // Passwords match, login successful
                $_SESSION['student_loggedin'] = true;
                $_SESSION['EN'] = $entered_password;
                $_SESSION['email'] = $entered_email; // Store email in session
                header("Location: ../Stakeholders/Student/Student_dashboard.php");
                exit;
            } else {
                $_SESSION['error'] = "Incorrect password!";
            }
        } else {
            $_SESSION['error'] = "Your status is not 'Paid and Approved' or your room has not been assigned!";
        }
    } else {
        $_SESSION['error'] = "Email not found!";
    }

    $conn->close();
    header("Location: ../Stakeholders/Student/student-login.html");
    exit;
}
?>
