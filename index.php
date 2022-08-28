<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PH | Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Peter House</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Project Submission</h4>
                <p>Your Project is long overdue. Please submit to your supervisor.</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Missing course work marks.</h4>
                <p>Your coursework has missing marks. Visit your department for more information.</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Selected for Hackathon.</h4>
                <p>Your application for Hackathon has been approved. See your computers teacher for more details.</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Profile Setup</h4>
                <p>Complete your profile to access other files.</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>R1813116H</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cash-coin"></i><span>Financials</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="https://topup.co.zw/" target="_blank">
              <i class="bi bi-circle"></i><span>Pay Fees</span>
            </a>
          </li>
          <li>
            <a href="feesstatement.php">
              <i class="bi bi-circle"></i><span>Fees Statement</span>
            </a>
          </li>
          <li>
            <a href="otherfees.php">
              <i class="bi bi-circle"></i><span>Other Fees</span>
            </a>
          </li>

      </li>
    </ul>
    </li><!-- End Financial Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-book"></i><span>Academics</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="registeredsubjects.php">
            <i class="bi bi-circle"></i><span>Registered Subjects</span>
          </a>
        </li>
        <li>
          <a href="results.php">
            <i class="bi bi-circle"></i><span>Exam Transcript/Report</span>
          </a>
        </li>
        <li>
          <a href="onlineclasses.php">
            <i class="bi bi-circle"></i><span>Online Classes</span>
          </a>
        </li>

      </ul>
    </li><!-- End Academics Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Time Tables</span><i
          class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="examtimetable.php">
            <i class="bi bi-circle"></i><span>Examination Timetable</span>
          </a>
        </li>
        <li>
          <a href="learnerstable.php">
            <i class="bi bi-circle"></i><span>Learning Timetable</span>
          </a>
        </li>
      </ul>
    </li><!-- End Time Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-collection"></i><span>Library</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="pastex.php">
            <i class="bi bi-circle"></i><span>Past Exam Papers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Reading Material</span>
          </a>
        </li>
        <li>
          <a href="http://classroom.google.com" target="_blank">
            <i class="bi bi-circle"></i><span>Google Classroom</span>
          </a>
        </li>
      </ul>
    </li><!-- End Library Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark"></i><span>Documents</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="./assets/documents/Transfer_Request_Form.docx" download>
            <i class="bi bi-circle"></i><span>Transfer Request Form</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="print()">
            <i class="bi bi-circle"></i><span>Print Report Transcript</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="print()">
            <i class="bi bi-circle"></i><span>Print Fees Structure Form</span>
          </a>
        </li>
      </ul>
    </li>
    <!--End Documents Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="notices.php">
        <i class="bi bi-bell"></i>
        <span>Notices</span>
      </a>
    </li><!-- End Notices Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="residence.php">
        <i class="bi bi-house"></i>
        <span>Residence</span>
      </a>
    </li><!-- End Residence Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-gear"></i>
        <span>Settings</span>
      </a>
    </li><!-- End Settings Page Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" href="logout.php">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Logout Link Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Registration Status <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-r-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Registered!</h6>
                      <span class="text-success small pt-1 fw-bold"><a href="registeredsubjects.php">Registration Record</a></span> <span
                        class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Registration Card -->

            <!-- Fees Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">



                <div class="card-body">
                  <h5 class="card-title">Fees <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>USD$<span>3,264</span></h6>
                      <span class="text-success small pt-1 fw-bold"><a href="feesstatement.php">View Statement</a></span> <span
                        class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Fees Card -->

            <!-- Grade Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Your Grade <span>| Current Term</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Form 1 | Term 2</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span
                        class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Grade Card -->

            <!-- Continuous Assessment Table -->
            <div class="col-12">
              <div class="card">


                <div class="card-body">
                  <h5 class="card-title">Continuous Assessment <span>| Marks</span></h5>


                  <table class="table table-borderless">
                    <thead>
                      <tr>

                        <th scope="col">Subject</th>
                        <th scope="col">Type Of Assessment</th>
                        <th scope="col">Mark</th>
                        <th scope="col">Out Of</th>
                        <th scope="col">Percentage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Mathematics</th>
                        <td>Inclass Test</td>
                        <td>28</td>
                        <td>40</td>
                        <td>70%</td>
                      </tr>
                      <tr>
                        <th scope="row">Computers</th>
                        <td>Homework</td>
                        <td>10</td>
                        <td>20</td>
                        <td>50%</td>
                      </tr>
                      <tr>
                        <th scope="row">Geography</th>
                        <td>Homework</td>
                        <td>20</td>
                        <td>100</td>
                        <td>20%</td>
                      </tr>
                      <tr>
                        <th scope="row">Chemistry</th>
                        <td>Inclass Test</td>
                        <td>100</td>
                        <td>100</td>
                        <td>100%</td>
                      </tr>
                      <tr>
                        <th scope="row">Physics</th>
                        <td>Presentation</td>
                        <td>30</td>
                        <td>50</td>
                        <td>60%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Continuous Assessment Table -->

            <!-- Registered Subjects Table-->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body">
                  <h5 class="card-title">Registered Subjects <span>| Term 2</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Sub Code</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Teacher</th>
                        <th scope="col">Syllabus Code</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">Geo101</a></th>
                        <td>Geography</td>
                        <td><a href="#" class="text-primary">Mr Gurundoro</a></td>
                        <td>Geo101</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">Eng101</a></th>
                        <td>English Literature</td>
                        <td><a href="#" class="text-primary">Mr Mlambo</a></td>
                        <td>Eng101</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">Maths101</a></th>
                        <td>Mathematics</td>
                        <td><a href="#" class="text-primary">Mrs Brown</a></td>
                        <td>Maths101</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">BS101</a></th>
                        <td>Business Studies</td>
                        <td><a href="#" class="text-primar">Mrs Deon</a></td>
                        <td>BS101</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">BS201</a></th>
                        <td>Business Financials</td>
                        <td><a href="#" class="text-primary">Mr Watson</a></td>
                        <td>BS201</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>

                      <tr>
                        <th scope="row"><a href="#">BS201</a></th>
                        <td>Business Financials</td>
                        <td><a href="#" class="text-primary">Mr Watson</a></td>
                        <td>BS201</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>

                      <tr>
                        <th scope="row"><a href="#">BS201</a></th>
                        <td>Business Financials</td>
                        <td><a href="#" class="text-primary">Mr Watson</a></td>
                        <td>BS201</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Registered Subjects Table -->

            <!-- Learning Timetable -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                  <h5 class="card-title">Learning Timetable <span>| Term 2</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Time</th>
                        <th scope="col">Monday</th>
                        <th scope="col">Tuesday</th>
                        <th scope="col">Wednesday</th>
                        <th scope="col">Thursday</th>
                        <th scope="col">Friday</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">8-9</th>
                        <td>English</td>
                        <td>Computers</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">9-10</th>
                        <td>English</td>
                        <td>Computers</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">10-11</th>
                        <td>Geography</td>
                        <td>Biology</td>
                        <td>Shona</td>
                        <td>Mathematics</td>
                      </tr>
                      <tr>
                        <th scope="row">11-12</th>
                        <td>Mathematics</td>
                        <td>Mathematics</td>
                        <td>English</td>
                        <td>Chemistry</td>
                      </tr>
                      <tr>
                        <th scope="row">12-1</th>
                        <td>Physical Science</td>
                        <td>Business Studies</td>
                        <td>History</td>
                        <td>Business Studies</td>
                      </tr>
                      <tr>
                        <th scope="row">2-3</th>
                        <td>Physics</td>
                        <td>Physics</td>
                        <td>Commerce</td>
                        <td>Business Studies</td>
                      </tr>
                      <tr>
                        <th scope="row">3-4</th>
                        <td>Chemistry</td>
                        <td>Biology</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">4-5</th>
                        <td>Biology</td>
                        <td></td>
                        <td></td>
                        <td>Business Financials</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Learning Timetable Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        

          <!-- News & Updates -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Latest Updates <span></span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Upcoming National Games</a></h4>
                  <p><a href="#">The gaming season is here. The National games are going to be hosted...</a></p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">New Journals Added To Library</a></h4>
                  <p><a href="#">Check for more study packs on the e-library and boost your perfomancee. Check Them here...</a></p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Advanced Level Chemistry Presidential Competitions</a></h4>
                  <p><a href="#">Advanced Level students, its your time to shine. Show your skills in next week's presidential...</a></p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Carrier Guidance Day</a></h4>
                  <p><a href="#">Peterhouse Group of schools is hosting a carrier guidance day at its boys high in Marondera on...</a></p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">2023 Intake</a></h4>
                  <p><a href="#">We are admitting now. Tell your friend, to tell a friend, to tell a friend.....</a></p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
<div class="row mx-auto">
  <div class="col-2">
  <button class="btn btn-warning mx-auto" id="btn-lightmode"><i class="bi bi-sun">Light Mode</i></button>
  </div>
<div class="col-2">
  <button class="btn btn-dark" id="btn-darkmode"><i class="bi bi-moon">Dark Mode</i></button>
</div>
</div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>