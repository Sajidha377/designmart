<?php
  //start the session
  session_start();
  //connect to database server
  require("db_connection.php");

  //lets capture values to variables
  $cust_id          = $_REQUEST['cust_id'];
  $cust_access_code = $_REQUEST['cust_access_code'];

  //lets build the dynamic sql command
  $sql = "select * from customer where cust_id='$cust_id'";

  //execute the sql command
  $rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    //echo "user id found in db";
    //since the user id found lets check the passwords too
    $row = mysqli_fetch_assoc($rs);


    if($row['cust_access_code'] == crypt($cust_access_code,$row['cust_access_code'])){
      $_SESSION['cust_id'] = $cust_id;
      $_SESSION['cust_user_group'] = $row['cust_user_group'];
      header("location:home-2.php");
    }
    else{

      header("location:customer-invalid-login.php");
    }

  }
  else{

    header("location:customer-invalid-login.php");
  }

 ?>
