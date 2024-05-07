
<?php

// MySQL database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hms';

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Path to your CSV file
$csvFile = '../UploadedData/candidates.csv';

// Open the CSV file
$file = fopen($csvFile, 'r');

// Skip the header row
fgetcsv($file);

// Loop through the remaining rows and insert data into MySQL
while (($data = fgetcsv($file)) !== false) {
    $sql = "INSERT INTO Candidates (Application_ID, Candidate_Name, Father_Name, Mobile_No, E_Mail_ID, Category, Course_Name) VALUES ('" . implode("', '", $data) . "')";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

// Close the file and database connection
fclose($file);
$conn->close();
