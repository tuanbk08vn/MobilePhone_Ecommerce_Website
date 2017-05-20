<?php
//Module show promotion product
require_once $_SERVER['DOCUMENT_ROOT'].'/configs/config.php';
require_once ROOT.'/controllers/c_minor_new_product.php';

$isLoad = (isset($_POST['isLoad'])) ? $_POST['isLoad'] : '';

$c_minor_product = new C_Minor_New_Product();
$c_minor_product->showProduct();


