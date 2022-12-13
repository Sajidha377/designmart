<?php
require("validate_user.php");
//connect the database server
require("db_connection.php");

// connecting the code library
require("code_lib.inc.php");

//storing the form field values into variables
  $product_id   = $_REQUEST['product_id'];
  $product_name = $_REQUEST['product_name'];
  $description  = $_REQUEST['description'];
  $price        = $_REQUEST['price'];
  $old_picture_name = getProductPicture($product_id);

//building a dynamic SQL command to take a back up of the record and delete the record permenantly from product table
$sql  = "insert into product_archive (product_name,description,price) values(";
$sql .= "'$product_name',";
$sql .= "'$description',";
$sql .= "$price);" and $sql .= "delete from product where product_id=$product_id;" and
$sql .= "delete from product where datediff(date(now()),date(published_date)) >= '90'";

//execute the sql command
$x = $mysqli->multi_query($sql);

if($x > 0){
  // echo "Successfully deleted";

  if($old_picture_name != "default.jpg"){
    unlink("images/large/$old_picture_name");
    unlink("images/thumb/$old_picture_name");
  }

  header("location:delete-product-4.php?status=pass");
}
else{
  // echo "Deleting the record failed";
  header("location:delete-product-4.php?status=fail");
}

?>
