<?php
// Check if the form is submitted
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "hms"; // Replace with your database name

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish a connection to the database

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $prn = $conn->real_escape_string($_POST['prn']);
    $sql = "SELECT * FROM candidates WHERE Application_ID = '$prn'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // 'prn' exists, proceed to insert into 'Student' table

        // Retrieve and sanitize other form data
        $fullname = $conn->real_escape_string($_POST['fullname']);
        $email = $conn->real_escape_string($_POST['email']);
        $DOB = $conn->real_escape_string($_POST['DOB']);
        $gender = $conn->real_escape_string($_POST['gender']);
        $phone = $conn->real_escape_string($_POST['phone']);
        $address1 = $conn->real_escape_string($_POST['address1']);
        $address2 = $conn->real_escape_string($_POST['address2']);
        $city = $conn->real_escape_string($_POST['city']);
        $state = $conn->real_escape_string($_POST['state']);
        $Pincode = $conn->real_escape_string($_POST['Pincode']);
        $fathermobile = $conn->real_escape_string($_POST['fathermobile']);
        $mothermobile = $conn->real_escape_string($_POST['mothermobile']);
        $gaurdianmobile = $conn->real_escape_string($_POST['gaurdianmobile']);
        $BloodGroup = $conn->real_escape_string($_POST['BloodGroup']);
        $YOS = $conn->real_escape_string($_POST['YOS']);
        $Branch = $conn->real_escape_string($_POST['Branch']);
        $Section = $conn->real_escape_string($_POST['Section']);
        
        // // Optional file upload handling for profile photo
        // $profilePhoto = "";
        // if (isset($_FILES['profilephoto']) && $_FILES['profilephoto']['error'] == 0) {
        //     $profilePhoto = $conn->real_escape_string('uploads/' . basename($_FILES['profilephoto']['name']));
        //     move_uploaded_file($_FILES['profilephoto']['tmp_name'], $profilePhoto);
        // }

        // Insert the data into 'Student' table
        $insertSql = "INSERT INTO Student (EN, Fullname, email, DOB, gender, student_phone, Add_line_1, Add_line_2, city, state, pincode, Father_no, Mother_no, Gaurdian_no, Blood_group, YOS, branch, section,room_id) 
                      VALUES ('$prn', '$fullname', '$email', '$DOB', '$gender', '$phone', '$address1', '$address2', '$city', '$state', '$Pincode', '$fathermobile', '$mothermobile', '$gaurdianmobile', '$BloodGroup', '$YOS', '$Branch', '$Section', 2)";

        if ($conn->query($insertSql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    } else {
        // 'prn' does not exist, show an error message
        echo "Error: EN Number not found in the candidates table.";
    }

    // Close connection
    $conn->close();
}
?>