<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../css/uploadAttendance.css">
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
            <div class="col-lg-4 col-md-12 gap-desktop">
                <div class="p-3 border bg-light left-column drag-area">
                    <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
                        <div id="lottie-container">
                            <iframe src="https://lottie.host/embed/359caf78-fc68-4c21-95cc-4a2986d48638/s1YooQKD8S.json"></iframe>
                        </div>
                        <div class="mb-3">
                            <label for="monthSelect" class="form-label">Select Month</label>
                            <select class="form-select" id="monthSelect" name="month">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                    
                        <header>Drag and drop attendance CSV file here.</header>
                        <p>OR</p>
                        <button type="button" class="custom-button btn btn-primary" id="browseBtn">Browse Computers</button>
                        <input type="file" hidden accept=".csv" name="file" id="fileInput">
                        <button type="submit" class="custom-button btn btn-success" id="uploadBtn" disabled>Upload</button>
                        <p class="note">Only CSV file is allowed and max file size should be 5MB.</p>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
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
                            <?php include("fetch_attendance.php")?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOg9OK7iVy9R1z7OfE/C5Zp6GYlgJp6Lr9eUksdSQ/2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QFY6xUR/ftl0TVNGomZ96TkGpRN+GhY34mYYyUbsmMDTD3JzDbuRv0TfCMhCFeD8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js" integrity="sha384-G6E3nx8rTpWbRo3m+a4zNYqPQJ3fRgY4dPIlbcYg0AMhU5H+II4GH6BTAme/aB9Q" crossorigin="anonymous"></script>
    <script>
        //selecting all required elements
        const dropArea = document.querySelector(".drag-area");
        const dragText = dropArea.querySelector("header");
        const browseBtn = dropArea.querySelector("#browseBtn");
        const uploadBtn = dropArea.querySelector("#uploadBtn");
        const input = dropArea.querySelector("input[type='file']");

        let file; //this is a global variable and we'll use it inside multiple functions

        browseBtn.onclick = () => {
            input.click(); //if user click on the button then the input also clicked
        }

        input.addEventListener("change", function() {
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = this.files[0];
            dropArea.classList.add("active");
            uploadBtn.disabled = false; // enable the upload button
            showFile(); //calling function
        });

        //If user Drag File Over DropArea
        dropArea.addEventListener("dragover", (event) => {
            event.preventDefault(); //preventing from default behaviour
            dropArea.classList.add("active");
            dragText.textContent = "Release to Upload File";
        });

        //If user leave dragged File from DropArea
        dropArea.addEventListener("dragleave", () => {
            dropArea.classList.remove("active");
            dragText.textContent = "Drag & Drop to Upload File";
        });

        //If user drop File on DropArea
        dropArea.addEventListener("drop", (event) => {
            event.preventDefault(); //preventing from default behaviour
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = event.dataTransfer.files[0];
            dropArea.classList.add("active");
            uploadBtn.disabled = false; // enable the upload button
            showFile(); //calling function
        });

        // function showFile() {
        //     let fileType = file.type; //getting selected file type
        //     let validExtensions = ["text/csv"]; //adding some valid CSV extensions in array
        //     if (validExtensions.includes(fileType)) { //if user selected file is a CSV file
        //         let fileReader = new FileReader(); //creating new FileReader object
        //         fileReader.onload = () => {
        //             let fileURL = fileReader.result; //passing user file source in fileURL variable
        //             let csvTag = `<p>File uploaded: ${file.name}</p>`; //creating a p tag and passing user selected file name
        //             dropArea.innerHTML = csvTag; //adding that created p tag inside dropArea container
        //         }
        //         fileReader.readAsDataURL(file);
        //     } else {
        //         alert("This is not a CSV File!");
        //         dropArea.classList.remove("active");
        //         dragText.textContent = "Drag & Drop to Upload File";
        //         uploadBtn.disabled = true; // disable the upload button
        //     }
        // }
    </script>
</body>
</html>
