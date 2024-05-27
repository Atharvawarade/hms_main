<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
    <style>
        .list-item {
            margin-bottom: 10px;
            background: #ffffff;
            border-radius: 5px;
            border: 2px solid black;
            align-items: center;
            padding-top: 5px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    // Database connection
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

    // Fetch data from attendance_files table
    $sql = "SELECT * FROM attendance_files";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $conn->error;
    } elseif ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<div class="list-item row">';
            echo '<div class="col-md-3"><p>' . $row["month"] . '</p></div>';
            echo '<div class="col-md-3"><p>' . $row["year"] . '</p></div>';
            
            echo '<div class="col-md-4"><p>' . $row["Date_and_time_of_upload"] . '</p></div>';
            echo '<div class="col-md-2"><button class="btn btn-primary hii-btn" data-month="' . $row["month"] . '">View</button></div>';
            echo '</div>';
        }
    } else {
        echo '<p>No records found.</p>';
    }

    // Close connection
    $conn->close();
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOg9OK7iVy9R1z7OfE/C5Zp6GYlgJp6Lr9eUksdSQ/2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QFY6xUR/ftl0TVNGomZ96TkGpRN+GhY34mYYyUbsmMDTD3JzDbuRv0TfCMhCFeD8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js" integrity="sha384-G6E3nx8rTpWbRo3m+a4zNYqPQJ3fRgY4dPIlbcYg0AMhU5H+II4GH6BTAme/aB9Q" crossorigin="anonymous"></script>

<script>
    // Add click event listener to all Hii buttons
    var hiiButtons = document.querySelectorAll('.hii-btn');
    hiiButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Get the month from the data-month attribute of the button
            var month = this.getAttribute('data-month');
            // Construct the URL with the month information
            var url = 'Attendance_display.php?month=' + encodeURIComponent(month);
            // Redirect to the URL
            window.location.href = url;
        });
    });
</script>
</body>
</html>
