<?php
include '../../php/connection/connect.php';

// Your SQL query to select students who have paid and approved, are male, and are not assigned to a room
$sql = "SELECT EN, Fullname, branch, YOS FROM student WHERE status = 'paid and approved' AND allotment_id IS NULL";
$result = $conn->query($sql);
?>
<script>
    console.log(<?php echo $sql; ?>);
</script>

<?php
// Start of the HTML
echo '<div class="container-fluid py-3">';
echo '<div class="row mb-3">';
echo '<div class="col">';
echo '<h2>Newly Admitted Students</h2>';
echo '</div>';
echo '</div>';
echo '<div class="container student-list-container" id="below_nav">'; // Added id here
echo '<div class="student-list">';

// Check if there are any students matching the criteria
if ($result->num_rows > 0) {
    // Output data of each student
    while ($row = $result->fetch_assoc()) {
        echo '<div class="row align-items-center mb-3 p-2 border rounded">';
        echo '<div class="col-md-3"><strong>Name:</strong> ' . htmlspecialchars($row['Fullname']) . '</div>';
        echo '<div class="col-md-3"><strong>Branch:</strong> ' . htmlspecialchars($row['branch']) . '</div>';
        echo '<div class="col-md-2"><strong>Year of Study:</strong> ' . htmlspecialchars($row['YOS']) . '</div>';
        echo '<div class="col-md-4">';
        echo '<form class="room-form" data-student-id="' . htmlspecialchars($row['EN']) . '">';
        echo '<div class="input-group">';
        echo '<input type="number" class="form-control" id="room_id_' . htmlspecialchars($row['EN']) . '" name="room_id" placeholder="Enter Room ID" required>';
        echo '<button type="submit" class="btn btn-primary">Update Room</button>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
    }
} else {
    // If no students match the criteria
    echo '<div class="alert alert-warning" role="alert">';
    echo 'No students found.';
    echo '</div>';
}

echo '</div>'; // Close student-list
echo '</div>'; // Close student-list-container
echo '</div>'; // Close main_division

include '../../php/connection/break.php';
?>

<!-- JavaScript to handle the room update -->
<script>
    console.log("welcome in Newly_admitted_student.php");
    console.log(<?php echo $sql; ?>);
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.room-form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                var studentId = form.getAttribute('data-student-id');
                var roomId = form.querySelector('input[name="room_id"]').value;

                fetch('updateRoom.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'EN=' + encodeURIComponent(studentId) + '&room_id=' + encodeURIComponent(roomId)
                    })
                    .then(response => response.text())
                    .then(data => {
                        // Optionally handle the response data (e.g., show a notification)
                        console.log('Response from server:', data);

                        // Refresh the content of the element with ID 'below_nav'
                        fetch('updateRooms.php')
                            .then(response => response.text())
                            .then(html => {
                                document.querySelector('#below_nav').innerHTML = html;
                            })
                            .catch(error => {
                                console.error('Error refreshing student list:', error);
                            });
                    })
                    .catch(error => {
                        console.error('Error updating room:', error);
                    });
            });
        });
    });
</script>