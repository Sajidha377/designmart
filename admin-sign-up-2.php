<?php
require("validate_user.php");

//connecting the database server
require("db_connection.php");

//to get the values from add-product-1.php page form and display
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

//storing the form field values into variables
  $user_id = $_REQUEST['user_id'];
  $user_name = $_REQUEST['user_name'];
  $gender = $_REQUEST['gender'];
  $user_group = $_REQUEST['user_group'];
  $access_code = $_REQUEST['access_code'];

  $encrypted_pwd = crypt($access_code, 'x091');

//building a dynamic SQL command
$sql  = "insert into user (user_id,user_name,gender,user_group,access_code) values(";
$sql .= "'$user_id',";
$sql .= "'$user_name',";
$sql .= "'$gender',";
$sql .= "'$user_group',";
$sql .= "'$encrypted_pwd')";

//test display the SQL commands
//echo $sql;

//executing the SQL command
$x = $mysqli->query($sql);

if($x>0){
  //echo "record successfully added";
  header("location:admin-sign-up-3.php?status=pass");
}
else{
  //echo "adding record failed";
  header("location:admin-sign-up-3.php?status=fail");
}

 ?>
