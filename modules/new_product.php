<?php
// Show product in home page
require_once $_SERVER['DOCUMENT_ROOT'].'/configs/config.php';
require_once ROOT.'/controllers/c_new_product.php';

$isLoad = (isset($_POST['isLoad'])) ? $_POST['isLoad'] : '';

$c_product = new C_New_Product();
$c_product->showProduct();


