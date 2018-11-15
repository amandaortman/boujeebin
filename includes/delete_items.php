<?php
session_start();


if (isset($_SESSION['cart'])) {
    
    $itemToDelete = $_POST['itemID'];
    $cartArray = $_SESSION['cart'];

    //unset($_SESSION['cart'][$itemToDelete]);


    if (false !== $key = array_search($itemToDelete, $cartArray)) {
        unset($cartArray[$key]);
      }

      if (($key = array_search($itemToDelete, $cartArray)) !== false) {
        unset($cartArray[$key]); 
     }

}


?>