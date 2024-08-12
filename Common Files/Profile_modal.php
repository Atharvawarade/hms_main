<?php
// Database connection details
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

// Get the EN from the query string
$studentEN = en;

// Fetch student details based on EN
$sql = "SELECT * FROM student WHERE EN = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $studentEN);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
} else {
    echo "No student found.";
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        .card img{
            margin:5%;
            width:90%;
            height:90%;
        }
        .card{
            background-color: rgba(169,128,232,0);
            border: 1px solid black;
        }
        .card-body .card-head {
            text-align: center;
            font-size: 100%;
        }
        .card-body .card-text {
            font-size: 90%;
            margin-bottom: 5px;
            text-align: left;
        }
        .glass-box {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 20px;
        }
        .glass-box h6 {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .glass-box table {
            width: 100%;
            border-collapse: collapse;
        }
        .glass-box table, .glass-box th, .glass-box td {
            border: 1px solid black;
        }
        .glass-box th, .glass-box td {
            padding: 5px; /* Reduce padding to reduce gap */
            text-align: left;
        }
        .modal-body{
            background-color: rgba(169,128,232,0.16);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 border-end">
                <div class="card">
                    <img src="../uploads/<?php echo $student['photo']; ?>" class="card-img-top card-img-bottom" alt="Student Photo">
                    <div class="card-body">
                        <h5 class="card-head"><?php echo $student['Fullname']; ?></h5>
                        <p class="card-text"><strong>EN : </strong><?php echo $student['EN']; ?></p>
                        <p class="card-text"><strong>Email : </strong><?php echo $student['email']; ?></p>
                        <p class="card-text"><strong>Room No. : </strong><?php echo $student['allotment_id']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="glass-box">
                    <h6>General Information</h6>
                    <table>
                        <tr>
                            <th>Fullname</th>
                            <td><?php echo $student['Fullname']; ?></td>
                        </tr>
                        <tr>
                            <th>Year of Study</th>
                            <td><?php echo $student['YOS']; ?></td>
                        </tr>
                        <tr>
                            <th>Branch</th>
                            <td><?php echo $student['branch']; ?></td>
                        </tr>
                        <tr>
                            <th>Section</th>
                            <td><?php echo $student['section']; ?></td>
                        </tr>
                        <tr>
                            <th>Section</th>
                            <td><?php echo $student['section']; ?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td><?php echo $student['DOB']; ?></td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <td><?php echo $student['Blood_group']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="glass-box">
                    <h6>Contact & Address</h6>
                    <table>
                        <tr>
                            <th>Student Phone</th>
                            <td><?php echo $student['student_phone']; ?></td>
                        </tr>
                        <tr>
                            <th>Father Phone</th>
                            <td><?php echo $student['Father_no']; ?></td>
                        </tr>
                        <tr>
                            <th>Mother Phone</th>
                            <td><?php echo $student['Mother_no']; ?></td>
                        </tr>
                        <tr>
                            <th>Gaurdian Phone</th>
                            <td><?php echo $student['Gaurdian_no']; ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?php echo $student['Add_line_1']; ?>, <?php echo $student['Add_line_2']; ?>, <?php echo $student['city']; ?>, <?php echo $student['state']; ?>, <?php echo $student['pincode']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="glass-box">
                    <h6>Other Information</h6>
                    <table>
                        <tr>
                            <th>Hostel Room</th>
                            <td><?php echo $student['hostel_room']; ?></td>
                        </tr>
                        <tr>
                            <th>Allotment ID</th>
                            <td><?php echo $student['allotment_id']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
