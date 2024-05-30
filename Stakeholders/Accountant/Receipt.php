<?php
// Assuming you get the student data using the EN value from the query parameter
$studentEN = $_GET['EN'];
// Fetch the student data from the database
// Example code (you need to replace it with actual database fetching logic):
// $studentData = fetchStudentData($studentEN);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        /* Add necessary styles for printing the receipt */
    </style>
</head>

<body>
    <div class="receipt">
        <h1>Receipt for EN: <?php echo htmlspecialchars($studentEN); ?></h1>
        <!-- Display student data -->
        <p>Name: John Doe</p>
        <p>Branch: Example Branch</p>
        <p>Date of Admission: 2023-05-20</p>
        <p>Fees Paid: $1000</p>
        <p>Fees Remaining: $500</p>
    </div>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>

</html>
