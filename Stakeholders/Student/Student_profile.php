<?php include 'fetch_student_data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/Student_profile.css">
    <title>Student Profile</title>
</head>
<body>
    <div class="header__wrapper">
        <header></header>
        <div class="cols__container">
            <div class="left__col">
                <div class="img__container">
                    <img src="../../assets/Anu.jpg" alt="<?php echo $student['Fullname']; ?>" />
                    <span></span>
                </div>
                <h2><?php echo $student['Fullname']; ?></h2>
                <p>Enrollment No. : <strong><?php echo $student['EN']; ?></strong></p>
                <p><?php echo $student['email']; ?></p>
            </div>
            <div class="right__col">
                
                <form id="student-form" method="post" action="update_student_data.php">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-primary me-md-2" type="button" id="edit-btn">Edit</button>
                    <button class="btn btn-outline-success" type="button" id="save-btn" style="display: none;">Save</button>
                </div>
                    <div class="row">
                        <div class="col-md-6 info-column">
                            <p><strong>Email:</strong> <span class="field-view"><?php echo $student['email']; ?></span><input class="field-edit form-control" type="email" name="email" value="<?php echo $student['email']; ?>" style="display: none;"></p>
                            <p><strong>Date of Birth:</strong> <span class="field-view"><?php echo $student['DOB']; ?></span><input class="field-edit form-control" type="date" name="DOB" value="<?php echo $student['DOB']; ?>" style="display: none;"></p>
                            <p><strong>Gender:</strong> <span class="field-view"><?php echo $student['gender']; ?></span><input class="field-edit form-control" type="text" name="gender" value="<?php echo $student['gender']; ?>" style="display: none;"></p>
                            <p><strong>Mobile No.:</strong> <span class="field-view"><?php echo $student['student_phone']; ?></span><input class="field-edit form-control" type="text" name="student_phone" value="<?php echo $student['student_phone']; ?>" style="display: none;"></p>
                            <p><strong>Address Line 1:</strong> <span class="field-view"><?php echo $student['Add_line_1']; ?></span><input class="field-edit form-control" type="text" name="Add_line_1" value="<?php echo $student['Add_line_1']; ?>" style="display: none;"></p>
                            <p><strong>Address Line 2:</strong> <span class="field-view"><?php echo $student['Add_line_2']; ?></span><input class="field-edit form-control" type="text" name="Add_line_2" value="<?php echo $student['Add_line_2']; ?>" style="display: none;"></p>
                            <p><strong>City:</strong> <span class="field-view"><?php echo $student['city']; ?></span><input class="field-edit form-control" type="text" name="city" value="<?php echo $student['city']; ?>" style="display: none;"></p>
                            <p><strong>State:</strong> <span class="field-view"><?php echo $student['state']; ?></span><input class="field-edit form-control" type="text" name="state" value="<?php echo $student['state']; ?>" style="display: none;"></p>
                            <p><strong>Pincode:</strong> <span class="field-view"><?php echo $student['pincode']; ?></span><input class="field-edit form-control" type="text" name="pincode" value="<?php echo $student['pincode']; ?>" style="display: none;"></p>
                        </div>
                        <div class="col-md-6 info-column">
                            <p><strong>Status:</strong> <span class="field-view"><?php echo $student['status']; ?></span><input class="field-edit form-control" type="text" name="status" value="<?php echo $student['status']; ?>" style="display: none;"></p>
                            <p><strong>Father Mobile No.:</strong> <span class="field-view"><?php echo $student['Father_no']; ?></span><input class="field-edit form-control" type="text" name="Father_no" value="<?php echo $student['Father_no']; ?>" style="display: none;"></p>
                            <p><strong>Mother Mobile No.:</strong> <span class="field-view"><?php echo $student['Mother_no']; ?></span><input class="field-edit form-control" type="text" name="Mother_no" value="<?php echo $student['Mother_no']; ?>" style="display: none;"></p>
                            <p><strong>Guardian Mobile No.:</strong> <span class="field-view"><?php echo $student['Gaurdian_no']; ?></span><input class="field-edit form-control" type="text" name="Gaurdian_no" value="<?php echo $student['Gaurdian_no']; ?>" style="display: none;"></p>
                            <p><strong>Blood Group:</strong> <span class="field-view"><?php echo $student['Blood_group']; ?></span><input class="field-edit form-control" type="text" name="Blood_group" value="<?php echo $student['Blood_group']; ?>" style="display: none;"></p>
                            <p><strong>Year of Study:</strong> <span class="field-view"><?php echo $student['YOS']; ?></span><input class="field-edit form-control" type="text" name="YOS" value="<?php echo $student['YOS']; ?>" style="display: none;"></p>
                            <p><strong>Branch:</strong> <span class="field-view"><?php echo $student['branch']; ?></span><input class="field-edit form-control" type="text" name="branch" value="<?php echo $student['branch']; ?>" style="display: none;"></p>
                            <p><strong>Section:</strong> <span class="field-view"><?php echo $student['section']; ?></span><input class="field-edit form-control" type="text" name="section" value="<?php echo $student['section']; ?>" style="display: none;"></p>
                            <p><strong>Room ID:</strong> <span class="field-view"><?php echo $student['room_id']; ?></span><input class="field-edit form-control" type="text" name="room_id" value="<?php echo $student['room_id']; ?>" style="display: none;"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('edit-btn').addEventListener('click', function() {
            document.querySelectorAll('.field-view').forEach(function(element) {
                element.style.display = 'none';
            });
            document.querySelectorAll('.field-edit').forEach(function(element) {
                element.style.display = 'block';
            });
            document.getElementById('edit-btn').style.display = 'none';
            document.getElementById('save-btn').style.display = 'inline-block';
        });

        document.getElementById('save-btn').addEventListener('click', function() {
            document.getElementById('student-form').submit();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
