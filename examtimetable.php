<?php
include('include.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PH | Examination Timetable</title>
</head>

<body>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Examination Timetable</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Time Tables</li>
          <li class="breadcrumb-item active">Exam Timetable</li>
        </ol>
      </nav>
    </div>
    <div class="card top-selling overflow-auto">
      <div class="card-body pb-0">
        <h5 class="card-title">Examination Timetable <span>| Term 2</span></h5>

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
  </main>
  
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
</body>

</html>