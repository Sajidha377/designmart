<?php
require("validate_customer.php");

//connecting the database
require("db_connection.php");

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Design Mart | Customer Edit</title>

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

    .small-container{
      max-width:1300px;
      margin:auto;
      padding-left:25px;
      padding-right:25px;
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

      .btn{
        display:inline-block;
        background-color:#b79452;
        color:#132e5b;
        padding:8px 30px;
        margin:30px 0;
        border-radius:30px;
        transition:background 0.5s;
      }

      .btn:hover{
        background:#563434;
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

      .col-2 h1{
        font-size:60px;
        line-height:60px;
        margin:25px 0;
        color:#132e5b;
        text-align:center;
        font-weight:bold;
      }
      .col-2 p{
        text-align:center;
        color:#132e5b;
      }

      .sign-up .btn{
        display:inline-block;
        background:#b79452;
        color:#132e5b;
        padding:8px 30px;
        margin:30px 0;
        border-radius:30px;
        transition:background 0.5s;
        font-weight:bold;
      }

      .btn:hover{
        background:#e2d4ba;
      }

      .signup-page{
        padding:50px 0;
      }

      .form-container{
        background:#fff;
        min-width:300px;
        height:610px;
        position:relative;
        text-align:left;
        padding:20px 0;
        margin:auto;
        box-shadow:0 0 20px 0px rgba(0,0,0,0.1);
        overflow:hidden;
      }

      .form-container h5{
        text-align:center;
        color:#132e5b;
      }

      .form-container form{
        min-width:300px;
        padding: 0 20px;
        position:absolute;
        top:45px;
        transition:transform 1s;
      }

      form label{
        text-align:left;
        color:#132e5b;
      }

      form input{
        width:300px;
        height:30px;
        margin:10px 0;
        padding:0 10px;
        border:1px solid #ccc;
      }

      form select{
        width:100%;
        height:30px;
        margin:10px 0;
        padding:0 10px;
        border:1px solid #ccc;
      }

      .row .form-check{
        position:absolute;
        left:10px;
      }

      .row .form-check input{
        position:absolute;
        left:70px;
        height:20px;
      }

      .edit .btn{
        width:100%;
        border:none;
        cursor:pointer;
        margin:10px 0;
      }

      form a{
        font-size:12px;
      }


      /* footer */
      .footer{
        background:#132e5b;
        color:#b79452;
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
    <a class="nav-link" href="home.php">Home </a>
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

<!-- sign up page -->
<div class="edit-page">
  <div class="small-container">

    <div class="row">
      <div class="col-2">
        <h1> Edit Your Account </h1>
        <p>Simply edit your account with simple steps.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-2">
        <div class="form-container">

          <?php

            //searching for record existence based on the entered product_ID
            $cust_id = $_REQUEST['cust_id'];

            //building the dynamic SQL command
            $sql = "select cust_id, cust_name, cust_access_code from customer where cust_id='$cust_id'";

            //executing the SQL command
            $rs = $mysqli->query($sql);


            if(mysqli_num_rows($rs) > 0){

              //fetching the records
              $row = mysqli_fetch_assoc($rs);

           ?>

          <h5>Edit Your Account</h5>

          <!-- edit form -->
          <form class="edit" action="customer-edit-3.php" method="post" enctype="multipart/form-data">

            <label for="username">Username</label> <span style="color:#ff0000">*</span>
            <input type="email" class="form-control "
             id="cust_id" name="cust_id" placeholder="enter email" required value="<?php echo $row['cust_id']; ?>">

            <label for="name">Name</label> <span style="color:#ff0000">*</span>
            <input class="form-control" type="text" placeholder="enter your name" id="cust_name" name="cust_name" value="<?php echo $row['cust_name']; ?>">

            <label for="password">Password</label> <span style="color:#ff0000">*</span>
            <input type="password" class="form-control "
             id="cust_access_code" name="cust_access_code" placeholder="use a strong password"
             required value="<?php echo $row['cust_access_code']; ?>">

            <button type="submit" class="btn" name="button">Edit</button>
            <button type="reset" class="btn" name="button">Cancel</button>


          <?php

        }
        else{
          ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h2>Password or Username is wrong!</h2>
            <strong>Sorry</strong> No matching records were found. Please Try Again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <br />
            <a href="customer-edit-1.php" class="btn btn-danger">Try Again</a>
          </div>
          <?php
        }

           ?>

           </form>

        </div>
      </div>
    </div>

  </div>


</div>

<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-3">
        <h3>Design Mart</h3>
        <p>Grab the best traditional wears from us and walk with confidence and elegence
          on every special occasions.</p>
      </div>
      <div class="footer-col-3">
        <h3>Useful Links</h3>
        <ul>
          <li> <a href="customer-sign-up.php">Sign Up</a> </li>
          <li> <a href="contact-us.php">Contact Us</a> </li>
          <li> <a href="about-us.php">About Us</a> </li>
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
    <p class="copyright"> &copy; Copyright 2021 | Geex Solutions <br> Images are used for illustration
    purpose only</p>
  </div>
</div>


  </body>
</html>
