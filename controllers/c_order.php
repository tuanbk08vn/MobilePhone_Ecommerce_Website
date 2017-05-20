<?php
if(!isset($_SESSION)) {
    session_start();
}
include_once ROOT."/models/m_product.php";
class C_Order {

    public function showOrder($product_ids) {
        //model
        $order = new M_Product();
        $order_infos = array();
        $order_infos = $order->getDetailProduct($product_ids);

        //view
        include ROOT.'/views/v_order.php';
    }
}


