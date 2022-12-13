<?php
require("validate_user.php");

//connecting the database
require("db_connection.php");

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

    <title>Delete Products</title>

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
              <a class="nav-link" href="dashboard.php"> <i class="fas fa-tachometer"></i> Dashboard</a>
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

      <!-- start of div-8 right side -->
      <div class="col-lg-8 col-md-8">

        <?php

          //searching for record existence based on the entered product_ID
          $product_id = $_REQUEST['product_id'];

          //building the dynamic SQL command
          $sql = "select * from product where product_id=$product_id";

          //executing the SQL command
          $rs = $mysqli->query($sql);

          if(mysqli_num_rows($rs) > 0){

            //fetching the records
            $row = mysqli_fetch_assoc($rs);

         ?>


        <h1 class="display-4">Delete a Product</h1>
        <form class="form" action="delete-product-3.php" method="post" enctype="multipart/form-data">

          <div class="form-row align-item-left">
             <div class="form-group col-lg-6 col-md-6">
                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                <label class="label mx-1" for="name">Product Title</label>
                <div class="input-group mx-1 mb-2 ">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-tshirt"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control "
                   id="product_name" name="product_name" placeholder="Dark blue Cotton Shalwar"
                   value="<?php echo $row['product_name']; ?>">

              </div>
            </div><!-- end of form group size 6-->


          </div><!--row form ends here -->

          <div class="form-row align-item-left">
             <div class="form-group col-lg-12 col-md-12">

                <label class="label mx-1" for="name">Description (Max characters 500)</label>
                <div class="input-group mx-1 mb-2 ">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-align-justify"></i>
                    </div>
                  </div>
                  <textarea class="form-control" name="description" id="description" rows="4" cols="80"><?php echo $row['description'];?></textarea>
              </div>
            </div><!-- end of form group size 6-->
          </div><!--row form ends here -->


          <div class="form-row align-item-left">
             <div class="form-group col-lg-6 col-md-6">

                <label class="label mx-1" for="name">Price</label>
                <div class="input-group mx-1 mb-2 ">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-tag"></i>
                    </div>
                  </div>
                  <input type="number" class="form-control" name="price" id="price"
                  value="<?php echo $row['price']; ?>" placeholder="Rs.2000">

              </div>
            </div><!-- end of form group size 6-->

            <div class="form-group col-lg-6 col-md-6">

               <label class="label mx-1" for="name">Picture</label>
               <div class="input-group mx-1 mb-2 ">
                 <div class="input-group-prepend">
                   <div class="input-group-text">
                     <i class="fas fa-image"></i>
                   </div>
                 </div>
                 <input type="file" class="form-control" name="picture" id="picture" value="">
                 <img src="images/thumb/<?php echo $row['picture'];?>" alt="">

             </div>
           </div><!-- end of form group size 6-->

          </div><!--row form ends here -->

          <div class="form-row align-item-left">
             <div class="form-group col-lg-6 col-md-6">

                <label class="label mx-1" for="name"></label>
                <div class="input-group mx-1 mb-2 ">
                  <div class="input-group-prepend">

                  </div>
                  <input type="submit" class="form-control btn btn-success" name="submit" id="submit" value="DELETE">
                  <input type="reset" class="form-control btn btn-danger" name="cancel" id="reset" value="CANCEL">

              </div>
            </div><!-- end of form group size 6-->

          </div><!--row form ends here -->

          <?php

        }
        else{
          ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h2>No Records Matched!</h2>
            <strong>Sorry</strong> No matching records were found. Please Try Again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <br />
            <a href="delete-product-1.php" class="btn btn-danger">Try Again</a>
          </div>
          <?php
        }

           ?>

        </form><!-- end of form-->

      </div><!-- end of div-8 right size -->

    </div>
    <!-- end of row-->

  </div>
  <!-- end of container -->

  <!-- footer -->
  <div class="footer">
    <div class="small-container">
      <div class="row">
        <div class="footer-col-3">
          <h3>Design Mart</h3>
          <p>Grab the best traditional wears from us and walk with <br> confidence and elegence
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
