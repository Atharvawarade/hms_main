<?php
session_start();

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "hms"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    $sql = "SELECT * FROM incharges WHERE username = '$entered_username' AND username LIKE 'ACCNT%'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password']; 

        if ($entered_password == $stored_password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['accountant_login'] = true;
            $_SESSION['username'] = $entered_username;
            $_SESSION['EN'] = $entered_password;
            header("Location: ../Stakeholders/Accountant/Accountant_Dashboard.php");
            exit;
        } else {
            echo "Incorrect password!";
        }
    } else {
        header("Location: ../Stakeholders/Accountant/accountant-login.html");
    }

    $conn->close();
}
?>
