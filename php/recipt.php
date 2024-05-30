<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <h1>Payment Receipt</h1>
    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hms";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch payment data from the database
    $studentId = 1; // Replace with the actual student ID
    $sql = "SELECT * FROM student WHERE EN = $studentId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output payment data
        while ($row = $result->fetch_assoc()) {
            echo "<p>Student ID: " . $row["EN"] . "</p>";
            echo "<p>Payment Amount: " . $row["amount"] . "</p>";
            echo "<p>Payment Date: " . $row["payment_date"] . "</p>";
            // Add more fields as needed
        }
    } else {
        echo "No payment records found for the specified student.";
    }

    $conn->close();
    ?>
</body>
</html>