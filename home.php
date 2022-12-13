<?php

//connecting the database
require("db_connection.php");

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Design Mart | Home</title>

    <meta charset="utf-8">
    <!-- Boostrap CSS style sheet -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- attach the JS files -->
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/fontawesome-all.js"></script>

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

      nav img{
        width:80px;
      }

      nav form .card a{
        color:black;
        text-decoration:none;
        font-weight:bold;
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
        font-size:14px;
        padding-left:15px;
        padding-right:15px;
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

      .col-2{
        flex-basis:50%;
        min-width:300px;
      }

      .col-2 img{
        max-width:100%;
        padding:50px 0;
      }

      .col-2 h1{
        font-size:50px;
        line-height:60px;
        margin:25px 0;
        color:#555;
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

      .categories{
        margin:70px 0;
      }

      .col-3{
        flex-basis:30%;
        min-width:250px;
        margin-bottom:30px;
        transition:transform 0.5s;
      }

      .col-3 img{
        width:100%;
      }

      .col-3:hover{
        transform:translateY(-5px);
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
        transition:transform 0.5s;
      }

      .col-4 img{
        width:100%;
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
        text-align:center;
        padding-left:10px;
        padding-right:10px;
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
      }

      .col-4:hover{
        transform:translateY(-5px);
      }

      table th, td{
        color:#132e5b;
        font-size:13px;
      }

      /* offer */
      .offer{
        background:radial-gradient(#fff9e6,#fff);
      }

      .offer small{
        color:#132e5b;
      }

      .offer h1{
        color:#132e5b;
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

        .col-2, .col-3, .col-4{
          flex-basis:100%;
        }
      }

    </style>

  </head>
  <body>

<!-- **************************************************Start of nav bar********************************************** -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<!-- logo -->
<a class="navbar-brand" href="home.php"> <img src="images/logo.png" alt="" width="125px"> </a>

<!-- toggle menu -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- menus -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
  <li class="nav-item active">
    <a class="nav-link" style="color:#132e5b;" href="home.php">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="gallery.php">Gallery</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact-us.php">Contact Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="customer-sign-up.php">Sign Up</a>
  </li>
</ul>

<!-- search -->
<form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

  <img src="images/profile-picture.png" alt="" data-toggle="modal" data-target="#profile">

  <!-- Modal -->
  <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="profile" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <img src="images/profile-picture.png" alt="" width="50px" style="border-radius:50%;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Not Logged In <br>

            <a href="customer-login-1.php">Login</a>


        </div>
      </div>
    </div>
  </div>

</form>
</div>
<!-- end of menus -->

</nav>
<!-- end of navbar -->





<!-- ***********************************************start of banner************************************************* -->
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

<h1>GO TRADITIONAL</h1>
<h5>Make your special occasions extra special with our collections of clothing.</h5>

  <p>Design Mart is a well renowned clothing store which specializes in women's clothing such as <br>
    shalwars, sarees, anarkalis, lehengas, kurtis and shawls. We provide the latest traditional wears <br>
    for all occasions like wedding, reception, parties etc. Make all your occasions <br> extra special by
    purchasing best traditional wears from us and walk with elegence and royalty .</p> <br>
  <p>We have more than five branches of "Design Mart" outlets around Sri Lanka, where our <br> main branch is at Kandy City center,
  Sri Lanka.</p> <br>



<!-- *******************************************latest products******************************************* -->
<div class="small-container">
  <h2 class="title">Latest Products</h2>

  <div class="row">

    <?php

    $keyword = 'shalwar';

    //building the dynamic SQL command
    $sql = "select * from product where product_name like '%$keyword%' limit 1";
      //executing the SQL command
      $rs = $mysqli->query($sql);

    while($row = mysqli_fetch_assoc($rs)){

      ?>


      <div class="col-4">
            <a data-fancybox="gallery" href="images/large/<?php echo $row['picture']; ?>"><img src="images/large/<?php echo $row['picture']; ?>" alt="" width="230px"></a>
            <table>
              <tr>
                <th><?php echo $row['product_name']; ?></th>
              </tr>
              <tr>
                <td>Product_ID:<?php echo $row['product_id']; ?></td>
              </tr>
              <tr>
                <td><?php echo $row['description']; ?> </td>
              </tr>
              <tr>
                <td>Rs.<?php echo $row['price']; ?> </td>
              </tr>

            </table>

          </div>



      <?php

    }

     ?>





     <?php

     $keyword = 'saree';

     //building the dynamic SQL command
     $sql = "select * from product where product_name like '%$keyword%' limit 1";

     //executing the SQL command
     $rs = $mysqli->query($sql);

     while($row = mysqli_fetch_assoc($rs)){

       ?>

         <div class="col-4">
           <a data-fancybox="gallery" href="images/large/<?php echo $row['picture']; ?>"><img src="images/large/<?php echo $row['picture']; ?>" alt=""></a>
           <table>
             <tr>
               <th><?php echo $row['product_name']; ?></th>
             </tr>
             <tr>
               <td>Product_ID:<?php echo $row['product_id']; ?></td>
             </tr>
             <tr>
               <td><?php echo $row['description']; ?></td>
             </tr>
             <tr>
               <td>Rs.<?php echo $row['price']; ?></td>
             </tr>
           </table>

         </div>


       <?php

        }

        ?>






        <?php

        $keyword = 'anarkali';

        //building the dynamic SQL command
        $sql = "select * from product where product_name like '%$keyword%' limit 1";

        //executing the SQL command
        $rs = $mysqli->query($sql);

        while($row = mysqli_fetch_assoc($rs)){

          ?>

            <div class="col-4">
              <a data-fancybox="gallery" href="images/large/<?php echo $row['picture']; ?>"><img src="images/large/<?php echo $row['picture']; ?>" alt="" width="230px"></a>
              <table>
                <tr>
                  <th><?php echo $row['product_name']; ?></th>
                </tr>
                <tr>
                  <td>Product_ID:-<?php echo $row['product_id']; ?> </td>
                </tr>
                <tr>
                  <td><?php echo $row['description']; ?></td>
                </tr>
                <tr>
                  <td>Rs.<?php echo $row['price']; ?></td>
                </tr>
              </table>

            </div>

          <?php


           }

           ?>

  </div>
  <!-- end of div row -->


</div>
<!-- end of small-container -->





<!-- ****************************************************offer******************************************************** -->
<div class="offer">

  <div class="small-container">

    <div class="row">

      <div class="col-2">
        <img src="images/lehenga16.jpg" alt="">
      </div>
      <!-- end of col-2 -->

      <div class="col-2">
        <p>Exclusively available on Design Mart</p>
        <h1>Seasonal offers</h1>
        <small>Most luxurious and royal looking lehenga is on offer this new year season.
                Get a chance of 15% offer to get lehengas this season and walk with royalty
              on your special occasions.
            </small>
        <br>
        <a href="categories-lehenga.php" class="btn">Buy Now &#8594;</a>
      </div>
      <!-- end of col-2 -->

    </div>
    <!-- end of row -->

  </div>
  <!-- end of small-container -->

</div>
<!-- end of offer -->






<!-- *****************************************************categories************************************************* -->
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
  <!-- end of small-container -->

</div>
<!-- end of catergories -->





<!-- ***************************************************footer******************************************************* -->
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
      <!-- end of footer-col-3 -->

      <div class="footer-col-3">
        <h3>Follow Us</h3>
        <ul>
          <li> <a href="#">Facebook</a> </li>
          <li> <a href="#">Whatsapp</a> </li>
          <li> <a href="#">Instagram</a> </li>
        </ul>
      </div>
      <!-- end of footer-col-3 -->

    </div>
    <!-- end of row -->

    <hr>
    <p class="copyright"> &copy; Copyright 2021 | Geex Solutions <br> Images are used for illustration
    purpose only</p>
  </div>
  <!-- end of container -->

</div>
<!-- end of footer -->

  </body>
</html>
