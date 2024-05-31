  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../css/style.css" />
      <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
        rel="stylesheet"
      />
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
      />
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"
      ></script>
      <title>Responsive Navbar</title>
      <?php include '../php/vacancy_count.php';?>

      <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:700,400);

        html {
            /* background-color: #dd4444; */
            text-align: center;
            color: #ddd;
            font-family: 'Montserrat', sans-serif;
        }

        .progress {
            display: block;
            margin: 0 auto;
            overflow: hidden;
            transform: rotate(-90deg) rotateX(180deg);
        }

        .progress circle {
            stroke-dashoffset: 0;
            transition: stroke-dashoffset 1s ease;
            stroke: #471792;
            stroke-width: 10px;
        }

        .progress .bar {
            stroke: #DCCDF3;
        }

        .progressdiv {
            position: relative;
        }

        .progressdiv:after {
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 35px;
            transform: translate(-50%, -50%);
            content: attr(data-percent) " %";
        }
    </style>
    </head>
    <body>
      <header>
        <nav>
          <div class="nav-container">
            <div class="nav-left">
              <ul class="nav-tabs">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Vacancy</a></li>
                <li><a href="#">Admission</a></li>
              </ul>
              <button class="nav-toggle" id="nav-toggle">&#9776;</button>
              <div class="mobile-nav" id="mobile-nav">
                <ul class="mobile-nav-tabs">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Vacancy</a></li>
                  <li><a href="#">Admission</a></li>
                </ul>
              </div>
            </div>
            <div class="nav-right">
              <button class="btn">Register</button>
              <button class="btn">Login</button>
            </div>
          </div>
        </nav>
        <div class="title">
          <h1>HOSTEL MANAGEMENT SYSTEM</h1>
          <p>Your Home Away From Home | Modern Amenities | Friendly Service</p>
          <a href="./register.html" class="button">Apply For Hostel</a>
        </div>
          <div class="counts-container">
          <div class="row">
            <div class="col">
              <div>HOSTELS</div>
              <div>10</div>
            </div>
            <div class="col">
              <div>ROOMS</div>
              <div>150</div>
            </div>
            <div class="col">
              <div>HOSTELERS</div>
              <div>300</div>
            </div>
          </div>
        </div>
      </header>
      <!-- ABOUT SECTION STARTS HERE -->
      <div class="about_container">
    <div class="about_heading">ABOUT</div>
      <div class="about-content-container">
          <div class="row about_row">
              <div class="col-md-6 image_row d-flex justify-content-center align-items-center">
                  <div class="image_container">
                      <img src="../assets/Hostel1.1.jpg" alt="Boys Hostel">
                  </div>
              </div>
              <div class="col-md-6 text_row d-flex justify-content-center align-items-center">
                  <div class="text_container">
                      <h4>Boys Hostel</h4>
                      <p>Welcome to our Boys' Hostel, where safety, comfort, and community come first. Located in a secure neighborhood, our hostel offers spacious rooms with modern amenities, ensuring a conducive environment for study and relaxation. Residents enjoy access to recreational facilities, nutritious meals, and regular events that promote personal growth and camaraderie. With 24/7 security and dedicated staff, we provide a nurturing and supportive home away from home. Join us for an enriching and memorable living experience.</p>
                  </div>
              </div>
          </div>

          <div class="row about_row">
              <div class="col-md-6 text_row d-flex justify-content-center align-items-center">
                  <div class="text_container">
                      <h4>Girls Hostel</h4>
                      <p>Welcome to our Boys' Hostel, where safety, comfort, and community come first. Located in a secure neighborhood, our hostel offers spacious rooms with modern amenities, ensuring a conducive environment for study and relaxation. Residents enjoy access to recreational facilities, nutritious meals, and regular events that promote personal growth and camaraderie. With 24/7 security and dedicated staff, we provide a nurturing and supportive home away from home. Join us for an enriching and memorable living experience.</p>
                  </div>
              </div>
              <div class="col-md-6 image_row d-flex justify-content-center align-items-center">
                  <div class="image_container">
                      <img src="../assets/Hostel2.webp" alt="Boys Hostel">
                  </div>
              </div>
          </div>
      </div>
    </div>


      <!-- ABOUT SECTION ENDS HERE -->


      <!-- VACANCY SECTION STARTS HERE-->
      <div class="vacancy_container">
        <div class="vacancy_heading">VACANCY</div>
        <div class="vacancy-content-container">
          <div class="row vacancy-row">
            <div class="col-md-6">
              <div class="vacancy_box">
                <div class="square_box_heading">BOYS HOSTEL</div>
                <div class="square_box">
                  <div class="inside_square_box">
                    <div class="progressdiv" data-percent="<?php echo $percentage_hostel_1; ?>">
                      <svg
                        class="progress"
                        width="178"
                        height="178"
                        viewport="0 0 100 100"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle
                          r="80"
                          cx="89"
                          cy="89"
                          fill="transparent"
                          stroke-dasharray="502.4"
                          stroke-dashoffset="0"
                        ></circle>
                        <circle
                          class="bar"
                          r="80"
                          cx="89"
                          cy="89"
                          fill="transparent"
                          stroke-dasharray="502.4"
                          stroke-dashoffset="0"
                        ></circle>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="vacancy_box">
                <div class="square_box_heading">GIRLS HOSTEL</div>
                <div class="square_box">
                  <div class="inside_square_box">
                    <div class="progressdiv" data-percent="<?php echo $percentage_hostel_2; ?>">
                      <svg
                        class="progress"
                        width="178"
                        height="178"
                        viewport="0 0 100 100"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle
                          r="80"
                          cx="89"
                          cy="89"
                          fill="transparent"
                          stroke-dasharray="502.4"
                          stroke-dashoffset="0"
                        ></circle>
                        <circle
                          class="bar"
                          r="80"
                          cx="89"
                          cy="89"
                          fill="transparent"
                          stroke-dasharray="502.4"
                          stroke-dashoffset="0"
                        ></circle>
                      </svg>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- VACANCY SECTION ENDS HERE-->
      <script src="scripts/script.js"></script>
    </body>
  </html>
