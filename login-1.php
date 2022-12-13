<!DOCTYPE html>
<html lang="en" dir="ltr">
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

    <style media="screen">

    *{
      font-family:poppins, sans-serif;
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    h1, h3{
      color:#132e5b;
      text-align:center;
    }

    .small-container{
      max-width:1300px;
      margin:auto;
      padding-left:25px;
      padding-right:25px;
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
    </style>

    <title>Login</title>
  </head>
  <body>

    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-md-12">

          <img src="images/home-banner1.png" class="col-12 mb-3" alt="">

        </div><!-- end of div 12 -->
      </div><!-- end of row-->

      <div class="row">

          <div class="col-lg-5 col-md-5 offset-lg-4 offset-md-4">
            <h1 class="display-4">Login</h1>
            <h3>Authorized Access Only</h3>
            <hr>

            <form class="" action="login-2.php" method="post">

              <div class="form-row align-item-left">

                 <div class="form-group col-lg-12 col-md-12">

                    <label class="label mx-1" for="name">Username</label>
                    <div class="input-group mx-1 mb-2 ">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <input type="email" class="form-control "
                       id="user_id" name="user_id" placeholder="use your email address">
                  </div>
                </div><!-- end of form group size 6-->



                <div class="form-group col-lg-12 col-md-12">

                   <label class="label mx-1" for="name">Password</label>
                   <div class="input-group mx-1 mb-2 ">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-lock"></i>
                       </div>
                     </div>
                     <input type="password" class="form-control "
                      id="access_code" name="access_code" placeholder="use a strong password">
                 </div>
               </div><!-- end of form group size 6-->


               <div class="form-group col-lg-12 col-md-12" style="padding-left:65px;">

                    <input type="submit" class="col-5 btn btn-primary "
                     value="LOGIN">

                     <input type="reset" class="col-5 btn btn-warning "
                      value="CANCEL">
                </div>
              </div><!-- end of form group size 6-->

              </div><!--FORM ROW END HERE  -->

            </form>

          </div>

      </div><!-- end of row-->

    </div><!-- end of container-->

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
