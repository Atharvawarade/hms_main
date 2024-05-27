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

$sql = "SELECT EN, Fullname, email, DOB, gender, student_phone, Add_line_1, Add_line_2, city, state, pincode, Father_no, Mother_no, Gaurdian_no, Blood_group, photo, YOS, branch, section, Batch, room_id, dateOfStatusChange, status FROM student ORDER BY room_id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostelers List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>
<body>
<div class="container mt-4">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $accordionId = "accordionItem" . $row["EN"];
                echo "<div class='accordion-item'>";
                echo "<h2 class='accordion-header' id='heading$i'>";
                echo "<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapse{$row["EN"]}' aria-expanded='false' aria-controls='collapse{$row["EN"]}'>";
                echo "EN: " . $row["EN"] . " | Fullname: " . $row["Fullname"] . " | Room ID: " . $row["room_id"];
                echo "</button>";
                echo "</h2>";
                echo "<div id='collapse{$row["EN"]}' class='accordion-collapse collapse' aria-labelledby='heading$i' data-bs-parent='#accordionPanelsStayOpenExample'>";
                echo "<div class='accordion-body'>";
                echo "<p><strong>EN:</strong> " . $row["EN"] . "</p>";
                echo "<p><strong>Fullname:</strong> " . $row["Fullname"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>DOB:</strong> " . $row["DOB"] . "</p>";
                echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
                echo "<p><strong>Student Phone:</strong> " . $row["student_phone"] . "</p>";
                echo "<p><strong>Address Line 1:</strong> " . $row["Add_line_1"] . "</p>";
                echo "<p><strong>Address Line 2:</strong> " . $row["Add_line_2"] . "</p>";
                echo "<p><strong>City:</strong> " . $row["city"] . "</p>";
                echo "<p><strong>State:</strong> " . $row["state"] . "</p>";
                echo "<p><strong>Pincode:</strong> " . $row["pincode"] . "</p>";
                echo "<p><strong>Father's Phone:</strong> " . $row["Father_no"] . "</p>";
                echo "<p><strong>Mother's Phone:</strong> " . $row["Mother_no"] . "</p>";
                echo "<p><strong>Guardian's Phone:</strong> " . $row["Gaurdian_no"] . "</p>";
                echo "<p><strong>Blood Group:</strong> " . $row["Blood_group"] . "</p>";
                echo "<p><strong>Photo:</strong> <img src='" . $row["photo"] . "' alt='Photo' style='width: 100px; height: 100px;'></p>";
                echo "<p><strong>Year of Study:</strong> " . $row["YOS"] . "</p>";
                echo "<p><strong>Branch:</strong> " . $row["branch"] . "</p>";
                echo "<p><strong>Section:</strong> " . $row["section"] . "</p>";
                echo "<p><strong>Batch:</strong> " . $row["Batch"] . "</p>";
                echo "<p><strong>Room ID:</strong> " . $row["room_id"] . "</p>";
                echo "<p><strong>Date of Status Change:</strong> " . $row["dateOfStatusChange"] . "</p>";
                echo "<p><strong>Status:</strong> " . $row["status"] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                $i++;
            }
        } else {
            echo "<p>No records found</p>";
        }
        $conn->close();
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
