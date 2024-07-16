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

    $dept = $_POST['Dept'];
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    $valid_prefix = ($dept === 'boys' && strpos($entered_username, 'WARDB') === 0) ||
                    ($dept === 'girls' && strpos($entered_username, 'WARDG') === 0);

    if (!$valid_prefix) {
        header("Location: ../Stakeholders/Warden/Warden-login.html");
        exit;
    }

    $sql = "SELECT * FROM incharges WHERE username = '$entered_username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];

        if ($entered_password == $stored_password) {
            $_SESSION['warden_loggedin'] = true;
            $_SESSION['username'] = $entered_username; // Store username in session

            if ($row['username'] == 'WARDB01') {
                $_SESSION['WardenId'] = 1;
            } else if ($row['username'] == 'WARDG01') {
                $_SESSION['WardenId'] = 2;
            }
            header("Location: ../Stakeholders/Warden/Warden-Dashboard.php");
            exit;
        } else {
            echo "Incorrect password!";
        }
    } else {
        header("Location: ../Stakeholders/Warden/Warden-login.html");
    }

    $conn->close();
}
