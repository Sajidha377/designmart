<?php

  session_start(); 

  //validating the user
  if($_SESSION['cust_id'] == ''){
    //redirect to invalid login
    header("location:customer-invalid-login.php");
  }

 ?>
