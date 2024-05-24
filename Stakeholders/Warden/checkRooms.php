<?php
include '../../php/connection/connect.php';

// Function to determine color class based on count
function getColorClass($count)
{
  if ($count == 0) {
    return 'vacant';
  } elseif ($count == 1) {
    return 'half';
  } elseif ($count == 2) {
    return 'full';
  }
}


// Define the session variable value
$session_value = 1; // Assuming session variable value is 1 or 2



// Your SQL query
$sql = "SELECT room_id, COALESCE(COUNT(student_id), 0) AS count
        FROM alloted
        GROUP BY room_id";
$result = $conn->query($sql);

// Check if query was successful
if ($result->num_rows > 0) {
  echo '<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid row">
    <div class="col-1">
      <button type="button" id="sidebarCollapse" class="btn btn-info" style="
        background-color: inherit !important;
        border-color: #925fe2 !important;
      ">
        <i class="fas fa-align-left"></i>
        <img src="../../assets/Menu.png" alt="Toggle Sidebar" />
      </button>
    </div>
    <div class="col-11">
      <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        <div class="col">
          <div class="p-1 border  navigation_options">
            <div class="heading-with-image">
              <h6>Total Students</h6>
            </div>
            <p>5643</p>
          </div>
        </div>
        <div class="col">
          <div class="p-1 border  navigation_options">
            <div class="heading-with-image">
              <h6>Hostelers</h6>
              <img src="../../assets/Group 31.png" alt="icon">
            </div>
            <p>5643</p>
          </div>
        </div>
        <div class="col">
          <div class="p-1 border navigation_options">
            <div class="heading-with-image">
              <h6>On Leave</h6>
              <img src="../../assets/Group 31.png" alt="icon">
            </div>
            <p>4589</p>
          </div>
        </div>
        <div class="col">
          <div class="p-1 border  navigation_options">
            <div class="heading-with-image">
              <h6>Removed</h6>
              <img src="../../assets/Group 31.png" alt="icon">
            </div>
            <p>7964</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
';
  echo '<div class="container-fluid below-navbar" style="width: 100%" id="below_nav">';
  // Output data of each row
  echo '<link rel="stylesheet" href="../../css/checkRooms.css" />';

  $num = 1;
  $currentSlot = 0;

  while ($row = $result->fetch_assoc()) {
    $count = $row['count'];
    $colorClass = getColorClass($count);
    if ($session_value == 1 && $num <= 60) {
      $slot = (int)(($num - 1) / 15) + 1; // Determine the slot number (1 to 4)

      if ($slot !== $currentSlot) {
        if ($currentSlot !== 0) {
          // Close the previous row div if it's not the first slot
          echo '</div>';
        }
        $currentSlot = $slot;

        // Print heading based on the slot
        switch ($slot) {
          case 1:
            echo '<div class="sub-heading">First Year</div>';
            break;
          case 2:
            echo '<div class="sub-heading">Second Year</div>';
            break;
          case 3:
            echo '<div class="sub-heading">Third Year</div>';
            break;
          case 4:
            echo '<div class="sub-heading">Fourth Year</div>';
            break;
        }
        echo '<div class="row">';
      }

      echo '<div class="room-box"> <div class="in-box ' . $colorClass . '">';
      echo $num;
      echo '</div>';
      echo '</div>';
    } elseif ($session_value == 2 && $num > 60 && $num <= 120) {
      $slot = (int)(($num - 61) / 15) + 1; // Determine the slot number (1 to 4) for session 2

      if ($slot !== $currentSlot) {
        if ($currentSlot !== 0) {
          // Close the previous row div if it's not the first slot
          echo '</div>';
        }
        $currentSlot = $slot;

        // Print heading based on the slot
        switch ($slot) {
          case 1:
            echo '<div class="sub-heading">First Year</div>';
            break;
          case 2:
            echo '<div class="sub-heading">Second Year</div>';
            break;
          case 3:
            echo '<div class="sub-heading">Third Year</div>';
            break;
          case 4:
            echo '<div class="sub-heading">Fourth Year</div>';
            break;
        }
        echo '<div class="row">';
      }

      echo '<div class="room-box"> <div class="in-box ' . $colorClass . '">';
      echo $num;
      echo '</div>';
      echo '</div>';
    }
    $num++;
  }
  echo '</div></div>';
  // Close the last row div
} else {
  echo "0 results";
}

include '../../php/connection/break.php';
