<?php
if(!isset($_SESSION))
{
    session_start();
}

include_once ROOT.'/models/m_orders.php';
include_once ROOT.'/models/m_user.php';
include_once ROOT.'/models/m_product.php';

class C_Order_Info{
    public function showOrderInfo() {
        //model
        $order = new M_Orders();
        $checkUser = new M_User();
        $username = (isset($_SESSION['username'])) ? $_SESSION['username'] : '';
        $user_id = (isset($username)) ? $username : '';
        $order->setOrder($user_id, $_SESSION['order_name'], $_SESSION['order_phone'], $_SESSION['order_address'], $_SESSION['order_note']);
        $_SESSION['order_id'] = $order->getOrderID();
        $order->setOrderProduct($_SESSION['order_id'], $_SESSION['cart']);
        $m_order_product = new M_Product();
        $order_products = $m_order_product->getDetailProduct($_SESSION['cart']);
        //view

        require ROOT . '/views/v_order_info.php';
    }
}