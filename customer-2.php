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

    <title>Customers</title>

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
        color:#8a8a8a;
        font-size:14px;
        padding:60px 0 20px;
      }

      .footer h3{
        color:#b79452;
        margin-bottom:10px;
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

  <!-- main container -->
  <div class="container">
    <!-- first row -->
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
    </div><!-- end of row 1-->


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
          <a class="nav-link" href="login-1.php"> <i class="fas fa-sign-out-alt"></i> Log Out</a>
        </li>
      </ul>
      </div>
      </nav>
      </div><!-- end of div-4 left side -->

      <div class="col-lg-8 col-md-8">

        <h1 class="display-4">Customers</h1>

        <form class="form" action="customer-2.php"
         method="post" enctype="multipart/form-data">

         <div class="form-row align-item-left">

           <div class="form-group col-lg-4 col-md-4">

              <label class="label mx-1" for="name">Search By </label>
              <div class="input-group mx-1 mb-2 ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-chevron-circle-down"></i>
                  </div>
                </div>

                <?php

                 $searchBy = $_REQUEST['searchBy'];
                 $keywords = $_REQUEST['keywords'];

                 ?>

                <select class="form-control" name="searchBy" title="searchBy">
                  <option value="user_id" <?php echo ($searchBy == 'user_id')?'selected=selected':''; ?>>User ID</option>
                  <option value="user_name"    <?php echo ($searchBy == 'user_name')?'selected=selected':''; ?>>User Name</option>
                  <option value="user_group"           <?php echo ($searchBy == 'user_group')?'selected=selected':''; ?>>User Group</option>
                </select>

            </div>
          </div>
          <!-- end of 1st form group size 6-->

          <div class="form-group col-lg-4 col-md-4">

           <label class="label mx-1" for="keywords">Keywords </label>
           <div class="input-group mx-1 mb-2 ">
             <div class="input-group-prepend">
               <div class="input-group-text">
                 <i class="fas fa-search"></i>
               </div>
             </div>
             <input type="text" class="form-control "
              id="keywords" name="keywords" value="<?php echo $keywords ?>">

         </div>
         </div>
         <!-- end of 2nd form group size 6-->

         <div class="form-group col-lg-4 col-md-4">


           <label for="" class="mb-4"></label>
           <div class="input-group mx-1 mb-2 ">

            <input type="submit" class="btn btn-success col-6 " id="submit"
             name="submit" value="SEARCH" >

            <input type="reset" class="btn btn-dark col-6"  id="reset"
             name="reset" value="CLEAR">
           </div>
           <!-- end of div input-group -->
        </div>
        <!-- end of 3rd form group -->

         </div>
         <!-- end of form row -->

       </form>
       <!-- end of form -->

       <div class="row">

         <div class="col-lg-12 col-md-12">
             <h1 class="text-primary text-center">Search Results</h1>
         </div>

       </div>
       <!-- end of internal row-->

       <div class="row">
         <div class="col-lg-12 col-md-12">
           <table class="table table-striped">
             <tr>
               <th>User ID</th>
               <th>User Name</th>
               <th>User Group</th>
             </tr>

             <?php

               //receiving the SearchBy and Keywords from customer.php page
               $searchBy = $_REQUEST['searchBy'];
               $keywords = $_REQUEST['keywords'];

               $sql = "";

               switch($searchBy){
                 case 'user_id':
                   $sql = "select * from user where user_id='$keywords' or user_id like '%$keywords%'";
                   break;
                 case 'user_name':
                   $sql = "select * from user where user_name='$keywords' or user_name like '%$keywords%'";
                   break;
                 case 'user_group':
                   $sql = "select * from user where user_group='$keywords' or user_group like '%$keywords%'";
                   break;
               }

               $rs = $mysqli->query($sql);

               if(mysqli_num_rows($rs)>0){
                 while($row = mysqli_fetch_assoc($rs)){
                   ?>

                   <tr>
                     <td> <?php echo $row['user_id']; ?> </td>
                     <td> <?php echo $row['user_name']; ?> </td>
                     <td> <?php echo $row['user_group']; ?> </td>
                   </tr>

                   <?php
                 }
               }
               else{
                 echo "<tr>";
                 echo "<td colspan='5' class='text-center'><h2 class='text-danger'> Sorry No Records were found! </h2></td>";
                 echo "</tr>";
               }

              ?>

           </table>
         </div>

       </div>
       <!-- end of internal row 2 -->

      </div>
      <!-- end of div-8 right side-->


    </div>
    <!-- end of row 2 -->

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
            <li> <a href="about-us.html">About Us</a> </li>
            <li> <a href="contact.html">Contact Us</a> </li>
            <li> <a href="#">Privacy policy</a> </li>
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
