<!DOCTYPE html>
<html>
  <head>
    <title>Design Mart | Sign Up</title>

    <meta charset="utf-8">
    <!-- Boostrap CSS style sheet -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- attach the JS files -->
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style media="screen">

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    body{
      font-family:poppins, sans-serif;
    }

    nav {
      max-width:1300px;
      margin:auto;
      padding-left:25px;
      padding-right:25px;
      background:linear-gradient(#fff9e6, #fff);
    }

      .navbar ul li{
        padding-left:35px;
        font-weight:bold;
      }

      .navbar form{
        padding-left:35px;
      }

      .navbar button{
        color:#132e5b;
        border-color:#b79452;
        background-color:#fff9e6;
        font-weight:normal;
        border-radius:5px;
        height:40px;
      }

      .navbar button:hover{
        background-color:#e2d4ba;
        border-color:#e2d4ba;
      }

      .navbar button:active{
        background-color:#e2d4ba;
        border-color:#e2d4ba;
      }

      .navbar form input{
        border-color:#b79452;
        height:40px;
        position:relative;
      }

      /* sign up page */
      .row{
        display:flex;
        align-items:center;
        flex-wrap:wrap;
        justify-content:space-around;
        padding:25px;
      }

      .col-2{
        flex-basis:50%;
        min-width:300px;
      }


      /* footer */
      .footer{
        background:#132e5b;
        color:#8a8a8a;
        font-size:14px;
        padding:60px 0 20px;
      }

      .footer h3{
        color:#b79452;
        margin-bottom:10px;
        font-weight:bold;
      }

      .footer p{
        color:#b79452;
        font-size:14px;
      }

      .footer a{
        color:#b79452;
        font-size:14px;
      }

      .footer-col-3{
        min-width:250px;
        margin-bottom:20px;
        flex:1;
        text-align:center;
      }

      ul{
        list-style-type:none;
      }

      .footer hr{
        border:none;
        background:#b79452;
        height:1px;
        margin:20px 0;
      }

      .copyright{
        text-align:center;
      }

      /* media query for less than 600 screen size */
      @media only screen and (max-width:600px){
        .row{
          text-align:center;
        }

        .col-2, .col-3, .col-4{
          flex-basis:100%;
        }
      }

    </style>

  </head>
  <body>

<!-- Start of nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="home.php"> <img src="images/logo.png" alt="" width="125px"> </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="gallery.php">Gallery</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact-us.php">Contact Us</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" style="color:#132e5b;" href="customer-sign-up.php">Sign Up <span class="sr-only">(current)</span></a>
  </li>
</ul>
<form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>
<!-- end of navbar -->

<?php

  if($_REQUEST['status']=="pass"){
    //echo "<h2 class='text-success'>Record Added Successfully</h2>";
    ?>

        <div class="row">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h2>Account Created Successfully!</h2>
            <strong>Successful!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <br />

          </div>
        </div>

    <?php
  }
  else{

    ?>

    <div class="row">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h2>Account Creation Failed!</h2>
        <strong>Sorry</strong> Please Try Again.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <br />
        <a href="customer-sign-up.php" class="btn btn-danger" style="border:none;">Try Again</a>
      </div>
    </div>


    <?php
  }

 ?>


<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-3">
        <h3>Design Mart</h3>
        <p>Grab the best traditional wears from us and walk with <br> confidence and elegence
          on every special occasions.</p>
      </div>
      <div class="footer-col-3">
        <h3>Useful Links</h3>
        <ul>
          <li> <a href="customer-sign-up.php">Sign Up</a> </li>
          <li> <a href="contact-us.php">Contact Us</a> </li>
          <li> <a href="terms&conditions.php">Terms & Conditions</a> </li>
        </ul>
      </div>
      <div class="footer-col-3">
        <h3>Follow Us</h3>
        <ul>
          <li> <a href="#">Facebook</a> </li>
          <li> <a href="#">Whatsapp</a> </li>
          <li> <a href="#">Instagram</a> </li>
        </ul>
      </div>
    </div>
    <hr>
    <p class="copyright"> &copy; Copyright 2021 | Geex Solutions</p>
  </div>
</div>

  </body>
</html>
