<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data based on PRN
if (isset($_GET['prn'])) {
    $prn = $_GET['prn'];
    $sql = "SELECT * FROM candidates WHERE Application_ID = '$prn'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the first row (assuming Application_ID is unique)
        $row = $result->fetch_assoc();
        $data = array(
            'fullname' => $row['Candidate_Name'],
            'fathername' => $row['Father_Name'],
            'phone' => $row['Mobile_No'],
            'email' => $row['E_Mail_ID'],
            'category' => $row['Category'],
            'course' => $row['Course_Name'],
            // 'DOB' => '', // Assign a default value (empty string)
            // 'gender' => '', // Assign a default value (empty string)
            // 'address1' => '', // Assign a default value (empty string)
            // 'address2' => '', // Assign a default value (empty string)
            // 'city' => '', // Assign a default value (empty string)
            // 'state' => '', // Assign a default value (empty string)
            // 'Pincode' => '', // Assign a default value (empty string)
            // 'fathermobile' => '', // Assign a default value (empty string)
            // 'mothermobile' => '', // Assign a default value (empty string)
            // 'gaurdianmobile' => '', // Assign a default value (empty string)
            // 'BloodGroup' => '' // Assign a default value (empty string)
        );
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'Data not found'));
    }
} else {
    echo json_encode(array('error' => 'PRN parameter not provided'));
}

$conn->close();
// comment for update