<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Room Status</title>
  <link rel="stylesheet" href="../../css/Room_Status.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-oBqDVmMz4fnFO9gybbyJv8LBVikbZrI+M0hiE7PEEL/2eRPf5sYAzYKTlxk8QK8G" crossorigin="anonymous"></script>
</head>

<body>
  <div class="Student_Dashboard">
    <div class="centraldiv">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="nav_button_item ">
            <div class="button_type">
              Total Students <br />
              1233
            </div>
            <img src="../../assets/Group 31.png" alt="go" />
          </div>
          <div class="nav_button_item ">
            <div class="button_type">
              Hostelers<br />
              1233
            </div>
            <img src="../../assets/Group 31.png" alt="go" />
          </div>
          <div class="nav_button_item ">
            <div class="button_type">
              On Leave<br />
              1233
            </div>
            <img src="../../assets/Group 31.png" alt="go" />
          </div>
          <div class="nav_button_item ">
            <div class="button_type">
              Removed<br />
              1233
            </div>
            <img src="../../assets/Group 31.png" alt="go" />
          </div>
        </div>
      </nav>

      <div class="main">
        <div class="room-container">
          <?php
          session_start();
          include '../../php/connection/connect.php'; // Include your database configuration file

          // Get the username from session
          $username = $_SESSION['username'];

          // Extract the hostel_id from the username
          $hostel_id = substr($username, 4); // Extract substring after "WARD"

          // Prepare and execute the SQL query to get rooms and related student details
          $sql = 'SELECT r.room_id, r.room_number, r.status, r.no_of_students,
                  GROUP_CONCAT(CONCAT(n.row_num, ". ", n.Fullname, 
                  " (<a href=\"view_profile.php?en=", n.EN, "\" target=\"_blank\">View Profile</a>)<br>")
                  ORDER BY n.row_num SEPARATOR "") AS student_names
            FROM room r
            LEFT JOIN (
                SELECT s.room_id, s.Fullname, s.EN,
                      ROW_NUMBER() OVER (PARTITION BY s.room_id ORDER BY s.Fullname) AS row_num
                FROM student s
            ) n ON r.room_id = n.room_id
            WHERE r.hostel_id = ?
            GROUP BY r.room_id
            ORDER BY CAST(SUBSTRING(r.room_id, LENGTH(?) + 2) AS UNSIGNED) ASC;';


          $stmt = $conn->prepare($sql);
          $stmt->bind_param("ss", $hostel_id, $hostel_id);
          $stmt->execute();
          $result = $stmt->get_result();

          if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {
                  $status_class = ($row['status'] == 'vacant') ? 'vacant' : 'not-vacant';
                  $room_id = htmlspecialchars($row['room_id']);
                  $room_number = htmlspecialchars($row['room_number']);
                  $status = htmlspecialchars($row['status']);
                  $no_of_students = htmlspecialchars($row['no_of_students']);
                  $student_names = htmlspecialchars($row['student_names']) ?: 'No students assigned';

                  $popover_content = "Room Number: $room_number<br>Status: $status<br>No. of Students: $no_of_students<br>Students: <br>$student_names";
                  
                  echo "<button class='room-box $status_class' data-bs-toggle='popover' data-bs-trigger='focus' data-bs-title='Room ID: $room_id' data-bs-html='true' data-bs-content='$popover_content'>$room_id</button>";
              }
          } else {
              echo "<p>No rooms found for your hostel.</p>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-body">
                  <!-- Content will be loaded dynamically here -->
              </div>
          </div>
      </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var lastClicked = null;

      var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
      var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        var statusClass = popoverTriggerEl.classList.contains('vacant') ? 'popover-vacant' : 'popover-not-vacant';
        
        // Initialize the popover with custom options
        var popover = new bootstrap.Popover(popoverTriggerEl, {
          template: '<div class="popover ' + statusClass + '" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
          html: true, // Allow HTML content in the popover
          trigger: 'manual' // Manually control the popover
        });

        // Add click event listener to each popover trigger element
        popoverTriggerEl.addEventListener('click', function (e) {
          e.preventDefault();
          e.stopPropagation(); // Prevent the click from closing the popover

          // Check if the current popover is already open
          if (lastClicked && lastClicked === popoverTriggerEl) {
            popover.hide();
            lastClicked = null;
          } else {
            // Hide the previous popover if another room-box is clicked
            if (lastClicked) {
              bootstrap.Popover.getInstance(lastClicked).hide();
            }
            popover.show();
            lastClicked = popoverTriggerEl;
          }
        });

        return popover;
      });

      // Prevent popover from being dismissed when clicking inside it
      document.addEventListener('click', function (e) {
        if (lastClicked && !lastClicked.contains(e.target) && !document.querySelector('.popover')?.contains(e.target)) {
          bootstrap.Popover.getInstance(lastClicked)?.hide();
          lastClicked = null;
        }
      });
    });

    // $(document).ready(function(){
    //   // Handle click event on the Profile link
    //   $(document).on('click', '.view-profile-link', function(e) {
    //       e.preventDefault(); // Prevent the default anchor behavior
          
    //       var EN = $(this).data('en'); // Get the EN value from the data-en attribute

    //       // Load the profile data into the modal using AJAX
    //       $.ajax({
    //           url: '../../Common Files/Profile_modal.php', // URL of the PHP script that loads the profile data
    //           type: 'GET',
    //           data: { EN: EN }, // Pass the EN value to the script
    //           success: function(response) {
    //               // Load the response into the modal's body
    //               $('#profileModal .modal-body').html(response);
                  
    //               // Open the modal
    //               $('#profileModal').modal('show');
    //           },
    //           error: function() {
    //               // Handle errors if the AJAX call fails
    //               alert('Failed to load profile. Please try again.');
    //           }
    //       });
    //   });
    // });
  </script>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
