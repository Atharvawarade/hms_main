

<?php
echo '<div class="col-md-4 col-sm-12 right-column">
        <div class="heading">
          <p>Upcoming Students <span class="upcoming-count">';

include '../../php/connection/connect.php';

// Your SQL query to select students who have paid and are not assigned to a room
$sql = "SELECT Fullname FROM student WHERE status = 'paid' AND room_id IS NULL";
$result = $conn->query($sql);

// Check if there are any students matching the criteria
if ($result->num_rows > 0) {
    $total_upcoming = $result->num_rows;
    echo $total_upcoming;
    echo '</span></p>
          <button id="newbies">
            <img src="../../assets/Group 31.png" alt="proceed" />
          </button>
        </div>'; // Close heading

    echo '<div class="container student-list-container">';
    echo '<div class="student-list">';

    // Output data of each student
    while ($row = $result->fetch_assoc()) {
        echo '<div class="student">' . $row['Fullname'] . '</div>';
    }

    echo '</div>'; // Close student-list
    echo '</div>'; // Close student-list-container
} else {
    // If no students match the criteria
    echo '</span></p>
          <button id="newbies">
            <img src="../../assets/Group 31.png" alt="proceed" />
          </button>
        </div>'; // Close heading

    echo '<div class="container student-list-container">';
    echo '<p>No students found.</p>';
    echo '</div>'; // Close student-list-container
}

include '../../php/connection/break.php';
