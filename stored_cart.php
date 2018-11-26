<?php
session_start();

if(!isset($_SESSION['cart_count'])) {
    $_SESSION['cart_count'] = 0;
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


//print "hello";

if (isset($_POST['itemID'])) {
    print $_POST['itemID'];  
    
    print "<br>";

    array_push($_SESSION['cart'], $_POST['itemID']);
    //var_dump($_SESSION['cart']);
    
    $_SESSION['cart_count'] = $_SESSION['cart_count'] + 1;

    print $_SESSION['cart_count'];
}

?>