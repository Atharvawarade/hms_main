<?php
// Database configuration
define('DB_HOST', 'localhost'); // e.g., 'localhost'
define('DB_USER', 'root'); // e.g., 'root'
define('DB_PASS', ''); // e.g., 'password'
define('DB_NAME', 'hms'); // e.g., 'hms'

// Establish a database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
