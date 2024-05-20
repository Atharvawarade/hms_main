<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/Newly_Admitted_Students.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid main_division">
        <div class="row heading">
            <div class="col">
                <p>Newly Admitted Students</p>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Search" id="searchBar">
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary btn-block">Filter</button>
            </div>
        </div>
        <div class="container student-list-container">
            <div class="student-list" id="student-list">

            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
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
                        button.addEventListener('click', function () {
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
