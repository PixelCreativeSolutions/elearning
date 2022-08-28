<?php
include('include.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PH | Fees Statement</title>
</head>
<body>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Fees Statement</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Financials
      <li class="breadcrumb-item active">Fees Statemet
    </ol>
  </nav>
</div>

<!-- Reports -->
<div class="col-12">
              <div class="card">


                <div class="card-body">
                 <button type="button"   onclick="print()" class="btn btn-primary mt-4 font-weight-bold mb-3"><i class="bi bi-printer"></i> Print Statement</button>
                  <br>
                  <br>

                  <table class="table table-bordered font-size-10">
                    <thead>
                      <tr>

                        <th scope="col">Date</th>
                        <th scope="col">Reference</th>
                        <th scope="col">Description</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Credit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope="row">04-03-2022</td>
                        <td>HR143256F</td>
                        <td>PayPal/Term 1 Fees</td>
                        <td></td>
                        <td>3400</td>
                      </tr>
                      <tr>
                        <td scope="row">04-03-2022</td>
                        <td>HR143256F</td>
                        <td>PayPal/Term 1 Fees</td>
                        <td></td>
                        <td>3400</td>
                      </tr>
                      <tr>
                        <td scope="row">03-04-2022</td>
                        <td>G67H7782</td>
                        <td>PayPal/Term 1 Fees</td>
                        <td></td>
                        <td>600</td>
                      </tr>
                      <tr>
                        <td scope="row">24-04-2022</td>
                        <td>HY129047T</td>
                        <td>POS Receipt/Term 2 Fees</td>
                        <td></td>
                        <td>2700</td>
                      </tr>
                      <tr>
                        <td scope="row">07-05-2022</td>
                        <td>HYTS567</td>
                        <td>Bank Transfer/Term 2 Fees</td>
                        <td></td>
                        <td>1300</td>
                      </tr>
                      <tr>
                        <td scope="row">10-05-2022</td>
                        <td>PH00001</td>
                        <td>Security/Vandalism</td>
                        <td>200</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
</div>
</main>
 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
<div class="row">
  <div class="col-2 mt-2">
  <button class="btn btn-warning" id="btn-lightmode"><i class="bi bi-sun">Light Mode</i></button>
  </div>
<div class="col-md-8 mt-2">
  <button class="btn btn-dark" id="btn-darkmode"><i class="bi bi-moon">Dark Mode</i></button>
</div>
</div>
  </footer><!-- End Footer -->
</body>
</html>