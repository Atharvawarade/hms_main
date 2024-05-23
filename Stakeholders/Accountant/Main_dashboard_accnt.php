<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/Main_dashboard_accnt.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous" />
    <title>Accountant Dashboard</title>
    <style>
        .navbar .col-11 .row .col .border {
            padding: 10px;
        }
        h6{
            padding: 2px;
            padding-left: 5px;
            font-size: clamp(12px, 2vw, 16px); /* Responsive font size */
            margin-bottom: 0 !important;
        }
        p {
            padding: 2px; /* Adjust padding as needed */
            padding-left: 5px;
            font-size: clamp(12px, 2vw, 16px); /* Responsive font size */
            margin-bottom: 0 !important;
        }
        .heading-with-image {
            display: flex;
            align-items: center;
            justify-content:space-between;
        }
        .heading-with-image img {
            width: 1em; /* Matches the font size of the heading */
            height: 1em; /* Matches the font size of the heading */
            margin-right: 5px; /* Space between image and heading */
        }

    </style>
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
        <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid row">
            <div class="col-1">
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
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
            <div class="below_navbar" id="below_navbar">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="container">
                    <div class="row g-2">
                        <div class="col-4">
                            <div class="square-box">
                                <div class="square-box-content">
                                    <img src="../../assets/Fees_collection.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="square-box">
                                <div class="square-box-content">
                                    <img src="../../assets/New_Admitted_students.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="square-box">
                                <div class="square-box-content">
                                    <img src="../../assets/" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="square-box">
                                <div class="square-box-content">
                                    <img src="../../assets/" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="square-box">
                                <div class="square-box-content">
                                    <img src="../../assets/" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="square-box">
                                <div class="square-box-content">
                                    <img src="../../assets/" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <!-- You can add content here for the second column -->
            </div>
        </div>
    </div>
        </div>
    </div>



    <!-- Include the full version of jQuery without the integrity attribute -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            console.log("Document is ready");

            $('#sidebarCollapse').on('click', function () {
                console.log("Sidebar collapse button clicked");
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
                console.log("Sidebar and button toggled");
            });

            // $('.nav-link').on('click', function (e) {
            //     e.preventDefault();
            //     console.log("Nav link clicked");
            //     var targetUrl = $(this).data('target');
            //     var targetId = $(this).data('id');
            //     console.log("Target URL: " + targetUrl);
            //     console.log("Target ID: " + targetId);
            //     loadContent(targetUrl, targetId);
            // });

            // $('.apply_for_leave').on('click', function (e) {
            //     e.preventDefault();
            //     console.log("Apply for leave clicked");
            //     var targetUrl = $(this).data('target');
            //     var targetId = $(this).data('id');
            //     console.log("Target URL: " + targetUrl);
            //     console.log("Target ID: " + targetId);
            //     loadContent(targetUrl, targetId);
            // });

            // $('.apply_for_quit').on('click', function (e) {
            //     e.preventDefault();
            //     console.log("Apply for quit clicked");
            //     $('#staticBackdrop').modal('show');
            // });

            // function loadContent(url, id) {
            //     console.log("Loading content from: " + url);
            //     $.ajax({
            //         url: url,
            //         method: 'GET',
            //         success: function (data) {
            //             console.log("Content loaded successfully");
            //             $('#below_navbar').html(data);
            //             console.log("Content inserted into #below_navbar");
            //             $('#below_navbar').attr('id', id);
            //             console.log("Content id changed to: " + id);
            //         },
            //         error: function (jqXHR, textStatus, errorThrown) {
            //             console.log("Error loading content: " + errorThrown);
            //             $('#below_navbar').html('<p>An error has occurred: ' + errorThrown + '</p>');
            //         }
            //     });
            // }
        });
    </script>
</body>

</html>
