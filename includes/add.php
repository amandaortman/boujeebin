<?php
session_start();
//If user is not logged in as admin or super, do not allow access
if($_SESSION['type']=='admin' || $_SESSION['type']=='super'){

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

    //Add product in db
    $sql = "INSERT INTO products (PK, prodName, prodBrand, prodSKU, prodStock, prodSale, prodPrice)
    VALUES('$id', '$prodName', '$prodBrand', '$sku', '$prodStock', '$prodSale', '$prodPrice')";

    if(mysqli_query($dbc, $sql)) {

      header("Location: ../admin.php?add=success");
      unset($id);
      unset($sku);
      exit();
    }else {
      header("Location: ../admin.php?add=failure");
      unset($id);
      unset($sku);
      exit();
    }
  } else {
    header("Location: add_product.php?add=failure");
  }
  
} else {
  header("Location: ../login.php?add=complete_failure");
}
?>