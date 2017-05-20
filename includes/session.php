<?php
//This file is used for setting Session variable through JS
session_start();
$_SESSION['custom_brand'] = (isset($_POST['custom_brand'])) ? $_POST['custom_brand'] : '';
$detail_product_id = (isset($_SESSION['detail_product_id'])) ? $_SESSION['detail_product_id'] : '';
$_SESSION['order_quantity'] = (isset($_POST['order-quantity'])) ? $_POST['order-quantity'] : '' ;

//Items in Cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if(isset($_POST['cart_id']))
    array_push($_SESSION['cart'], $_POST['cart_id']);

//Quantity of items in Cart
if (!isset($_SESSION['cart_qty'])) {
    $_SESSION['cart_qty'] = array();
}
if(isset($_POST['cart_qty']))
    $_SESSION['cart_qty'][$_POST['id'][0]]  = $_POST['cart_qty'];