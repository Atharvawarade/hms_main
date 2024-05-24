<script>
    console.log("Sunindha ....updateRooms called ");
    console.log("Sunindha ....updateRooms called ");
    console.log("Sunindha ....updateRooms called ");
    console.log("Sunindha ....updateRooms called ");
    console.log("Sunindha ....updateRooms called ");
    console.log("Sunindha ....updateRooms called ");
    console.log("Sunindha ....updateRooms called ");
    console.log("Sunindha ....updateRooms called ");
    console.log("Sunindha ....updateRooms called ");
    console.log("Sunindha ....updateRooms called ");
</script>

<!--  
 
 <?php
    include '../../php/connection/connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $studentId = $_POST['EN'];
        $roomId = $_POST['room_id'];

        // Validate inputs
        if (empty($studentId) || empty($roomId)) {
            echo "Student ID and Room ID are required.";
            exit;
        }

        // Update room ID for the student
        $updateSql = "UPDATE student SET room_id = $roomId WHERE EN = '$studentId'";
        if ($conn->query($updateSql) === TRUE) {
            echo "Room ID updated successfully for Student ID: " . htmlspecialchars($studentId);
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Invalid request method.";
    }

    include '../../php/connection/break.php';
    ?>  -->