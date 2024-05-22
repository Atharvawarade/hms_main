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
        
        // Optional file upload handling for profile photo
        function image_upload($img, $prn)
        {
            define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT'] . "/hms/uploads/");

            $tmp_loc = $img['tmp_name'];
            $new_name = $prn . random_int(11111, 99999) . $_POST['Branch'] . $_POST['Section'] . $img['name'];
            $new_loc = UPLOAD_SRC . $new_name;

            if (move_uploaded_file($tmp_loc, $new_loc)) {
                return $new_name; // Return the file name if move is successful
            } else {
                return false; // Return false if move failed
            }
        }


        if (isset($_FILES['profilephoto']) && $_FILES['profilephoto']['error'] === 0) {
            $insertSql = "INSERT INTO Student (EN, Fullname, email, DOB, gender, student_phone, Add_line_1, Add_line_2, city, state, pincode, Father_no, Mother_no, Gaurdian_no, Blood_group, photo, YOS, branch, section) 
            VALUES ('$prn', '$fullname', '$email', '$DOB', '$gender', '$phone', '$address1', '$address2', '$city', '$state', '$Pincode', '$fathermobile', '$mothermobile', '$gaurdianmobile', '$BloodGroup','', '$YOS', '$Branch', '$Section')";
            if ($conn->query($insertSql ) === TRUE) {
                // Move the image now that the database insertion was successful
                $image_path = image_upload($_FILES['profilephoto'], $prn);
                if ($image_path) {
                    // Update the ProfilePhoto field with the image path
                    $sql_update = "UPDATE student SET photo = '$image_path' WHERE EN = '$prn'";
                    if ($conn->query($sql_update) === TRUE) {
                        echo "New record created successfully.";
                        // header("Location: ../error/successful_login.html");
                        exit();
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    echo "Cannot move the file.";
                }
            } else {
                echo "Error: " . $insertSql  . "<br>" . $conn->error;
            }
        }else {
            echo "You are supposed to upload a photo. \n";
        }
    } else {
        // 'prn' does not exist, show an error message
        echo "Error: EN Number not found in the candidates table.";
    }

    // Close connection
    $conn->close();
}
?>