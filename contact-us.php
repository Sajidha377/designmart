<!DOCTYPE html>
<html>
  <head>
    <title>Design Mart | Contact Us</title>

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

      .small-container{
        max-width:1080px;
        margin:auto;
        padding-left:25px;
        padding-right:25px;
      }


      /* contact us page */
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
        font-size:55px;
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

      .btn{
        display:inline-block;
        background:#b79452;
        color:#132e5b;
        font-weight:bold;
        padding:8px 30px;
        margin:30px 0;
        border-radius:30px;
        transition:background 0.5s;
      }

      .btn:hover{
        background:#e2d4ba;
      }


      .contact-page{
        padding:50px 0;
      }

      .form-container{
        background:#fff;
        min-width:250px;
        height:510px;
        position:relative;
        text-align:left;
        padding:20px 0;
        margin:auto;
        box-shadow:0 0 20px 0px rgba(0,0,0,0.1);
        overflow:hidden;
        padding-left:10px;
        padding-right:10px;
      }

      .form-container .heading{
        position:absolute;
        left:80px;
        font-weight:bold;
        padding:0 10px;
        color:#132e5b;
        width:100px;
        display:inline-block;
        text-align:center;
      }

      form label{
        position:relative;
        color:#132e5b;
        font-size:14px;
        text-align:left;
        bottom:-10px;
      }

      form span{
        position:relative;
        bottom:-10px;
      }


      .form-btn{
        display:inline-block;
      }

      .form-container form{
        max-width:300px;
        padding: 0 20px;
        position:absolute;
        top:80px;
        transition:transform 1s;
      }

      form input{
        position:relative;
        width:100%;
        height:30px;
        margin:10px 0;
        padding:0 10px;
        border:1px solid #ccc;
      }

      form textarea{
        width:100%;
        height:70px;
        margin:10px 0;
        padding:0 10px;
        border:1px solid #ccc;
      }

      .contact .btn{
        width:100%;
        border:none;
        cursor:pointer;
        margin:10px 0;
      }

      .col-3{
        flex-basis:30%;
        min-width:250px;
        margin-bottom:30px;
      }

      .col-3 p{
        text-align:center;
        color:#132e5b
      }


      .title{
        text-align:center;
        margin:0 auto 50px;
        position:relative;
        line-height:50px;
        color:#132e5b;
      }

      .title::after{
        content:'';
        background:#b79452;
        width:80px;
        height:5px;
        border-radius:5px;
        position:absolute;
        bottom:0;
        left:50%;
        transform:translateX(-50%);
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
  <li class="nav-item active">
    <a class="nav-link" style="color:#132e5b;" href="contact-us.php">Contact Us <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="customer-sign-up.php">Sign Up</a>
  </li>
</ul>
<form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>
<!-- end of navbar -->

<!-- contact information -->
<div class="contact-page">
  <div class="small-container">
    <div class="row">
      <div class="col-2">
        <h1> CONTACT US </h1>
        <p>You are more than welcome to share your thoughts and comments about us.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <div class="form-container">
            <span class="heading">Send us a Message</span>

          <form class="contact" onsubmit="return validateForm()" method="post">

            <label for="fname">First Name</label><span style="color:#ff0000">*</span>
            <input class="form-control" type="text" placeholder="First name" name="" value="" required>

            <label for="lname">Last Name</label><span style="color:#ff0000">*</span>
            <input class="form-control" type="text" placeholder="Last name" name="" value="" required>

            <label for="email">Email</label><span style="color:#ff0000">*</span>
            <input class="form-control" type="email" name="" value="" placeholder="Email" required>

            <label for="message">Message</label><span style="color:#ff0000">*</span>
            <textarea class="form-control" name="message" rows="8" cols="35" placeholder="Message" required></textarea>
            <button type="submit" class="btn" name="button">Send</button>
          </form>
        </div>
      </div>

      <div class="col-2">
        <h2 class="title">Visit Us</h2>
        <p>Visit our main branch at Kandy City Center</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.549383665225!2d80.63492611418408!3d7.291997994736927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662be0c57725%3A0x79ab90a53deb7071!2sKandy%20City%20Centre!5e0!3m2!1sen!2slk!4v1606192761431!5m2!1sen!2slk"
        width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>

    <div class="row">
      <div class="col-2">
        <h2 class="title">Call Us</h2>
        <p>Call us to know more about our products and give your feedback about our services.
        07* *** ****</p>
      </div>
      <div class="col-2">
        <h2 class="title">Mail Us</h2>
        <p>For offical inquiries send a mail to <strong>designMart@gmail.com</strong> </p>
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


<script type="text/javascript">

      function validateForm(){

        var fname    = document.getElementById("fname").value;
        var lname    = document.getElementById("lname").value;
        var email    = document.getElementById("email").value;
        var message  = document.getElementById("message").value;

        if(fname==""){
          $('#fnameError').modal('show');
          return false;
        }
        else if (lname==""){
          $('#lnameError').modal('show');
          return false;
        }
        else if (email=="") {
          $('#emailError').modal('show');
          return false;
        }
        else if (message=="") {
          $('#messageError').modal('show');
          return false;
        }

      }

    </script>
    <!--end of script-->


    <!-- Modal fname -->
    <div class="modal fade" id="fnameError" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Invalid Input</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              First name cannot be empty.
            </p >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--modal fade div ends here-->

    <!-- Modal lname -->
    <div class="modal fade" id="lnameError" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Invalid Input</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Last name cannot be empty.
            </p >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--modal fade div ends here-->

    <!-- Modal email -->
    <div class="modal fade" id="emailError" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Invalid Input</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Please provide an email address.
            </p >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div><!--modal fade div ends here-->

    <!-- Modal message -->
    <div class="modal fade" id="messageError" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Invalid Input</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Oops.. You forgot to type your message.
            </p >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!--modal fade div ends-->


  </body>
</html>
