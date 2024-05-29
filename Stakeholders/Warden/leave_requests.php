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

// Fetch leave requests from the database
$sql = "SELECT * FROM leave_requests";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];
    $action = $_POST["action"];

    $status = "";
    if ($action == "Accept") {
        $status = "Approved";
    } elseif ($action == "Cancel") {
        $status = "Cancelled";
    }

    // Update the request status in the database
    $stmt = $conn->prepare("UPDATE leave_requests SET status=? WHERE EN=?");
    $stmt->bind_param("ss", $status, $student_id);

    if ($stmt->execute() === TRUE) {
        echo "Request status updated successfully.";
        header("Location: Warden-Dashboard.html");
    } else {
        echo "Error updating request status: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Leave Requests</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .table thead {
        background-color: #6f42c1;
        color: #fff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="mb-4">Student Leave Requests</h2>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Enrollment Number</th>
            <th>Full Name</th>
            <th>Room ID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Reason</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>{$row["EN"]}</td>
                      <td>{$row["Fullname"]}</td>
                      <td>{$row["room_id"]}</td>
                      <td>{$row["start_date"]}</td>
                      <td>{$row["end_date"]}</td>
                      <td>{$row["reason"]}</td>
                      <td>
                        <form method='post' action='{$_SERVER["PHP_SELF"]}' class='d-inline'>
                          <input type='hidden' name='student_id' value='{$row["EN"]}'>
                          <button type='submit' name='action' value='Accept' class='btn btn-outline-success btn-sm'>Accept</button>
                          <button type='submit' name='action' value='Cancel' class='btn btn-outline-danger btn-sm'>Cancel</button>
                        </form>
                      </td>
                    </tr>";
            }
          } else {
            echo "<tr><td colspan='7' class='text-center'>No leave requests found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
