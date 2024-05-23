<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="../../css/student _leave.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="header-container">
    <h1>Apply for Leave</h1>
  </div>
  <div class="form-container">
    <div class="form-wrapper">
      <form action="student_leave_control.php" method="post">
        <div class="form-group date-row">
          <div class="date-input">
            <label for="start-date">Leave Start Date:</label>
            <input type="date" id="start-date" name="start-date" class="form-control" required>
          </div>
          <div class="date-input">
            <label for="end-date">Leave End Date:</label>
            <input type="date" id="end-date" name="end-date" class="form-control" required>
          </div>
        </div>
        <div class="form-group">
          <label for="reason">Reason for Leave:</label>
          <textarea id="reason" name="reason" class="form-control" rows="4" placeholder="Write reason..." required></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    document.querySelector('form').addEventListener('submit', function (event) {
      const startDate = new Date(document.getElementById('start-date').value);
      const endDate = new Date(document.getElementById('end-date').value);
      if (endDate <= startDate) {
        event.preventDefault();
        alert('End date must be greater than start date.');
      }
    });
  </script>
</body>
</html>