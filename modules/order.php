<?php
if(!isset($_SESSION)) {
    session_start();
}

require_once $_SERVER['DOCUMENT_ROOT'].'/configs/config.php';
require_once ROOT.'/controllers/c_order.php';

if(!isset($product_ids)) {
    $product_ids = [];
}

$product_ids = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : '';

$c_order = new C_Order();
$c_order->showOrder($product_ids);


