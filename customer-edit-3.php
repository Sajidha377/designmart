<?php
  require("validate_customer.php");
  //connect to the database server
  require("db_connection.php");

  //copying the form field values into variables
  $cust_id          = $_REQUEST['cust_id'];
  $cust_name        = $_REQUEST['cust_name'];
  $cust_access_code = $_REQUEST['cust_access_code'];

  //lets build the dynamic sql commands
  $sql = "update customer set ";
  $sql .= "cust_id='$cust_id',";
  $sql .= "cust_name='$cust_name',";
  $sql .= "cust_access_code='$cust_access_code' where cust_id='$cust_id'";

  //execute the sql command
  $x = $mysqli->query($sql);

  if($x > 0){
    // echo "Update Successful";

    header("location:customer-edit-4.php?status=pass");
  }
  else{
    // echo "Update failed";
    header("location:customer-edit-4.php?status=fail");
  }

?>
