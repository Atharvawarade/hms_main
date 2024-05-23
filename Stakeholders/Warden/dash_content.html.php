<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="display: flex">
    <button type="button" id="sidebarCollapse" class="btn btn-info" style="
        background-color: inherit !important;
        border-color: #925fe2 !important;
      ">
      <i class="fas fa-align-left"></i>
      <img src="../../assets/Menu.png" alt="Toggle Sidebar" />
    </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-align-justify"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Total Students <span style="font-weight: bold"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hostelers <span style="font-weight: bold"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">On Leave <span style="font-weight: bold"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Removed <span style="font-weight: bold"></span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid below-navbar" style="width: 100%" id="below_nav">
  <div class="row below-navbar-row">
    <div class="col-md-8 col-sm-12 left-column">
      <p>Warden Dashboard</p>
      <div class="row dashboard-row" id="checkRooms">
        <div class="cards col-md-5 col-sm-4 col-xs-4 box align-items-center">
          <img src="../../assets/checkRooms.png" alt="checkRooms" class="centered-image" />
        </div>
        <div class="cards col-md-5 col-sm-4 col-xs-4 box align-items-center">
          <img src="../../assets/LeaveRequests.png" alt="checkRooms" class="centered-image" />
        </div>
        <div class="cards col-md-5 col-sm-4 col-xs-4 box align-items-center">
          <img src="../../assets/roomleftRequests.png" alt="checkRooms" class="centered-image" />
        </div>
        <!-- </div>

      <br />

      <div class="row dashboard-row"> -->
        <div class="cards col-md-5 col-sm-12 box align-items-center">
          <img src="../../assets/Complaints.png" alt="checkRooms" class="centered-image" />
        </div>
        <div class="cards col-md-5 col-sm-12 box align-items-center">
          <img src="../../assets/attendance.png" alt="checkRooms" class="centered-image" />
        </div>
        <div class="cards col-md-5 col-sm-12 box align-items-center">
          <img src="../../assets/attendance.png" alt="checkRooms" class="centered-image" />
        </div>
      </div>
    </div>

    <!-- <div class="col-md-4 col-sm-12 right-column">
      <div class="heading">
        <p>Upcomming Students</p>
        <button id="newbies">
          <img src="../../assets/Group 31.png" alt="proceed" />
        </button>
      </div> -->
    <!-- <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Search" id="searchBar" />
        </div>
        <div class="col">
          <button type="button" class="btn btn-primary btn-block">
            Filter
          </button>
        </div>
      </div> -->
    <?php
    include 'newbies.php';
    ?>
  </div>
</div>
</div>
<script>
  console.log("script working properly");

  const newbiesButton = document.getElementById("newbies");
  if (newbiesButton) {
    console.log("Element with id 'newbies' found");
    newbiesButton.addEventListener("click", function() {
      console.log("button");
    });

    newbiesButton.addEventListener("click", async () => {
      console.log("Newbies button clicked");
      console.log("Button with id 'newbies' was pressed"); // Additional console log
      try {
        const response = await fetch("test.html");
        console.log("Fetch request sent");
        if (!response.ok) {
          console.error("Network response was not ok");
          throw new Error("Network response was not ok");
        }
        console.log("Fetch successful");
        const data = await response.text();
        console.log("Response data received:", data);
        const contentDiv = document.getElementById("below_nav");
        if (contentDiv) {
          console.log("Element with id 'below_nav' found");
          contentDiv.innerHTML = data;
          console.log("Content updated successfully");
        } else {
          console.error("Element with id 'below_nav' not found");
        }
      } catch (error) {
        console.error("Error fetching the file:", error);
      }
    });
  } else {
    console.error("Element with id 'newbies' not found");
  }

  const checkRoomsDiv = document.getElementById("checkRooms");
  if (checkRoomsDiv) {
    console.log("Element with id 'checkRooms' found");
    checkRoomsDiv.addEventListener("click", async () => {
      console.log("CheckRooms div clicked");
      try {
        const response = await fetch("checkRooms.php");
        console.log("Fetch request sent");
        if (!response.ok) {
          console.error("Network response was not ok");
          throw new Error("Network response was not ok");
        }
        console.log("Fetch successful");
        const data = await response.text();
        console.log("Response data received:", data);
        const contentDiv = document.getElementById("content");
        if (contentDiv) {
          console.log("Element with id 'content' found");
          contentDiv.innerHTML = data;
          console.log("Content updated successfully");
        } else {
          console.error("Element with id 'content' not found");
        }
      } catch (error) {
        console.error("Error fetching the file:", error);
      }
    });
  } else {
    console.error("Element with id 'checkRooms' not found");
  }
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#sidebarCollapse").on("click", function() {
      $("#sidebar").toggleClass("active");
    });
  });
</script>