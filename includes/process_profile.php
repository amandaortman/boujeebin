<?php
session_start();
include_once('db.php');


if(isset($_POST['submit'])){
	$user_id = $_SESSION['user_id'];
	$first = $_POST['shipping-first'];
	$last = $_POST['shipping-last'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$currentEmail = $_SESSION['email'];
	$st = $_POST['shipping-address'];
	$apt = $_POST['shipping-address-2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$country = $_POST['country'];

	//check for empty fields in user primary personal info
      if(empty($first) || empty($last) || empty($user) || empty($pass) || empty($email)) {
        header("Location: ../client.php?update=empty");
        exit();
      }else {
	    //check if input is valid
	    if(!preg_match("/^([a-zA-Z]'*-*.* ?){1,20}$/", $first) || !preg_match("/^([a-zA-Z]'*-*.* ?){2,20}$/", $last) || !preg_match("/^[A-Za-z0-9_-]{4,16}$/", $user) || !preg_match("/^(?=.*(\d|[^\w]))(?=.*\w)([^\s]){8,20}$/", $pass)) {
	        header("Location: ../client.php?update=invalid");
	        exit();
	    } else {
	        //filter_var checks for a specific string
	        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	          header("Location: ../client.php?update=emailinvalid");
	          exit();
	        } else {
	          //check if email is taken
	          $sql = "SELECT * FROM bb_users WHERE email='$email' LIMIT 1";
	          $result = mysqli_query($dbc, $sql);
	          $resultCheck = mysqli_num_rows($result);
	          $row = mysqli_fetch_array($result);
	          $emailCheck = $row['email'];

	          if( $emailCheck != $currentEmail && $resultCheck > 0 ) {
	            header("Location: ../client.php?update=emailtaken");
	            exit();
	        	} else {
		            //Hashing the password
		            $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

					$sql = "UPDATE bb_users
						SET first_name='$first', last_name='$last', username='$user', password='$hashedPwd', email='$email', address='$st', address2='$apt', city='$city', state='$state', country='$country', zip='$zip'
						WHERE customer_id='$user_id'";

					mysqli_query($dbc, $sql);

					if(mysqli_query($dbc, $sql)) {
	                  //overwrite session variables
	                  $_SESSION['first'] = $first;
	                  $_SESSION['last'] = $last;
	                  $_SESSION['user'] = $user;
	                  $_SESSION['pass'] = $pass;
	                  $_SESSION['email'] = $email;
	                  $_SESSION['st'] = $st;
					  $_SESSION['apt'] = $apt;
					  $_SESSION['city'] = $city;
					  $_SESSION['state'] = $state;
					  $_SESSION['country'] = $country;
					  $_SESSION['zip'] = $zip;

	                  header("Location: ../client.php?update=success");
	                  $_SESSION['user_success'] = "Profile successfully updated.";
	                  exit();
	                } else {
	                  header("Location: ../client.php?update=failure");
	                  $_SESSION['user_error'] = "Unable to update profile.";
	                  exit();
	                }
				}
			}
	  	}
	}
} else {
	header("Location: ../client.php");
}
?>