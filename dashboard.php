<?php
  require("validate_user.php");
  //connecting to the database server
  require("db_connection.php")
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Boostrap CSS style sheet -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- attach the JS files -->
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/fontawesome-all.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Dashboard</title>

    <style media="screen">

      *{
        font-family:poppins, sans-serif;
        margin:0;
        padding:0;
        box-sizing:border-box;
      }

      .container{
        max-width:1300px;
        margin:auto;
        padding-left:25px;
        padding-right:25px;
        background:#f5f5f5;
      }

      .small-container{
        max-width:1300px;
        margin:auto;
        padding-left:25px;
        padding-right:25px;
      }

      nav{
        max-width:300px;

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

      .topbar{
        align-items:center;
        justify-content:space-between;
      }

      nav a{
        color:#132e5b;
      }

      .dropdown-menu a:hover{
        background:#e2d4ba;
      }

      h1, h5{
        color:#132e5b;
      }

      .statistics{
        position:relative;
        width:100%;
        padding:20px;
        background:#fff;
        cursor:pointer;
      }

      .progress{
        position:relative;
        height:25px;
      }

      .small-container{
        max-width:1080px;
        margin:auto;
        padding-left:15px;
        padding-top:20px;
      }

      .col-4{
        flex-basis:25%;
        padding:10px;
        min-width:250px;
        margin-bottom:20px;
        transition:transform 0.5s;
        background:#fff;
      }

      .col-4:hover{
        box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
      }

      .col-7{
        flex-basis:65%;
        padding:20px;
        min-width:330px;
        margin-bottom:20px;
        transition:transform 0.5s;
        background:#fff;
      }

      .col-7 table{
        cursor:pointer;
      }

      .col-7 table td{
        font-size:14px;
        color:#132e5b;
      }

      .col-7 table th{
        color:#132e5b;
      }

      .col-2{
        flex-basis:25%;
        padding:20px;
        min-width:300px;
        margin-bottom:20px;
        transition:transform 0.5s;
        background:#fff;
      }

      .col-2 img{
        width:50px;
        border-radius:50%;
        cursor:pointer;
      }

      .col-2 h6{
        color:#132e5b;
        font-weight:600;
        font-size:15px;
        cursor:pointer;
      }

      .col-2 table td{
        padding:5px;
      }

      .row .divider{
        width:20px;
        }

      .row .numbers{
        position:relative;
        font-size:2em;
        font-weight:500;
      }

      .row .cardName{
        color:#999;
      }

      .row .iconBox{
        font-size:2.5em;
        color:#03a9f4;
      }

      .row .card{
        position:relative;
        border:none;
        padding:20px;
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

      @media only screen and (max-width:600px){
        .col-4, .col-3, .col-7 {
          flex-basis:100%;
        }


      }

    </style>
  </head>
  <body class="">

  <div class="container">
    <div class="row">
      <div class="topbar col-lg-12 col-md-12">

        <a class="navbar-brand" href="dashboard.php"> <img src="images/logo.png" width="125px" alt=""> </a>


        <div class="search">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

            <button class="btn my-2 my-sm-0" type="submit">Search</button>

          </form>
        </div>

        <hr>

      </div><!-- end of div 12 -->
    </div><!-- end of row-->

    <div class="row">

      <div class="col-lg-4 col-md-4">
        <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="navbar-brand" href="dashboard.php">Design Mart</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="dashboard.php"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="nav-item dropdown">

              <a class="nav-link active dropdown-toggle" href="products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-tshirt"></i> Products
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="products.php">Products</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="add-product-1.php">Add Products</a>
                <a class="dropdown-item" href="edit-product-1.php">Edit Products</a>
                <a class="dropdown-item" href="delete-product-1.php">Delete Products</a>
              </div>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="customer.php"> <i class="fas fa-users"></i> Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#"> <i class="fas fa-chart-pie"></i> Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-sign-up.php"> <i class="fas fa-user-plus"></i>Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"> <i class="fas fa-sign-out-alt"></i> Log Out</a>
        </li>
      </ul>
      </div>
      </nav>
      </div><!-- end of div-4 left side -->

      <div class="col-lg-8 col-md-8">

        <h1 class="display-4">Dashboard</h1>

        <div class="small-container">
          <div class="row">
            <div class="col-4">
              <div class="numbers">1,045</div>
              <h5 class="cardName">Daily views</h5>
              <div class="iconBox">
                <i class="fas fa-eye"></i>
              </div>
            </div>

            <div class="divider">

            </div>

            <div class="col-4">
              <div class="numbers">30</div>
              <h5 class="cardName">New Customers</h5>
              <div class="iconBox">
                <i class="fas fa-users"></i>
              </div>
            </div>

            <div class="divider">

            </div>

            <div class="col-4">
              <div class="numbers">50</div>
              <h5 class="cardName">Comments</h5>
              <div class="iconBox">
                <i class="fas fa-comments"></i>
              </div>
            </div>

          </div>
        </div>




        <div class="statistics">
            <h5 class="card-title">Customer view statistics</h5>

            <div class="card-body">
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 12%;" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">12%</div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 73%;" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100">73%</div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 57%;" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
              </div>
            </div>
        </div>


        <div class="small-container">
          <div class="row">
            <div class="col-7">
              <h5 class="card-title">New Products</h5>

              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Green cotton <br> saree </td>
                    <td>Rs.3000</td>
                    <td>Saree</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Peach cotton <br> shalwar material</td>
                    <td>Rs.1800</td>
                    <td>Shalwar</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Black cotton <br> kurti </td>
                    <td>Rs.2000</td>
                    <td>Kurti</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Yellow lehenga</td>
                    <td>Rs.5000</td>
                    <td>Lehenga</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Green silk saree</td>
                    <td>Rs.2000</td>
                    <td>Saree</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>White lehenga</td>
                    <td>Rs.10,000</td>
                    <td>Lehenga</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Yellow shalwar material</td>
                    <td>Rs.1900</td>
                    <td>Shalwar</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Leapoard print shawl</td>
                    <td>Rs.500</td>
                    <td>Shawl</td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>White and silver anarkali</td>
                    <td>Rs.12,000</td>
                    <td>Anarkali</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Pink kurti</td>
                    <td>Rs.3000</td>
                    <td>Kurti</td>
                  </tr>
                </tbody>
              </table>


            </div>

            <div class="divider">

            </div>
            <div class="col-2">
              <h5 class="card-title">Recent Customers</h5>
              <table>
                <tr>
                  <td><img src="images/user.png" alt=""></td>
                  <td><h6>Anurag, <br> Australia </h6></td>
                </tr>
                <tr>
                  <td><img src="images/user.png" alt=""></td>
                  <td><h6>Suresh, <br> India </h6> </td>
                </tr>
                <tr>
                  <td><img src="images/user.png" alt=""></td>
                  <td><h6>Sasha, <br> UAE </h6></td>
                </tr>
                <tr>
                  <td><img src="images/user.png" alt=""></td>
                  <td><h6>Christina, <br> Sri Lanka <br>  </h6></td>
                </tr>
                <tr>
                  <td><img src="images/user.png" alt=""></td>
                  <td><h6>Anjali, <br> India </h6></td>
                </tr>
                <tr>
                  <td><img src="images/user.png" alt=""></td>
                  <td><h6>Binth Fathima, <br> Pakistan </h6></td>
                </tr>
              </table>




            </div>

          </div>
        </div>

      </div><!-- end of div-8 right size -->

    </div><!-- end of row-->

  </div>
  <!-- end of container -->

  <!-- footer -->
  <div class="footer">
    <div class="small-container">
      <div class="row">
        <div class="footer-col-3">
          <h3>Design Mart</h3>
          <p>Grab the best traditional wears from us and walk with confidence and elegence
            on every special occasions.</p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li> <a href="terms&condtions.html">Terms & Conditions</a> </li>
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
      purpose only </p>
    </div>
  </div>






  </body>
</html>
