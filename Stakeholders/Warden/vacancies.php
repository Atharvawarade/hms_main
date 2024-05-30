<style>
    .scroll {
        display: flex;
        flex-direction: row;
        overflow-x: scroll;
        width: 70%;

    }

    .box-room {
        height: auto;
        min-width: 10%;
    }
</style>
<?php
include '../../php/connection/connect.php'; // Assuming this file contains database connection code
// session_start();
$WardenId = $_SESSION['WardenId'];

// Assuming you have a database table named 'room' with columns 'room_id', 'room_number', 'capacity', and 'status'
$sql = "SELECT room_number FROM room WHERE status = 'Vacant' AND hostel_id='$WardenId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<div class='scroll'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='box-room'>" . $row['room_number'] . "</div>";
    }
    echo "</div>";
} else {
    echo "No vacant rooms available.";
}

// mysqli_close($conn); // Assuming $conn is your database connection
?>