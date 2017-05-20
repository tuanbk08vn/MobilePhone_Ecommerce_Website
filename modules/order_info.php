<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/configs/config.php';
require_once ROOT.'/controllers/c_order_info.php';

$_SESSION['order_name'] = (isset($_POST['order-name'])) ? $_POST['order-name'] : '';
$_SESSION['order_phone'] = (isset($_POST['order-phone'])) ? $_POST['order-phone'] : '';
$_SESSION['order_address'] = (isset($_POST['order-address'])) ? $_POST['order-address'] : '';
$_SESSION['order_note'] = (isset($_POST['order-note'])) ? $_POST['order-note'] : '';
$_SESSION['order_quantity'] = (isset($_POST['order_quantity'])) ? $_POST['order_quantity'] : '';

$c_order_info = new C_Order_Info();
$c_order_info->showOrderInfo();


