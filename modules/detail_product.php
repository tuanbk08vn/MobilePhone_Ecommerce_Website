<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/configs/config.php';
require_once ROOT.'/controllers/c_detail_product.php';

$product_id = (isset($_GET['product_id'])) ? $_GET['product_id'] : '';

// add product into array
if(!isset($product_ids)) {
    $product_ids = array();
}
if(!isset($_SESSION['list_product'])) {
    $_SESSION['list_product'] = array();
}

if(isset($product_id)) {
    array_push($product_ids, $product_id);
    array_push($_SESSION['list_product'], $product_id);
}

$c_product = new C_Detail_Product();
$c_product->showDetailProduct($product_id);



