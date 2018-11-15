<?php
session_start();
/*
    print count($_SESSION['cart']);
    print "<br>";
    print $_SESSION['cart_count'];
    print "<br>";
    print "<br>";


    

    print_r(array_values($cartArray));

    foreach($cartArray as $key => $value) {
        echo $value;
        echo "<br>";
      }

      echo "<br>";
      echo "<br>";



*/

$cartArray = $_SESSION['cart'];
      print_r(array_count_values($cartArray));

      $cartnum = array_count_values($cartArray);

      echo "<br>";
      echo "<br>";


      foreach($cartnum as $key => $value) {
        echo "ID: " . $key . " ";
        echo "Count: " . $value;
        echo "<br>";
      }

?>