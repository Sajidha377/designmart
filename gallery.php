<?php

//connecting the database
require("db_connection.php");

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Design Mart | Gallery</title>

    <meta charset="utf-8">
    <!-- Boostrap CSS style sheet -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- attach the JS files -->
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link  href="dist/jquery.fancybox.min.css" rel="stylesheet">
    <script src="dist/jquery.fancybox.min.js"></script>

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

      h1{
        text-align:center;
        color:#132e5b;
        font-size:40px;
        font-weight:bold;
      }

      p{
        text-align:center;
        color:#132e5b;
        font-size:20px;
      }

      .carousel-inner{
        max-width:1300px;
        margin:auto;
        padding-left:25px;
        padding-right:25px;
      }

      .carousel-inner img{
        height:auto;
      }

      .row{
        display:flex;
        align-items:center;
        flex-wrap:wrap;
        justify-content:space-around;
      }

      .categories{
        margin:70px 0;
      }

      .col-3{
        width:230px;
        padding:10px;
      }

      .col-3 h4{
        color:#132e5b;
        text-align:left;
        font-size:16px;
        font-weight:bold;
      }

      .col-3 p{
        color:#132e5b;
        font-size:14px;
        text-align:left;
      }

      .small-container{
        max-width:1080px;
        margin:auto;
        padding-left:25px;
        padding-right:25px;
      }

      .col-4{
        flex-basis:25%;
        padding:10px;
        min-width:200px;
        margin-bottom:50px;
      }

      .col-4 img{
        width:230px;
      }

      .title{
        text-align:center;
        margin:0 auto 80px;
        position:relative;
        line-height:60px;
        color:#132e5b;
        font-weight:bold;
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

      h5{
        color:#132e5b;
        font-weight:bold;
      }

      h4{
        color:#132e5b;
        font-weight:bold;
        font-size:16px;
      }

      .col-4 p{
        color:#132e5b;
        font-size:14px;
        text-align:left;
        position:relative;
        padding-top:-20px;
      }

      /* categories */
      .categories{
        margin:100px auto;
        display:flex;
        align-items:center;
        flex-wrap:wrap;
        justify-content:space-around;
      }

      .col-5{
        width:160px;
        flex-basis:30%;
      }

      .col-5 h4{
        color:132e5b;
        text-align:center;
      }

      .col-5 img{
        width:100%;
        cursor:pointer;
        height:100%;
      }

      .col-5 img:hover{
        box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
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

        .col-3, .col-4{
          flex-basis:100%;
        }
      }

    </style>

  </head>
  <body>

<!-- ******************************************Start of nav bar***************************************************** -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<!-- logo -->
<a class="navbar-brand" href="home.php"> <img src="images/logo.png" alt="" width="125px"> </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" style="color:#132e5b;" href="gallery.php">Gallery <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact-us.php">Contact Us</a>
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





<!-- ************************************************start of banner**************************************************** -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/home-banner.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home-banner1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home-banner2.png" alt="Third slide">
    </div>
  </div>
</div>
<!-- end of banner -->

<h1>OUR GALLERY</h1>
<p>Get a glimpse of all our products from our gallery. </p>




<!--************************************************ featured products*************************************************** -->
  <h2 class="title">Featured Products</h2>

  <div class="small-container">

  <!-- start of shalwars -->
  <a href="categories-shalwars.html"><h5>Shalwars</h5></a>

  <div class="row">

  <?php

  $keyword = 'shalwar';

  //building the dynamic SQL command
  $sql = "select * from product where product_name like '%$keyword%' limit 8";
    //executing the SQL command
    $rs = $mysqli->query($sql);

  while($row = mysqli_fetch_assoc($rs)){

    ?>


    <div class="col-4">
          <a data-fancybox="gallery" href="images/large/<?php echo $row['picture']; ?>"><img src="images/large/<?php echo $row['picture']; ?>" alt="" width="230px"></a>
          <h4><?php echo $row['product_name']; ?></h4>
          <p>Product_ID:<?php echo $row['product_id']; ?> <br> <?php echo $row['description']; ?> <br> Rs.<?php echo $row['price']; ?> </p>
        </div>



    <?php

  }

   ?>

 </div>
</div>




<!-- start of sarees -->
<div class="small-container">
  <a href="categories-shalwars.html"><h5>Sarees</h5></a>
  <div class="row">

  <?php

  $keyword = 'saree';

  //building the dynamic SQL command
  $sql = "select * from product where product_name like '%$keyword%' limit 8";

  //executing the SQL command
  $rs = $mysqli->query($sql);

  while($row = mysqli_fetch_assoc($rs)){

    ?>

      <div class="col-4">
        <a data-fancybox="gallery" href="images/large/<?php echo $row['picture']; ?>"><img src="images/large/<?php echo $row['picture']; ?>" alt=""></a>
        <h4><?php echo $row['product_name']; ?></h4>
        <p>Product_ID:<?php echo $row['product_id']; ?> <br> <?php echo $row['description']; ?> <br> Rs.<?php echo $row['price']; ?> </p>
      </div>


    <?php

     }

     ?>

   </div>
</div>
<!-- end of small-container -->



<!-- start of anarkali -->
<div class="small-container">
  <a href="categories-shalwars.html"><h5>Anarkali</h5></a>
  <div class="row">

  <?php

  $keyword = 'anarkali';

  //building the dynamic SQL command
  $sql = "select * from product where product_name like '%$keyword%' limit 8";

  //executing the SQL command
  $rs = $mysqli->query($sql);

  while($row = mysqli_fetch_assoc($rs)){

    ?>

      <div class="col-4">
        <a data-fancybox="gallery" href="images/large/<?php echo $row['picture']; ?>"><img src="images/large/<?php echo $row['picture']; ?>" alt="" width="230px"></a>
        <h4><?php echo $row['product_name']; ?></h4>
        <p>Product_ID:<?php echo $row['product_id']; ?> <br> <?php echo $row['description']; ?> <br> Rs.<?php echo $row['price']; ?> </p>
      </div>

    <?php


     }

     ?>

   </div>
</div>
<!-- end of small-container -->



<!-- start of lehenga -->
<div class="small-container">
  <a href="categories-shalwars.html"><h5>Lehenga</h5></a>
  <div class="row">

  <?php

  $keyword = 'lehenga';

  //building the dynamic SQL command
  $sql = "select * from product where product_name like '%$keyword%' limit 8";

  //executing the SQL command
  $rs = $mysqli->query($sql);

  while($row = mysqli_fetch_assoc($rs)){

    ?>

      <div class="col-4">
        <a data-fancybox="gallery" href="images/large/<?php echo $row['picture']; ?>"><img src="images/large/<?php echo $row['picture']; ?>" alt="" width="230px"></a>
        <h4><?php echo $row['product_name']; ?></h4>
        <p>Product_ID:<?php echo $row['product_id']; ?> <br> <?php echo $row['description']; ?> <br> Rs.<?php echo $row['price']; ?> </p>
      </div>

    <?php


     }

     ?>
   </div>

</div>
<!-- end of small-container -->



<!-- start of kurti -->
<div class="small-container">
  <a href="categories-shalwars.html"><h5>Kurtis</h5></a>
  <div class="row">

  <?php

  $keyword = 'kurti';

  //building the dynamic SQL command
  $sql = "select * from product where product_name like '%$keyword%' limit 8";

  //executing the SQL command
  $rs = $mysqli->query($sql);

  while($row = mysqli_fetch_assoc($rs)){

    ?>

      <div class="col-4">
        <a data-fancybox="gallery" href="images/large/<?php echo $row['picture']; ?>"><img src="images/large/<?php echo $row['picture']; ?>" alt="" width="230px"></a>
        <h4><?php echo $row['product_name']; ?></h4>
        <p>Product_ID:<?php echo $row['product_id']; ?> <br> <?php echo $row['description']; ?> <br> Rs.<?php echo $row['price']; ?> </p>
      </div>

    <?php


     }

     ?>

   </div>
</div>
<!-- end of small-container -->


<!-- start of shawl-->
<div class="small-container">
  <a href="categories-shalwars.html"><h5>Shawls</h5></a>
  <div class="row">

  <?php

  $keyword = 'shawl';

  //building the dynamic SQL command
  $sql = "select * from product where product_name like '%$keyword%' limit 8";

  //executing the SQL command
  $rs = $mysqli->query($sql);

  while($row = mysqli_fetch_assoc($rs)){

    ?>

      <div class="col-4">
        <a data-fancybox="gallery" href="images/large/<?php echo $row['picture']; ?>"><img src="images/large/<?php echo $row['picture']; ?>" alt="" width="230px"></a>
        <h4><?php echo $row['product_name']; ?></h4>
        <p>Product_ID:<?php echo $row['product_id']; ?> <br> <?php echo $row['description']; ?> <br> Rs.<?php echo $row['price']; ?> </p>
      </div>

    <?php


     }

     ?>

   </div>
</div>
<!-- end of small-container -->


<!-- *********************************************categories***************************************************** -->
<div class="categories">

  <div class="small-container">
    <h2 class="title">Categories</h2>

    <div class="row">

      <div class="col-5">
        <a href="categories-shalwars.php"><img src="images/shalwar25.jpg" alt=""></a>
        <h4>Shalwars</h4>
      </div>
      <!-- end of col-5 -->

      <div class="col-5">
        <a href="categories-sarees.php"><img src="images/saree1.jpg" alt=""></a>
        <h4>Sarees</h4>
      </div>
      <!-- end of col-5 -->

      <div class="col-5">
        <a href="categories-anarkalis.php"><img src="images/anarkali1.jpg" alt=""></a>
        <h4>Anarkalis</h4>
      </div>
      <!-- end of col-5 -->

      <div class="col-5">
        <a href="categories-lehenga.php"><img src="images/lehenga1.jpg" alt=""></a>
        <h4>Lehenga</h4>
      </div>
      <!-- end of col-5 -->

      <div class="col-5">
        <a href="categories-kurtis.php"><img src="images/kurti1.jpg" alt=""></a>
        <h4>Kurtis</h4>
      </div>
      <!-- end of col-5 -->

      <div class="col-5">
        <a href="categories-shawls.php"><img src="images/shawl1.jpg" alt=""></a>
        <h4>shawls</h4>
      </div>
      <!-- end of col-5 -->

    </div>
    <!-- end of row -->

  </div>
  <!-- end of small container -->

</div>
<!-- end of div categories -->







<!-- *************************************************footer**************************************************** -->
<div class="footer">

  <div class="container">

    <div class="row">
      <div class="footer-col-3">
        <h3>Design Mart</h3>
        <p>Grab the best traditional wears from us and walk with <br> confidence and elegence
          on every special occasions.</p>
      </div>
      <!-- end of col-3 -->

      <div class="footer-col-3">
        <h3>Useful Links</h3>
        <ul>
          <li> <a href="customer-sign-up.php">Sign Up</a> </li>
          <li> <a href="contact-us.php">Contact Us</a> </li>
          <li> <a href="about-us.php">About Us</a> </li>
          <li> <a href="terms&conditions.php">Terms & Conditions</a> </li>
        </ul>
      </div>
      <!-- end of div footer-col-3 -->

      <div class="footer-col-3">
        <h3>Follow Us</h3>
        <ul>
          <li> <a href="#">Facebook</a> </li>
          <li> <a href="#">Whatsapp</a> </li>
          <li> <a href="#">Instagram</a> </li>
        </ul>
      </div>
      <!-- end of div footer-col-3 -->

    </div>
    <!-- end of row -->

    <hr>
    <p class="copyright"> &copy; Copyright 2021 | Geex Solutions <br> Images are used for illustration
    purpose only </p>
  </div>
  <!-- end of div container -->

</div>
<!-- end of div footer -->

  </body>
</html>
