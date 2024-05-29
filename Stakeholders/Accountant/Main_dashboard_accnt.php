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

        h6 {
            padding: 2px;
            padding-left: 5px;
            font-size: clamp(12px, 2vw, 16px);
            /* Responsive font size */
            margin-bottom: 0 !important;
        }

        p {
            padding: 2px;
            /* Adjust padding as needed */
            padding-left: 5px;
            font-size: clamp(12px, 2vw, 16px);
            /* Responsive font size */
            margin-bottom: 0 !important;
        }

        .heading-with-image {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .heading-with-image img {
            width: 1em;
            /* Matches the font size of the heading */
            height: 1em;
            /* Matches the font size of the heading */
            margin-right: 5px;
            /* Space between image and heading */
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
                <img src="../../assets/profile.png" alt="">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#" class="nav-link" data-id="profile" data-target="Student_profile.php">
                        <i class="fas fa-user"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link" data-id="about" data-target="about.php">
                        <i class="fas fa-briefcase"></i>
                        Profile
                    </a>
                </li>
                <!-- <li>
                    <a href="#" class="nav-link" data-id="portfolio" data-target="portfolio.php">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li> -->
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
                        <div class="p-1 border  navigation_options hostelers_list" data-id ="hostelers_list" data-target="Hostelers_list.php">
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
            <div class="col-md-6 col-sm-12 left-col">
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
                            <div class="square-box add_student" data-id="add_student" data-target="Custom_Registration.php">
                                <div class="square-box-content">
                                    <img src="../../assets/Add_Student.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="square-box">
                                <div class="square-box-content">
                                    <img src="../../assets/Remove_Student.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div id="quit" class="square-box">
                                <div class="square-box-content">
                                    <img src="../../assets/quit Hostel.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="square-box">
                                <div class="square-box-content">
                                    <img src="../../assets/attendance.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 right-col d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="heading-with-image">
                        <h3>Fees Paid Students</h3>
                        <img src="../../assets/Group 31.png" alt="icon" class="Fees_paid_students" data-id="Fees_paid_students" data-target="Newly_Admitted_Students.php">
                    </div>
                    <div class="search-filter-container">
                        <input type="text" placeholder="Search...">
                        <button>Filter</button>
                    </div>
                    <div class="container student-list-container">
                        <div class="student-list" id="student-list">

                                </div>
                            </div>
                        </div>
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
    $(document).ready(function() {
        console.log("Document is ready");

        $('#sidebarCollapse').on('click', function() {
            console.log("Sidebar collapse button clicked");
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
            console.log("Sidebar and button toggled");
        });

        $('.Fees_paid_students').on('click', function(e) {
            e.preventDefault();
            console.log("Fees_paid_students clicked");
            var targetUrl = $(this).data('target');
            var targetId = $(this).data('id');
            console.log("Target URL: " + targetUrl);
            console.log("Target ID: " + targetId);
            loadContent(targetUrl, targetId);
        });

        $('.add_student').on('click', function(e) {
            e.preventDefault();
            console.log("add_student clicked");
            var targetUrl = $(this).data('target');
            var targetId = $(this).data('id');
            console.log("Target URL: " + targetUrl);
            console.log("Target ID: " + targetId);
            loadContent(targetUrl, targetId);
        });

        $('.hostelers_list').on('click', function(e) {
            e.preventDefault();
            console.log("hostelers_list Clicked");
            var targetUrl = $(this).data('target');
            var targetId = $(this).data('id');
            console.log("Target URL: " + targetUrl);
            console.log("Target ID: " + targetId);
            loadContent(targetUrl, targetId);
        });

        function loadContent(url, targetId) {
            $.ajax({
                url: url,
                success: function(data) {
                    $('#' + targetId).html(data);
                    // Re-initialize Bootstrap's JavaScript components
                    var modals = document.querySelectorAll('.modal');
                    modals.forEach(function(modal) {
                        new bootstrap.Modal(modal);
                    });
                }
            });
        }
        
        document.getElementById("quit").onclick = function () {
            window.location.href = "/hms/Stakeholders/Accountant/quit_request1.php";
        };


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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('fetch_newly_admitted_students.php')
                .then(response => response.json())
                .then(data => {
                    const studentList = document.getElementById('student-list');
                    data.forEach((student, index) => {
                        const uniqueId = `collapse${index}`;
                        const studentDiv = document.createElement('div');
                        studentDiv.className = 'student';
                        studentDiv.innerHTML = `
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p>${student.Fullname}</p>
                                <button class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#${uniqueId}" aria-expanded="false" aria-controls="${uniqueId}">
                                    Details
                                </button>
                            </div>
                            <div class="collapse mb-3" id="${uniqueId}">
                                <div class="card card-body">
                                    <p>Branch: ${student.branch}</p>
                                    <p>Date of Admission: ${student.EN}</p>
                                    <p>Fees Paid: ${student.fees_paid}</p>
                                    <p>Fees Remaining: ${student.fees_remaining}</p>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-secondary me-2">Print</button>
                                        <button class="btn btn-success approve-btn" data-student-id="${student.EN}">Approve</button>
                                    </div>
                                </div>
                            </div>`;
                        studentList.appendChild(studentDiv);
                    });

                    document.querySelectorAll('.approve-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const studentId = this.getAttribute('data-student-id');
                            fetch('update_student_status.php', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/x-www-form-urlencoded',
                                    },
                                    body: `student_id=${studentId}`
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        alert('Student status updated to paid and approved');
                                    } else {
                                        alert('Failed to update status');
                                    }
                                })
                                .catch(error => console.error('Error updating student status:', error));
                        });
                    });
                })
                .catch(error => console.error('Error fetching student data:', error));
        });
    </script>
</body>

</html>