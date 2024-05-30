<?php
include '../../php/connection/connect.php';
session_start();
$WardenId = $_SESSION['WardenId'];
$gender = $WardenId == 1 ? 'Male' : 'Female';


// Your SQL query to select students who have paid and approved, are male, and are not assigned to a room
include 'vacancies.php';
$sql = "SELECT EN, Fullname, branch, YOS FROM student WHERE status = 'paid and approved' AND allotment_id IS NULL AND gender = '$gender' ";
// echo $sql;
$result = $conn->query($sql);
?>

<div class="container-fluid py-3">
    <div class="row mb-3">
        <div class="col">
            <h2>Newly Admitted Students</h2>
        </div>

    </div>

    <div class="container student-list-container">
        <div class="student-list">
            <?php if ($result->num_rows > 0) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <div class="row align-items-center mb-3 p-2 border rounded">
                        <div class="col-md-3"><strong>Name:</strong> <?php echo htmlspecialchars($row['Fullname']); ?></div>
                        <div class="col-md-3"><strong>Branch:</strong> <?php echo htmlspecialchars($row['branch']); ?></div>
                        <div class="col-md-2"><strong>Year of Study:</strong> <?php echo htmlspecialchars($row['YOS']); ?></div>
                        <div class="col-md-4">
                            <form class="room-form" data-student-id="<?php echo htmlspecialchars($row['EN']); ?>">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="room_no_<?php echo htmlspecialchars($row['EN']); ?>" name="room_no" placeholder="Enter Room ID" required>
                                    <button type="submit" class="btn btn-primary">Update Room</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="alert alert-warning" role="alert">
                    No students found.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include '../../php/connection/break.php'; ?>

<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

</script>

<script>
    // jQuery function to handle form submission
    $(document).ready(function() {
        $('.room-form').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            var form = $(this); // Get the form element
            var studentId = form.data('student-id'); // Get the student ID from data attribute
            var roomId = form.find('input[name="room_no"]').val(); // Get room number from form input

            // AJAX request to updateRoom.php
            $.ajax({
                type: 'POST', // HTTP method
                url: 'updateRoom.php', // Server-side script
                data: {
                    EN: studentId, // Student ID
                    room_no: roomId // Room number
                },
                success: function(response) {
                    console.log('Response from server:', response);

                    // Reload the student list after successful update
                    $.ajax({
                        url: 'updateRooms.php', // Server-side script to update the student list
                        success: function(html) {
                            $('.student-list-container').html(html); // Replace student list content
                        },
                        error: function(xhr, status, error) {
                            console.error('Error refreshing student list:', error);
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error updating room:', error);
                }
            });
        });
    });
</script>