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

    // Update the request status in the database
    $sql = "UPDATE students SET request_status='$action' WHERE id=$student_id";
    if ($conn->query($sql) === TRUE) {
        echo "Request status updated successfully.";
    } else {
        echo "Error updating request status: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profiles</title>
  <style>
   body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  background-color: #e6c9ff;
  padding: 20px;
  border-radius: 5px;
}

.search-filter {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.search-input {
  padding: 8px 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  flex-grow: 1;
  margin-right: 10px;
}

.filter-btn {
  padding: 8px 16px;
  background-color: #8c52ff;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;
}

.profile-list {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.profile {
  display: flex;
  align-items: center;
  background-color: #fff;
  padding: 10px;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.profile-pic {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 10px;
}

.profile-details {
  display: flex;
  align-items: center;
  gap: 18px;
}

.name,
.program,
.year {
  font-size: 16px;
  color: #040303;
  
}
  </style>
</head>
<body>
  <div class="container">
    <div class="search-filter">
      <input type="text" placeholder="Search..." class="search-input">
      
    </div>
    <div class="profile-list">
      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<div class='profile'>
                  
                  <div class='profile-details'>
                    <span class='name'>" . $row["EN"] . "</span>
                    <span class='program'>" . $row["Fullname"] . "</span>
                    <span class='year'>" . $row["room_id"] . "</span>
                    <span class='year'>" . $row["start_date"] . "</span>
                    <span class='year'>" . $row["end_date"] . "</span>
                  </div>
                  <div class='action-buttons'>
                    <form method='post' action='" . $_SERVER["PHP_SELF"] . "'>
                      <input type='hidden' name='student_id' value='" . $row["EN"] . "'>
                      <input type='submit' name='action' value='Accept' class='accept-btn'>
                      <input type='submit' name='action' value='Deny' class='deny-btn'>
                    </form>
                  </div>
                </div>";
        }
      } else {
        echo "No student profiles found.";
      }
      ?>
    </div>
  </div>
</body>
</html>

<?php
$conn->close();
?>
    



















