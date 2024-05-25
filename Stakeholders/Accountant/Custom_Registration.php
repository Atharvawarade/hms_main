<div class="container-fluid py-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <div class="card">
        <div class="card-header text-center">
          <h1>Candidate Registration</h1>
        </div>
        <div class="card-body">
          <form action="candidate_registration_control.php" method="post">
            <div class="mb-3">
              <label for="application_id" class="form-label">Application ID:</label>
              <input type="text" id="application_id" name="application_id" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="candidate_name" class="form-label">Candidate Name:</label>
              <input type="text" id="candidate_name" name="candidate_name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="father_name" class="form-label">Father's Name:</label>
              <input type="text" id="father_name" name="father_name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="mobile_no" class="form-label">Mobile Number:</label>
              <input type="tel" id="mobile_no" name="mobile_no" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email ID:</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category:</label>
              <select id="category" name="category" class="form-select" required>
                <option value="">Select category</option>
                <option value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="course_name" class="form-label">Course Name:</label>
              <input type="text" id="course_name" name="course_name" class="form-control" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>