<?php
    session_start();

    $_SESSION['cart'] = array();
    $_SESSION['cart_count'] = "0";
    $_SESSION['total_price'] = "0";
    $_SESSION['sort'] = "";


    unset($_SESSION['cart']);
        unset($_SESSION['cart_end_total']);
        
        unset($_SESSION['total_cart_price']);
    unset($_SESSION['cart_count']);

   header("Location: ../cart.php");

?>