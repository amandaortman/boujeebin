<?php
  session_start();

  if(isset($_POST['submit'])) {
    include 'db.php';
    $user = $_POST['uid'];
    $pass = $_POST['pwd'];
    $_SESSION['temp_user'] = $user;
    $_SESSION['temp_user_mobile'] = $user;

    //Error handlers
    //Check if inputs are empty
    if(empty($user) || empty($pass)) {
      header("Location: ../login.php?login=empty");
      $_SESSION['user_error'] = "Please fill out all the fields.";
      $_SESSION['user_error_mobile'] = "Please fill out all the fields.";
      exit();
    } else {
      //Prevent accepting invalid code
      if(!preg_match("/^[A-Za-z0-9_-]{4,16}$/", $user) || !preg_match("/^(?=.*(\d|[^\w]))(?=.*\w)([^\s]){8,20}$/", $pass)) {
        header("Location: ../login.php?signup=invalid");
        $_SESSION['user_error'] = "Please enter a valid username and password.";
        $_SESSION['user_error_mobile'] = "Please enter a valid username and password.";
        exit();
      }
      $sql = "SELECT * FROM bb_users WHERE username='$user'";
      $result = mysqli_query($dbc, $sql);
      $resultCheck = mysqli_num_rows($result);  //Checks # of rows matching search parameters
      if($resultCheck < 1) {
        header("Location: ../login.php?login=error");  //nonspecific message prevents user from guessing user/pass combos
        $_SESSION['user_error'] = "Please enter a valid username and password.";
        $_SESSION['user_error_mobile'] = "Please enter a valid username and password.";
        exit();
      } else {
        //Insert results into array
        if($row=mysqli_fetch_assoc($result)) {
          //Dehash
          $hashedPwdCheck = PASSWORD_VERIFY($pass, $row['password']);
          if($hashedPwdCheck==false) {
            header("Location: ../login.php?login=error");
            $_SESSION['user_error'] = "Please enter a valid username and password.";
            $_SESSION['user_error_mobile'] = "Please enter a valid username and password.";
            exit();
          } elseif ($hashedPwdCheck==true) {
            //else if is done to be extra sure user only logs in if password matches
            //$_SESSION['logged_in'] = $row['id'];
            $_SESSION['user_id'] = $row['email'];  //switch to ID once ID situation is figured out
            $_SESSION['type'] = $row['type'];
            $_SESSION['first'] = $row['first_name'];
            $_SESSION['last'] = $row['last_name'];
            $_SESSION['user'] = $row['username'];
            $_SESSION['pass'] = $pass;
            $_SESSION['email'] = $row['email'];
            //redirect to profile
            if(isset($_SESSION['user_id'])) {
              if($_SESSION['type']=='admin' || $_SESSION['type']=='super'){
                  header('Location: ../admin.php');
                  exit();
              } else {
                  header('Location: ../client.php');
                  exit();
              }
            }
          }
        }
      }
    }
  } else {
    header("Location: ../login.php");
    exit();
  }
?>