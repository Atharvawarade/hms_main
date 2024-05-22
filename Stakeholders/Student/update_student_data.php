<?php
// Database configuration
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

// Fetch updated data from the form
$enrollment_no = 'EN21107544'; // This should be dynamic based on logged-in user
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$student_phone = $_POST['student_phone'];
$Add_line_1 = $_POST['Add_line_1'];
$Add_line_2 = $_POST['Add_line_2'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$status = $_POST['status'];
$Father_no = $_POST['Father_no'];
$Mother_no = $_POST['Mother_no'];
$Gaurdian_no = $_POST['Gaurdian_no'];
$Blood_group = $_POST['Blood_group'];
$YOS = $_POST['YOS'];
$branch = $_POST['branch'];
$section = $_POST['section'];
$Room_id = $_POST['room_id'];

// Update the student data in the database
$sql = "UPDATE student SET 
    email='$email', 
    DOB='$DOB', 
    gender='$gender', 
    student_phone='$student_phone', 
    Add_line_1='$Add_line_1', 
    Add_line_2='$Add_line_2', 
    city='$city', 
    state='$state', 
    pincode='$pincode', 
    status='$status', 
    Father_no='$Father_no', 
    Mother_no='$Mother_no', 
    Gaurdian_no='$Gaurdian_no', 
    Blood_group='$Blood_group', 
    YOS='$YOS', 
    branch='$branch', 
    section='$section', 
    Room_id='$Room_id' 
    WHERE EN='$enrollment_no'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

// Redirect back to the profile page
header("Location: student_profile.php");
exit();
?>
