<?php
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

$sql = "SELECT EN, Fullname, room_id FROM student ORDER BY room_id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostelers List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <style>
        .table-container {
            max-height: 400px; /* Adjust height as needed */
            overflow-y: auto;
        }
        .table thead {
            position: sticky;
            top: 0;
            background-color: #343a40; /* Dark color for the header */
            color: white;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <div class="table-responsive table-container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>EN</th>
                    <th>Fullname</th>
                    <th>Room ID</th>
                    <th>Profile</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["EN"]. "</td>";
                        echo "<td>" . $row["Fullname"]. "</td>";
                        echo "<td>" . $row["room_id"]. "</td>";
                        echo "<td class='text-center'><div class='d-flex justify-content-center'><button class='btn btn-primary profile'>View</button></div></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
