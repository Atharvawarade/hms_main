<?php
// Database connection details
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $applicationID = $conn->real_escape_string($_POST['application_ID']);
    $batch = $conn->real_escape_string($_POST['batch']);
    $candidateName = $conn->real_escape_string($_POST['Candidate_Name']);
    $fatherName = $conn->real_escape_string($_POST['Father_Name']);
    $mobileNo = $conn->real_escape_string($_POST['Mobile_No']);
    $emailID = $conn->real_escape_string($_POST['E_Mail_ID']);
    $category = $conn->real_escape_string($_POST['Category']);
    $courseName = $conn->real_escape_string($_POST['Course_Name']);

    // SQL query to insert data into the candidates table
    $sql = "INSERT INTO candidates (Application_ID, batch, Candidate_Name, Father_Name, Mobile_No, E_Mail_ID, Category, Course_Name)
            VALUES ('$applicationID', '$batch', '$candidateName', '$fatherName', '$mobileNo', '$emailID', '$category', '$courseName')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Successfully Added');
      </script>";
       header("Location: Accountant_Dashboard.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
