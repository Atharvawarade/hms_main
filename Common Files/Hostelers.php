<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostelers</title>
    <link rel="stylesheet" href="../css/Hostelers.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../php/connection/connect.php'?>
<div class="Student_Dashboard">
    <div class="centraldiv">
        <nav class="container-fluid nav-bar">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <div class="col">
                    <a href="another-page.html" class="p-3 nav_button_item">
                        <div class="button_type">
                            Total Students <br />
                            <?php
                                $sql = "SELECT COUNT(*) AS total_candidates FROM candidates";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    // Fetch the result
                                    $row = $result->fetch_assoc();
                                    $total_candidates = $row['total_candidates'];
                                    echo $total_candidates;
                                } else {
                                    echo "0 results";
                                }
                            ?>
                        </div>
                        <img src="../assets/Group 31.png" alt="go" />
                    </a>
                </div>
                <div class="col">
                    <a class="p-3 nav_button_item">
                        <div class="button_type">
                            Hostelers<br />
                            <?php
                                $sql = "SELECT COUNT(*) AS total_hostelers FROM student";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    // Fetch the result
                                    $row = $result->fetch_assoc();
                                    $total_candidates = $row['total_hostelers'];
                                    echo $total_candidates;
                                } else {
                                    echo "0 results";
                                }
                            ?>
                        </div>
                        <img src="../assets/Group 31.png" alt="go" />
                    </a>
                </div>
                <div class="col">
                    <a href="another-page.html" class="p-3 nav_button_item">
                        <div class="button_type">
                            On Leave <br />
                            <?php
                                $sql = "SELECT COUNT(*) AS On_leave FROM leave_requests";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    // Fetch the result
                                    $row = $result->fetch_assoc();
                                    $total_candidates = $row['On_leave'];
                                    echo $total_candidates;
                                } else {
                                    echo "0 results";
                                }
                            ?>
                        </div>
                        <img src="../assets/Group 31.png" alt="go" />
                    </a>
                </div>
                <div class="col">
                    <a href="another-page.html" class="p-3 nav_button_item">
                        <div class="button_type">
                            Removed <br />
                            <?php
                                $sql = "SELECT COUNT(*) AS Past FROM paststudent";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    // Fetch the result
                                    $row = $result->fetch_assoc();
                                    $total_candidates = $row['Past'];
                                    echo $total_candidates;
                                } else {
                                    echo "0 results";
                                }
                            ?>
                        </div>
                        <img src="../assets/Group 31.png" alt="go" />
                    </a>
                </div>
            </div>
        </nav>
        
        <div class="container-fluid mt-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex justify-content-between align-items-center ">
                    <a href="../Stakeholders/Warden/Warden-Dashboard.php" class="btn btn-outline-dark me-3">
                        <i class="fa fa-arrow-left"></i>
                    </a>                
                    <h3 class="text-center mb-0">Hostelers</h3>
                </div>
                <div class="search-filter-container">
                    <input type="text" class="form-control" id="searchBox" placeholder="Search">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonBranch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter By Branch
                        </button>
                        <div class="dropdown-menu dropdown-menu-checkbox" aria-labelledby="dropdownMenuButtonBranch">
                            <a class="dropdown-item dropdown-item-checkbox" href="#">
                                <input type="checkbox" data-column="branch" data-value="Computer Engineering"> Computer Engineering                           
                            </a>
                            <a class="dropdown-item dropdown-item-checkbox" href="#">
                                <input type="checkbox" data-column="branch" data-value="Mechanical Engineering"> Mechanical Engineering
                            </a>
                            <a class="dropdown-item dropdown-item-checkbox" href="#">
                                <input type="checkbox" data-column="branch" data-value="Electrical Engineering"> Electrical Engineering
                            </a>
                            <a class="dropdown-item dropdown-item-checkbox" href="#">
                                <input type="checkbox" data-column="branch" data-value="Civil Engineering"> Civil Engineering                        
                            </a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonYear" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter By Year of Study
                        </button>
                        <div class="dropdown-menu dropdown-menu-checkbox" aria-labelledby="dropdownMenuButtonYear">
                            <a class="dropdown-item dropdown-item-checkbox" href="#">
                                <input type="checkbox" data-column="YOS" data-value="1st Year"> 1st Year 
                            </a>
                            <a class="dropdown-item dropdown-item-checkbox" href="#">
                                <input type="checkbox" data-column="YOS" data-value="2nd Year"> 2nd Year 
                            </a>
                            <a class="dropdown-item dropdown-item-checkbox" href="#">
                                <input type="checkbox" data-column="YOS" data-value="3rd Year"> 3rd Year 
                            </a>
                            <a class="dropdown-item dropdown-item-checkbox" href="#">
                                <input type="checkbox" data-column="YOS" data-value="4th Year "> 4th Year 
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="studentTable">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Year of Study</th>
                            <th>Branch</th>
                            <th>Allotment ID</th>
                            <th>View Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Database connection details
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "hms";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // SQL query to fetch data
                        $sql = "SELECT EN, Fullname, YOS, branch, allotment_id FROM student";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row["Fullname"] . '</td>';
                                echo '<td>' . $row["YOS"] . '</td>';
                                echo '<td>' . $row["branch"] . '</td>';
                                echo '<td>' . $row["allotment_id"] . '</td>';
                                echo '<td class="profile_button"><button class="btn btn-primary view-profile-btn" data-fullname="' . $row["Fullname"] . '" data-bs-toggle="modal" data-bs-target="#profileModal"><i class="fa fa-arrow-right"></i></button></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="5" class="text-center">No Students Found</td></tr>';
                        }

                        // Close connection
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



    <!-- Include the modal -->
    <?php include 'Profile_modal.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOg9OK7iVy9R1z7OfE/C5Zp6GYlgJp6Lr9eUksdSQ/2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QFY6xUR/ftl0TVNGomZ96TkGpRN+GhY34mYYyUbsmMDTD3JzDbuRv0TfCMhCFeD8" crossorigin="anonymous"></script>
<script>
   $(document).ready(function() {
    // Search box functionality
    $('#searchBox').on('input', function() {
        var searchText = $(this).val().toLowerCase();
        $('#studentTable tbody tr').each(function() {
            var fullName = $(this).find('td:eq(0)').text().toLowerCase();
            if (fullName.includes(searchText)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    $('.dropdown-item-checkbox').on('change', function() {
        var checkedBranches = [];
        // Loop through checked checkboxes
        $('.dropdown-item-checkbox input:checked').each(function() {
            var branchValue = $(this).data('value');
            checkedBranches.push(branchValue);
        });

        // Show/hide table rows based on selected branches
        filterTableRows(checkedBranches);
    });

    // Function to handle checkbox change for Year of Study filter
    $('#dropdownMenuButtonYear').on('click', function() {
        // Reset all other filters
        $('.dropdown-menu-checkbox a').removeClass('active');
        // Get selected Year of Study value
        var yearValue = $(this).data('value');
        // Show/hide table rows based on selected year
        filterTableRowsYear(yearValue);
    });

    function filterTableRows(checkedBranches) {
        if (checkedBranches.length > 0) {
            $('#studentTable tbody tr').each(function() {
                var branch = $(this).find('td:eq(2)').text().trim();
                if (checkedBranches.includes(branch)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        } else {
            $('#studentTable tbody tr').show();
        }
    }

    function filterTableRowsYear(yearValue) {
        $('#studentTable tbody tr').each(function() {
            var YOS = $(this).find('td:eq(1)').text().trim();
            if (YOS === yearValue) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
});

</script>
</body>
</html>
