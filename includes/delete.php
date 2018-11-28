<?php
session_start();
//If user is not logged in as admin or super, do not allow access
if($_SESSION['type']=='admin' || $_SESSION['type']=='super'){
	include('db.php');

	//Check if submit button has been clicked
  	if(isset($_POST['delete'])) {
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
	} else {
		header("Location: delete_product.php?delete=failure");
	}
}else {
	header("Location: ../login.php?add=complete_failure");
}

?>