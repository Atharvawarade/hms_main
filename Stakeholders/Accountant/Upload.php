<?php
// Database connection (adjust with your details)
$servername = "localhost";
$username = "root";
$password = ""; // Add your password
$dbname = "hms";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the batch from the form
    $batch = $_POST['batch'];

    // Get the file information
    $file = $_FILES['csvFile'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];

    // Check if there was an error uploading the file
    if ($fileError === 0) {
        // Get the next serial number from the database
        $sql = "SELECT COALESCE(MAX(Sr_no), 0) + 1 AS next_sr_no FROM candidates_csv_files";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $nextSrNo = $row['next_sr_no'];

        // Create a new file name based on batch and serial number
        $newFileName = $batch . '_' . $nextSrNo . '.csv';

        // Define the full path where the file will be stored
        $fileDestination = 'C:/xampp/htdocs/hms/Candidates CSV Files/' . $newFileName;

        // Ensure the directory exists
        if (!is_dir('C:/xampp/htdocs/hms/Candidates CSV Files/')) {
            mkdir('C:/xampp/htdocs/hms/Candidates CSV Files/', 0777, true);
        }

        // Move the file to the destination folder
        if (move_uploaded_file($fileTmpName, $fileDestination)) {
            // Get the current date and time
            $dateTime = date('Y-m-d H:i:s');

            // Insert the file information into the database
            $sql = "INSERT INTO candidates_csv_files (`Date_and _time`, batch, file_path) VALUES ('$dateTime', '$batch', '$fileDestination')";

            $csvFile = $fileDestination;

            // Open the CSV file
            $file = fopen($csvFile, 'r');

            // Skip the header row
            fgetcsv($file);

            // Loop through the remaining rows and insert data into MySQL
            while (($data = fgetcsv($file)) !== false) {
                $sql = "INSERT INTO Candidates (Application_ID, batch,Candidate_Name, Father_Name, Mobile_No, E_Mail_ID, Category, Course_Name) VALUES ('" . implode("', '", $data) . "')";
                if ($conn->query($sql) === FALSE) {
                    echo "Error inserting record: " . $conn->error; 
                } 
            }

            // Close the file and database connection
            fclose($file);

            if ($conn->query($sql) === TRUE) {
               header("Location: Accountant_Dashboard.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "There was an error moving the file.";
        }
    } else {
        echo "There was an error uploading the file.";
    }
}

$conn->close();
?>
