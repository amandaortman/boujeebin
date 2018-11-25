<?php
session_start();
include('db.php');

$id = $_SESSION['temp_prod_id'];
$sql = "DELETE FROM products WHERE PK='$id'";

if(mysqli_query($dbc, $sql)) {
  header("Location: ../admin.php?delete=success");
  //$_SESSION['user_success'] = "Products listing successfully updated.";
  unset($id);
  exit();
}else {
  header("Location: ../admin.php?delete=failure");
  //$_SESSION['user_error'] = "Unable to update products listing.";
  unset($id);
  exit();
}

?>