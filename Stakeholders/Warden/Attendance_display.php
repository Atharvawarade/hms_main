        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #DCCDF3 !important;
        }
        .centraldiv {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 95vw;
            height: 90vh;
            background: linear-gradient(109.89deg, rgba(255, 255, 255, 0.85), #fff 47.5%, rgba(255, 255, 255, 0.75));
            border-radius: 20px;
            box-shadow: 4px 4px 20px 8px #A091B8;
            display: flex;
            flex-direction: column;
            overflow: auto;
        }
        .table-container {
            overflow: auto;
            flex-grow: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #6c757d;
            color: white;
            text-align: center;
        }
        td {
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        @media only screen and (max-width: 768px) {
            .centraldiv {
                width: 90vw;
                height: 95vh;
            }
        }
    </style>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
</head>
<body>
    <div class="Student_Dashboard">
        <div class="centraldiv">
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

                // Retrieve the month from the URL query parameters
                $month = isset($_GET['month']) ? $_GET['month'] : '';

                // Fetch file location from attendance_files table based on the received month
                $sql = "SELECT file FROM attendance_files WHERE month = '$month'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // File location found, display the content of the CSV file in a table
                    $row = $result->fetch_assoc();
                    $file_location = $row["file"];

                    echo "<h1>Attendance for Month: $month</h1>";

                    echo "<div class='table-container'>";
                    echo "<table class='table table-striped'>";
                    
                    if (($handle = fopen($file_location, "r")) !== FALSE) {
                        $isHeader = true;
                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            if ($isHeader) {
                                echo "<thead><tr>";
                                foreach ($data as $value) {
                                    echo "<th>$value</th>";
                                }
                                echo "</tr></thead><tbody>";
                                $isHeader = false;
                            } else {
                                echo "<tr>";
                                foreach ($data as $value) {
                                    echo "<td>$value</td>";
                                }
                                echo "</tr>";
                            }
                        }
                        fclose($handle);
                        echo "</tbody>";
                    }

                    echo "</table>";
                    echo "</div>";
                } else {
                    // No file location found for the given month
                    echo "<h1>No attendance data found for Month: $month</h1>";
                }

                // Close connection
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOg9OK7iVy9R1z7OfE/C5Zp6GYlgJp6Lr9eUksdSQ/2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QFY6xUR/ftl0TVNGomZ96TkGpRN+GhY34mYYyUbsmMDTD3JzDbuRv0TfCMhCFeD8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js" integrity="sha384-G6E3nx8rTpWbRo3m+a4zNYqPQJ3fRgY4dPIlbcYg0AMhU5H+II4GH6BTAme/aB9Q" crossorigin="anonymous"></script>
</body>
</html>
