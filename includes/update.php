<?php
session_start();
include('db.php');

  if(isset($_POST['update'])) {
      $id = $_SESSION['temp_prod_id'];
      $prodName = $_POST['prodName'];
      $prodBrand = $_POST['prodBrand'];
      $prodStock = $_POST['prodStock'];
      $prodSale = $_POST['prodSale'];
      $prodPrice = $_POST['prodPrice'];

    //Update product in db
    $sql = "UPDATE products
    SET prodName = '$prodName', prodBrand = '$prodBrand', prodStock = '$prodStock', prodSale = '$prodSale', prodPrice = '$prodPrice'
    WHERE PK = '$id'";
    if(mysqli_query($dbc, $sql)) {

      header("Location: ../admin.php?update=success");
      //$_SESSION['user_success'] = "Profile successfully updated.";
      unset($id);
      exit();
    }else {
      header("Location: ../admin.php?update=failure");
      //$_SESSION['user_error'] = "Unable to update profile.";
      unset($id);
      exit();
    }
  }
?>