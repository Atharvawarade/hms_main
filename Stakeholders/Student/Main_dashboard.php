<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/Main_dashboard.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous" />
    <title>Dashboard</title>
</head>

<body>
    <div class="centraldiv">
        <div id="sidebar">
            <div class="sidebar-header">
                <h5>Hostel Management System</h5>
            </div>
            <div class="profile-photo" id="profilePhoto">
                <img src="../../assets/profile_photo.png" alt="">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#" class="nav-link" data-id="profile" data-target="Student_profile.php">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-id="about" data-target="about.php">
                        <i class="fas fa-briefcase"></i>
                        About
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-id="portfolio" data-target="portfolio.php">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-id="logout" data-target="logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </nav>
            <div class="below_navbar" id="below_navbar">
                <div class="row student_welcome_container">
                    <div class="col-8 welcome_msg">
                        <p id="Date">May 14 2024</p>
                        <h1>Welcome Back, Vikas !!</h1>
                        <p>Always stay updated in your dashboard</p>
                    </div>
                    <div class="col-4 student_sticker">
                        <img src="../../assets/Group 80 (2).png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="row below_student_welcome_container">
                    <div class="col-md-6 col-sm-12 left-col">
                        <div class="container">
                            <div class="row g-2">
                                <div class="col-4">
                                    <div class="square-box apply_for_leave" data-id="apply_for_leave" data-target="Student_leave.php">
                                        <div class="square-box-content">
                                            <img src="../../assets/Apply for Leave.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="square-box apply_for_quit" data-id="apply_for_quit" >
                                        <div class="square-box-content">
                                            <img src="../../assets/Quit Hostel.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                <div class="square-box room_change" data-id="room_change" data-target="student_roomchange.php">
                                        <div class="square-box-content">
                                            <img src="../../assets/Room Change.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="square-box">
                                        <div class="square-box-content">
                                            <img src="../../assets/Raise Grievances.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="square-box check_attendance" data-id="check_attendance" data-target="check_attendance.php">
                                        <div class="square-box-content">
                                            <img src="../../assets/Check Attendance.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="square-box">
                                        <div class="square-box-content">
                                        <img src="../../assets/Group 115.png" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-sm-12">
                        <div class="column2">
                            <div class="account-section">
                                <h2>Account</h2>
                                <div class="fees-details">
                                    <div class="fee-box">
                                        <span>Total Fees</span>
                                        <p>20000</p>
                                    </div>

                                    <div class="fee-box">
                                        <span>Paid Fees</span>
                                        <p>10000</p>

                                    </div>
                                    <div class="fee-box">
                                        <span>Balance Fees</span>
                                        <p>10000</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php include 'hostel_quit_modal.php'; ?>

    <!-- Include the full version of jQuery without the integrity attribute -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("Document is ready");

            $('#sidebarCollapse').on('click', function() {
                console.log("Sidebar collapse button clicked");
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
                console.log("Sidebar and button toggled");
            });

            $('.nav-link').on('click', function(e) {
                e.preventDefault();
                console.log("Nav link clicked");
                var targetUrl = $(this).data('target');
                var targetId = $(this).data('id');
                console.log("Target URL: " + targetUrl);
                console.log("Target ID: " + targetId);
                loadContent(targetUrl, targetId);
            });

            $('.apply_for_leave').on('click', function(e) {
                e.preventDefault();
                console.log("Apply for leave clicked");
                var targetUrl = $(this).data('target');
                var targetId = $(this).data('id');
                console.log("Target URL: " + targetUrl);
                console.log("Target ID: " + targetId);
                loadContent(targetUrl, targetId);
            });

            $('.room_change').on('click', function(e) {
                e.preventDefault();
                console.log("Room Change clicked");
                var targetUrl = $(this).data('target');
                var targetId = $(this).data('id');
                console.log("Target URL: " + targetUrl);
                console.log("Target ID: " + targetId);
                loadContent(targetUrl, targetId);
            });


            $('.check_attendance').on('click', function(e) {
                e.preventDefault();
                console.log("check_attendance clicked");
                var targetUrl = $(this).data('target');
                var targetId = $(this).data('id');
                console.log("Target URL: " + targetUrl);
                console.log("Target ID: " + targetId);
                loadContent(targetUrl, targetId);
            });

            $('.apply_for_quit').on('click', function(e) {
                e.preventDefault();
                console.log("Apply for quit clicked");
                $('#staticBackdrop').modal('show');
            });

            function loadContent(url, id) {
                console.log("Loading content from: " + url);
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(data) {
                        console.log("Content loaded successfully");
                        $('#below_navbar').html(data);
                        console.log("Content inserted into #below_navbar");
                        $('#below_navbar').attr('id', id);
                        console.log("Content id changed to: " + id);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log("Error loading content: " + errorThrown);
                        $('#below_navbar').html('<p>An error has occurred: ' + errorThrown + '</p>');
                    }
                });
            }
        });
    </script>
</body>

</html>