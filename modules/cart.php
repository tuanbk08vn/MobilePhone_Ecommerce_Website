<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/configs/config.php';
require_once ROOT.'/controllers/c_cart.php';

$carts = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : '';
$c_cart = new C_Cart();
$c_cart->showCart($carts);



