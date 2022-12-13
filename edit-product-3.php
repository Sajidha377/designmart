<?php
  require("validate_user.php");
  //connect to the database server
  require("db_connection.php");

 //connecting the code library
 require("code_lib.inc.php");

  //copying the form field values into variables
  $product_id   = $_REQUEST['product_id'];
  $product_name = $_REQUEST['product_name'];
  $description  = $_REQUEST['description'];
  $price        = $_REQUEST['price']; 

  //lets build the dynamic sql commands
  $sql = "update product set ";
  $sql .= "product_name='$product_name',";
  $sql .= "description='$description',";
  $sql .= "price=$price where product_id=$product_id";

  //execute the sql command
  $x = $mysqli->query($sql);

  if($x > 0){
    // echo "Update Successful";

    //uploading of files
    if($_FILES['picture']['error']==0 && $_FILES['picture']['type']=="image/jpeg"){

      $old_picture_name = getProductPicture($product_id);

      $filename = $_FILES['picture']['tmp_name'];
      $destination;

      if($old_picture_name == "default.jpg"){

        //generating a new file name for old default names
        $destination = $product_id . "_" . rand().rand().rand().".jpg";

      }
      else{

        $destination = $old_picture_name;

      }

      move_uploaded_file($filename,"images/large/".$destination);
      copy("images/large/".$destination, "images/thumb/".$destination);
      resizeThumbPicture("images/large/",$destination);

      //SQL command
      $sql2 = "update product set picture='$destination' where product_id=$product_id";

      //executing th SQL commands
      $mysqli->query($sql2);

    }


    header("location:edit-product-4.php?status=pass");
  }
  else{
    // echo "Update failed";
    header("location:edit-product-4.php?status=fail");
  }

?>
