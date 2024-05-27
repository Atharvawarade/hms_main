
<?php
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "hms"; // Replace with your database name


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $month = $_POST['month'];
    $year = date("Y"); // Current year
    $dateAndTimeOfUpload = date("Y-m-d H:i:s"); // Current timestamp
    $hostel = "your_hostel"; // Define how you get the hostel information

    // Directory where the file will be saved
    $targetDir = "../../Attendance/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    // Check if the file is a valid CSV
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    if($fileType == 'csv') {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert file information into the database
            $stmt = $conn->prepare("INSERT INTO attendance_files (year, month, Date_and_time_of_upload, hostel, file) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issss", $year, $month, $dateAndTimeOfUpload, $hostel, $targetFilePath);

            if ($stmt->execute()) {
                echo "The file " . htmlspecialchars($fileName) . " has been uploaded successfully.";
                header("Location: Warden-Dashboard.html");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file."; 
        }
    } else {
        echo "Sorry, only CSV files are allowed.";
    }
}

$conn->close();
?>
