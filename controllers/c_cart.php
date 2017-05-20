<?php
if(!isset($_SESSION)) {
    session_start();
}
include_once ROOT."/models/m_product.php";

class C_Cart {
    public function showCart($carts) {
        //model
        $m_cart = new M_Product();
        $product_items = array();
        $product_items = $m_cart->getDetailProduct($carts);

        //view
        require ROOT.'/views/v_cart.php';
    }
}


