<?php
  session_start();

  //insert data into table when user creates new account
  include('db.php');
  //is connected

  //PHP can only reference names and not IDs
  //Check if submit button has been clicked
  if(isset($_POST['submit'])) {
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $user = $_POST['uid'];
    $pass = $_POST['pwd'];
    $email = $_POST['email'];
    $terms = $_POST['terms'];

    //create sessions to temporarily store user input
    $_SESSION['temp_first'] = $first;
    $_SESSION['temp_last'] = $last;
    $_SESSION['temp_user'] = $user;
    $_SESSION['temp_pass'] = $pass;
    $_SESSION['temp_email'] = $email;

    //error handlers
    //check for empty fields
    //validation in case JS disabled
    if(empty($first) || empty($last) || empty($user) || empty($pass) || empty($email) || empty($terms)) {
      header("Location: ../registration_form.php?signup=empty");
      $_SESSION['user_error'] = "Please fill out all the fields.";
      exit();
    } else {
      //check if input is valid
      if(!preg_match("/^([a-zA-Z]'*-*.* ?){1,20}$/", $first) || !preg_match("/^([a-zA-Z]'*-*.* ?){2,20}$/", $last) || !preg_match("/^[A-Za-z0-9_-]{4,16}$/", $user) || !preg_match("/^(?=.*(\d|[^\w]))(?=.*\w)([^\s]){8,20}$/", $pass)) {
        header("Location: ../registration_form.php?signup=invalid");
        $_SESSION['user_error'] = "Please double-check what you typed into your fields.";
        exit();
      } else {
        //filter_var checks for a specific string
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: ../registration_form.php?signup=emailinvalid");
          $_SESSION['user_error'] = "Please enter a valid email.";
          exit();
        } else {
          //check if email is taken
          $sql = "SELECT * FROM bb_users WHERE email = '$email'";
          $result = mysqli_query($dbc, $sql);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0) {
            header("Location: ../registration_form.php?signup=emailtaken");
            $_SESSION['user_error'] = "Please choose an email that has not been taken.";
            exit();
          } else {
            //Hashing the password
            $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

            //Insert user into db
            $sql = "INSERT INTO bb_users(customer_id, type, first_name, last_name, username, password, email) VALUES('$email', 'client', $first', '$last', '$user', '$hashedPwd', '$email')";
            mysqli_query($dbc, $sql);
            header("Location: ../login.php");
            exit();
          }
        }
      }  //end of email checks
    }
  } else {
        //if user enters form url into browser, redirect
        header("Location: ../registration_form.php");
        exit();
  }
?>