<?php
session_start();
include('db.php');

  //PHP can only reference names and not IDs
  //Check if submit button has been clicked
  if(isset($_POST['add'])) {
  	$id = $_SESSION['id'];
  	$prodName = $_POST['prodName'];
  	$prodBrand = $_POST['prodBrand'];
  	$sku = $_SESSION['sku'];
  	$prodStock = $_POST['prodStock'];
  	$prodSale = $_POST['prodSale'];
  	$prodPrice = $_POST['prodPrice'];

    //create sessions to temporarily store user input
    /*$_SESSION['temp_prodName'] = $prodName;
    $_SESSION['temp_prodBrand'] = $prodBrand;
    $_SESSION['temp_prodStock'] = $prodStock;
    $_SESSION['temp_prodSale'] = $prodSale;
    $_SESSION['temp_prodPrice'] = $prodPrice;*/

    //Add product in db
    $sql = "INSERT INTO products (PK, prodName, prodBrand, prodSKU, prodStock, prodSale, prodPrice)
    VALUES('$id', '$prodName', '$prodBrand', '$sku', '$prodStock', '$prodSale', '$prodPrice')";

    if(mysqli_query($dbc, $sql)) {

      header("Location: ../admin.php?add=success");
      //$_SESSION['user_success'] = "Profile successfully updated.";
      unset($id);
      exit();
    }else {
      header("Location: ../admin.php?add=failure");
      //$_SESSION['user_error'] = "Unable to update profile.";
      unset($id);
      exit();
    }
  }
?>