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
    echo $password;

    $dept =  $_POST['Dept'];
    $entered_username =  $_POST['username'];
    $entered_password = $_POST['password'];

    $sql = "SELECT * FROM incharges WHERE username = '$entered_username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password']; // Assuming PRN is the stored password

        // Validate PRN only if the email exists in the database
        if ($entered_password == $stored_password) {
            // Passwords match, login successful
            $_SESSION['loggedin'] = true;
            if ($row['username'] == 'WARDB01') {
                $_SESSION['WardenId'] = 1;
            } else  if ($row['username'] == 'WARDG01') {
                $_SESSION['WardenId'] = 2;
            }
            // $_SESSION['email'] = $entered_email;
            // $_SESSION['EN'] = $entered_password;
            // echo "<pre>";
            // echo "Session Variables after Login:<br>";
            // print_r($_SESSION);
            // echo "</pre>";
            header("Location:../Stakeholders/Warden/Warden-Dashboard.html");
            // header("Location: ../Student_Dash/Dashboard.php");
            exit;
        } else {
            echo "Incorrect password!";
        }
    } else {
        header("Location: ../Stakeholders/Warden/Warden-login.html");
    }

    $conn->close();
}
