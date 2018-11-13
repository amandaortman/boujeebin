<?php
  session_start();

  //insert data into table when user creates new account
  include_once 'includes/db.php';

    //PHP can only reference names and not IDs
    //Check if submit button has been clicked
    if(isset($_POST['submit'])) {
      $first = $_POST['fname'];
      $last = $_POST['lname'];
      $user = $_POST['uid'];
      $pass = $_POST['pwd'];
      $email = $_POST['email'];

      //create sessions to temporarily store user input
      $_SESSION['temp_first'] = $first;
      $_SESSION['temp_last'] = $last;
      $_SESSION['temp_user'] = $user;
      $_SESSION['temp_pass'] = $pass;
      $_SESSION['temp_email'] = $email;

      //error handlers
      //check for empty fields
      if(empty($first) || empty($last) || empty($user) || empty($pass) || empty($email)) {
        header("Location: ../registration_form.php?signup=empty");
        $_SESSION['user_error'] = "Please fill out all the fields.";
        exit();
      }else {
          //check if input is valid
          if(!preg_match("/^([a-zA-Z]'* ?){1,20}$/", $first) || !preg_match("/^([a-zA-Z]'* ?){1,20}$/", $last) || !preg_match("/^\S{4,20}$/", $user)
            || !preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d])([^\s]){8,16}$/", $pass)) {
            header("Location: ../registration_form?signup=invalid");
            $_SESSION['user_error'] = "Please double-check what you typed into your fields.";
            exit();
          } else {
            //filter_var checks for a specific string
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              header("Location: ../registration_form?signup=emailinvalid");
              $_SESSION['user_error'] = "Please enter a valid email.";
              exit();
            } else {
              //check if username is taken
              $sql = "SELECT * FROM bb_users WHERE username='$user'";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if($resultCheck > 0) {
                header("Location: ../registration_form.php?signup=usertaken");
                $_SESSION['user_error'] = "Please choose a username that has not been taken.";
                exit();
              } else {
                //Hashing the password
                $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
                //Insert user into db
                $sql = "INSERT INTO bb_users(first_name, last_name, username, password, email) VALUES ('$first', '$last', '$user', '$hashedPwd', '$email')";
                mysqli_query($conn, $sql);
                header("Location: ../login.php");
                exit();
              }
            }
          }
        }
      } else {
            //if user enters form url into browser, redirect
            header("Location: ../registration_form.php");  //need to test on students.cah... later
            exit();
      }
