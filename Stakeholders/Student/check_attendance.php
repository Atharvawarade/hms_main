<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/uploadAttendance.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
    <style>
        .search-container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .search-container .form-control {
            border-radius: 30px 0 0 30px;
            border-right: none;
        }
        .search-container .btn {
            border-radius: 0 30px 30px 0;
        }
        .filter-button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }
        .filter-button .btn {
            display: flex;
            align-items: center;
        }
        .filter-button .btn i {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row attendance_container">
        <div class="col-lg-12 col-md-12">
                <div class="p-3 border bg-light right-column">
                    <div class="search-filter-container">
                        <input type="text" placeholder="Search...">
                        <button>Filter</button>
                    </div>
                    <div class="container attendance-list-container">
                        <div class="attendance-list" id="attendance-list">
                            <div class="row">
                            <div class="col-md-3">Month</div>
                                <div class="col-md-3">Year</div>
                                
                                <div class="col-md-3">Date of upload</div>
                                <div class="col-md-3">File</div>
                            </div>
                            <?php include("../Warden/fetch_attendance.php")?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOg9OK7iVy9R1z7OfE/C5Zp6GYlgJp6Lr9eUksdSQ/2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QFY6xUR/ftl0TVNGomZ96TkGpRN+GhY34mYYyUbsmMDTD3JzDbuRv0TfCMhCFeD8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js" integrity="sha384-G6E3nx8rTpWbRo3m+a4zNYqPQJ3fRgY4dPIlbcYg0AMhU5H+II4GH6BTAme/aB9Q" crossorigin="anonymous"></script>
</body>
</html>