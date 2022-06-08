<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" style="padding-left:0px;padding-right:0px;">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #E0E0E0;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3><b>Welcome to</b></h3>
                  <h1>CILVEKI BANK</h1>
                  <p style="color:#CC0000">Cilveki Bank never asks for confidential information such as PIN and OTP from customers.Any such call can be made only by fraudster.Please do not share personal info.</p>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank3.png" class="img-fluid pt-2 "style="height:350px;width:500px;">
              </div>
            </div>

            <div id="message" style="margin-top:10px;background-color:#FFFF99;color:crimson">
                <marquee><b>Call us toll free on 1800 1204 and 1800 4100 and get a wide range of services through CB Contact Centre  |  CB never asks for your details on phone, message or email. Please do not click on links received on your email or mobile asking your Bank/Card details.</b></marquee>
              </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/transfer1.jpg" class="img-fluid "style="height:350px;width:450px;margin-top:30px">
                    <br>
                    <a href="transfermoney.php"><button class="btn btn-dark";>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history1.jpg" class="img-fluid "style="height:350px;width:400px;margin-top:30px">
                    <br>
                    <a href="transactionhistory.php"><button class="btn btn-dark";>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p><b>@Zeba Samiya,Copyright © 2022. All Rights Reserved.</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>