<?php
if(!isset($_SESSION)){
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/configs/config.php';
require_once ROOT.'/controllers/c_custom_product.php';

// This variable is used for show more event
$isLoad = (isset($_POST['isLoad'])) ? $_POST['isLoad'] : '';
$custom_brand = (isset($_SESSION['custom_brand'])) ? $_SESSION['custom_brand'] : '';

$c_product = new C_Custom_Product();
$c_product->showProduct($custom_brand);


