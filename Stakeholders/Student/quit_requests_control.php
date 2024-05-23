<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['EN'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the confirmation button is clicked and both checkboxes are checked
    if (isset($_POST['confirmation']) && $_POST['confirmation'] === 'clicked' && isset($_POST['returnFurniture']) && isset($_POST['payFees'])) {
        // Include database connection
        include 'db_connection.php'; // Adjust the path according to your file structure

        // Get EN from session
        $EN = $_SESSION['EN'];

        // Escape user inputs for security
        $warden_status = 'Pending';
        $accountant_status = 'Pending';

        // Prepare SQL statement to insert data into quit_requests table
        $sql = "INSERT INTO quit_requests (EN, warden_status, accountant_status) VALUES ('$EN', '$warden_status', '$accountant_status')";

        if (mysqli_query($conn, $sql)) {
            // Redirect to a success page or display a success message
            header("Location: quit_request_success.php");
            exit();
        } else {
            // Handle database error
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
    } else {
        // Redirect back to the form page or display an error message
        header("Location: quit_request_error.php");
        exit();
    }
} else {
    // Redirect back to the form page or display an error message
    header("Location: quit_request_error.php");
    exit();
}
?>
