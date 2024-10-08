<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accountant Dashboard</title>
    <link rel="stylesheet" href="../../css/Accountant_Dashboard.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <?php
        session_start();

        if (!isset($_SESSION['accountant_login']) || $_SESSION['accountant_login'] !== true) {
            header("Location: ../Accountant/accountant-login.html");
            exit;
        }

        $accountant_ID = $_SESSION['username'];
        include '../../php/connection/connect.php';
        // echo $accountant_ID;
    ?>
    <div class="Student_Dashboard">
        <div class="centraldiv">
        <nav id="sidebar">
            <div class="sidebar-header container">
            <div class="row align-items-center">
                <div class="col-auto">
                <img src="../../assets/bitlogo_transparent.png" alt="Logo" class="img-fluid" style="max-height: 60px; min-height: 40px;">
                </div>
                <div class="col header_text">
                <h5>Hostel Management System</h5>
                </div>
            </div>
            </div>

            <div class="profile-photo" id="profilePhoto">
            <img src="../../assets/Profile.png" alt="Profile Photo" id="photoImg" />
            </div>

            <ul class="list-unstyled components">
            <li>
                <a href="#">
                <i class="fa fa-user"></i>
                Profile
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-sign-out"></i>
                Logout
                </a>
            </li>
            </ul>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <img src="../../assets/Menu.png" alt="Toggle Sidebar" />
            </button>

            <div class="nav_buttons_container collapse navbar-collapse justify-content-end">
                <div class="nav_buttons d-flex justify-content-between">
                <a href="another-page.html" class="nav_button_item">
                    <div class="button_type">
                    Total Students <br />
                    <?php
                        $sql = "SELECT COUNT(*) AS total_candidates FROM candidates";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $total_candidates = $row['total_candidates'];
                            echo $total_candidates;
                        } else {
                            echo "0 results";
                        }            
                    ?>
                    </div>
                    <img src="../../assets/Group 31.png" alt="go" />
                </a>
                <a href="../../Common Files/Hostelers.php" class="nav_button_item">
                    <div class="button_type">
                    Hostelers <br />
                    <?php
                    $sql = "SELECT COUNT(*) AS total_hostelers FROM student";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $total_candidates = $row['total_hostelers'];
                        echo $total_candidates;
                    } else {
                        echo "0 results";
                    }             
                    ?>
                    </div>
                    <img src="../../assets/Group 31.png" alt="go" />
                </a>
                <a href="another-page.html" class="nav_button_item">
                    <div class="button_type">
                    On Leave <br />
                    <?php
                        $sql = "SELECT COUNT(*) AS On_leave FROM leave_requests";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $total_candidates = $row['On_leave'];
                            echo $total_candidates;
                        } else {
                            echo "0 results";
                        }            
                    ?>
                    </div>
                    <img src="../../assets/Group 31.png" alt="go" />
                </a>
                <a href="another-page.html" class="nav_button_item">
                    <div class="button_type">
                    Removed <br />
                    <?php
                        $sql = "SELECT COUNT(*) AS Past FROM paststudent";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $total_candidates = $row['Past'];
                            echo $total_candidates;
                        } else {
                            echo "0 results";
                        }            
                    ?>
                    </div>
                    <img src="../../assets/Group 31.png" alt="go" />
                </a>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".nav_buttons_container"
                aria-controls="nav_buttons_container" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </nav>

            <div class="content_heading">
            <h5>Accountant Dashboard </h5>
            </div>
            <div class="container boxes_container">
            <div class="text-center">
                <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-5">
                <a href="#" class="col box_col">
                    <div class="box p-2">
                    <div class="color_doppler color_doppler_1"></div>
                    <div class="row">
                        <div class="col-12 col-md-4 icon">
                        <img src="../../assets/interest-rate.png" alt="room_status" />
                        </div>
                        <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                        <p>Fees Collection</p>
                        </div>
                    </div>
                    </div>
                </a>
                <div class="col">
                    <div class="box p-2">
                    <div class="color_doppler color_doppler_2"></div>
                    <div class="row">
                        <div class="col-12 col-md-4 icon">
                        <img src="../../assets/paid.png" alt="room_status" />
                        </div>
                        <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                        <p>Fees Paid Students</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                        <div class="color_doppler color_doppler_3"></div>
                        <div class="row">
                            <div class="col-12 col-md-4 icon">
                                <img src="../../assets/csv.png" alt="room_status" />
                            </div>
                            <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                                <p>Upload CSV</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    <div class="color_doppler color_doppler_4"></div>
                    <div class="row">
                        <div class="col-12 col-md-4 icon">
                        <img src="../../assets/add-user.png" alt="room_status" />
                        </div>
                        <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                        <p>Add Student</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box p-2">
                    <div class="color_doppler color_doppler_1"></div>
                    <div class="row">
                        <div class="col-12 col-md-4 icon">
                        <img src="../../assets/remove-user.png" alt="room_status" />
                        </div>
                        <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                        <p>Remove Student</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box p-2">
                    <div class="color_doppler color_doppler_2"></div>
                    <div class="row">
                        <div class="col-12 col-md-4 icon">
                        <img src="../../assets/register.png" alt="room_status" />
                        </div>
                        <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                        <p>Complaints</p>
                        </div>
                    </div>
                    </div>
                </div>
                    <div class="col">
                        <div class="box p-2">
                            <div class="color_doppler color_doppler_3"></div>
                            <div class="row">
                                <div class="col-12 col-md-4 icon">
                                    <img src="../../assets/calendar.png" alt="room_status" />
                                </div>
                                <div class="col-12 col-md-8" style="text-align: center; vertical-align: top">
                                    <p>View Attendance</p>
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

    <!-- The uploas CSV modal -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <?php include 'upload_csv.php'; ?>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <?php include 'Custom_Registration.php'; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <!-- <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>  -->

    <script src="../scripts/async_script.js"></script>
    <script src="../scripts/toggle_sidebar.js"></script>

</body>
</html>