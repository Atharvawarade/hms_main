<div class="modal-content">
    <div class="modal-header" style="display:block !important;">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Add New Student</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
    </div>
    <div class="modal-body d-flex flex-column align-items-center pt-0">
        <dotlottie-player src="https://lottie.host/7bd257c3-aad8-4d3e-aea1-e5f34ce2791f/MFbtxgXe4S.json" background="transparent" speed="1" style="width: 30%; height: 30%;" loop autoplay></dotlottie-player>
        
        <!-- Form with action attribute pointing to the PHP file -->
        <form method="post" action="new_student_register.php" id="addStudentForm">
            <div class="container">
                <div class="row g-3">
                    <!-- Application ID -->
                    <div class="col-md-6">
                        <label for="applicationID" class="form-label">Application ID</label>
                        <input type="text" class="form-control" id="applicationID" name="application_ID" required>
                    </div>

                    <!-- Batch -->
                    <div class="col-md-6">
                        <label for="batch" class="form-label">Batch</label>
                        <select class="form-select" id="batch" name="batch" required>
                            <option value="" disabled selected>Select a batch</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>

                    <!-- Candidate Name -->
                    <div class="col-md-6">
                        <label for="candidateName" class="form-label">Candidate Name</label>
                        <input type="text" class="form-control" id="candidateName" name="Candidate_Name" required>
                    </div>

                    <!-- Father's Name -->
                    <div class="col-md-6">
                        <label for="fatherName" class="form-label">Father's Name</label>
                        <input type="text" class="form-control" id="fatherName" name="Father_Name" required>
                    </div>

                    <!-- Mobile No -->
                    <div class="col-md-6">
                        <label for="mobileNo" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" id="mobileNo" name="Mobile_No" required>
                    </div>

                    <!-- Email ID -->
                    <div class="col-md-6">
                        <label for="emailID" class="form-label">Email ID</label>
                        <input type="email" class="form-control" id="emailID" name="E_Mail_ID" required>
                    </div>

                    <!-- Category -->
                    <div class="col-md-6">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" name="Category" required>
                    </div>

                    <!-- Course Name -->
                    <div class="col-md-6">
                        <label for="courseName" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="courseName" name="Course_Name" required>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="addStudentForm">Submit</button>
    </div>
</div>
