<?php

//connecting the database server
require("db_connection.php");

//to get the values from add-product-1.php page form and display
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

//storing the form field values into variables
  $cust_id = $_REQUEST['cust_id'];
  $cust_name = $_REQUEST['cust_name'];
  $cust_gender = $_REQUEST['cust_gender'];
  $cust_user_group = $_REQUEST['cust_user_group'];
  $cust_access_code = $_REQUEST['cust_access_code'];

  $encrypted_pwd = crypt($cust_access_code, 'x091');

//building a dynamic SQL command
$sql  = "insert into customer (cust_id,cust_name,cust_gender,cust_user_group,cust_access_code) values(";
$sql .= "'$cust_id',";
$sql .= "'$cust_name',";
$sql .= "'$cust_gender',";
$sql .= "'$cust_user_group',";
$sql .= "'$encrypted_pwd')";

//test display the SQL commands
//echo $sql;

//executing the SQL command
$x = $mysqli->query($sql);

if($x>0){
  //echo "record successfully added";
  header("location:customer-sign-up-3.php?status=pass");
}
else{
  //echo "adding record failed";
  header("location:customer-sign-up-3.php?status=fail");
}

 ?>
