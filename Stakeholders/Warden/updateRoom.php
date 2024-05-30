<?php
include '../../php/connection/connect.php';
session_start();
$WardenId = $_SESSION['WardenId'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentId = $_POST['EN'];
    $roomNo = $_POST['room_no']; // Corrected to 'room_no'

    // Validate inputs
    if (empty($studentId) || empty($roomNo)) {
        echo "Student ID and Room number are required.";
        exit;
    }

    // Update allotment ID for the student based on room number

    $updateSql1 = "SET @allotment_id = (
        SELECT allotment_id 
        FROM alloted 
        WHERE room_id = (
            SELECT room_id 
            FROM room 
            WHERE room_number = '$roomNo'
            AND hostel_id = '$WardenId'
        ) 
        AND student_id IS NULL 
        LIMIT 1
    );
    ";

    $updateSql = "
    UPDATE `student` 
    SET `allotment_id` = @allotment_id
    WHERE EN = '$studentId'; ";
?>
    <script>
        console.log('<?php echo $updateSql ?>');
    </script>
<?php
    if ($conn->query($updateSql1) === TRUE) {
        if ($conn->query($updateSql) === TRUE) {
            echo "Allotment ID updated successfully for Student ID: " . htmlspecialchars($studentId);
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Invalid request method.";
    }
}
