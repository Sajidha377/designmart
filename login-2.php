<?php
  //start the session
  session_start();
  //connect to database server
  require("db_connection.php");

  //lets capture values to variables
  $user_id     = $_REQUEST['user_id'];
  $access_code = $_REQUEST['access_code'];

  //lets build the dynamic sql command
  $sql = "select * from user where user_id='$user_id'";

  //execute the sql command
  $rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    //echo "user id found in db";
    //since the user id found lets check the passwords too
    $row = mysqli_fetch_assoc($rs);


    if($row['access_code'] == crypt($access_code,$row['access_code'])){
      $_SESSION['user_id'] = $user_id;
      $_SESSION['user_group'] = $row['user_group'];
      header("location:dashboard.php");
    }
    else{

      header("location:invalid-login.php");
    }

  }
  else{

    header("location:invalid-login.php");
  }

 ?>
