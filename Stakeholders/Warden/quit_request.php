

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
$sql = "SELECT * FROM quit_requests";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];
    $action = $_POST["action"];

    $status = "";
    if ($action == "Accept") {
        $warden_status = "Approved";
    } elseif ($action == "Cancel") {
        $warden_status = "Cancelled";
    }

    // Update the request status in the database
    $stmt = $conn->prepare("UPDATE quit_requests SET warden_status=? WHERE EN=?");
    $stmt->bind_param("ss", $warden_status, $student_id);

    if ($stmt->execute() === TRUE) {
        // Delete the entry from the database
        $stmt_delete = $conn->prepare("DELETE FROM quit_requests WHERE EN=?");
        $stmt_delete->bind_param("s", $student_id);

        if ($stmt_delete->execute() === TRUE) {
            echo "Request status updated and entry deleted successfully.";
            header("Location: Warden-Dashboard.html");
            exit(); // Ensure no further code is executed after redirection
        } else {
            echo "Error deleting request: " . $stmt_delete->error;
        }
        $stmt_delete->close();
    } else {
        echo "Error updating request status: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>quit request
  </title>
  <link rel="stylesheet" href="../../css/student_roomchange.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="Student_Dashboard">
    <div class="centraldiv">
      <nav id="sidebar">
        <div class="sidebar-header">
          <p class="header-title">Hostel Management System</p>
          <!-- <div class="profile-photo" id="profilePhoto">
                        <img src="/assets/Anu.jpg" alt="Profile Photo" id="photoImg">
                        <div class="photo-actions" id="photoActions">
                            <span id="viewBtn">View</span>
                            <span id="editBtn">Edit</span>
                            <span id="removeBtn">Remove</span>
                        </div>
                    </div>
                    <input type="file" accept="image/*" id="fileInput" style="display: none;"> -->
        </div>

        <ul class="list-unstyled components">
          <li>
            <a href="#">
              <i class="fas fa-briefcase"></i>
              About
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-image"></i>
              Portfolio
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-question"></i>
              FAQ
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-paper-plane"></i>
              Contact
            </a>
          </li>
        </ul>
      </nav>

      <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" style="display: flex">
              <button
                type="button"
                id="sidebarCollapse"
                class="btn btn-info"
                style="
                  background-color: inherit !important;
                  border-color: #925fe2 !important;
                "
              >
                <i class="fas fa-align-left"></i>
                <img src="../../assets/Menu.png" alt="Toggle Sidebar" />
              </button>
              <button
                class="btn btn-dark d-inline-block d-lg-none ml-auto"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-align-justify"></i>
              </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <h2> Hostel Quit Requests</h2> 
                        </div>
                    </div>
                </nav>
        <div class="container11">
          <div class="container">
            <h2 class="mb-4">Student Quit Requests</h2>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Enrollment Number</th> 
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>
                              <td>{$row["EN"]}</td>
                              
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
                    echo "<tr><td colspan='7' class='text-center'>No Quit requests found.</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
      
    </div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
$conn->close();
?>