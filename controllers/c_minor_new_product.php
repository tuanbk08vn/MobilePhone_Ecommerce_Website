<?php
include_once ROOT.'/models/m_product.php';
class C_Minor_New_Product {
    private $isLoad ;
    private $last_displayed_id;

    function __construct() {
        $this->isLoad = (isset($_POST['isLoad'])) ? $_POST['isLoad'] : '';
        $this->last_displayed_id = (isset($_POST['last_displayed_id'])) ? $_POST['last_displayed_id'] : '';
    }
    public function showProduct() {
        //model
        $products = new M_Product();
        $last_product_id = $products->getSumProductId();
        if($this->isLoad == null) {
            $new_product_item = $products->getLimitProduct($last_product_id);
        }
        else {
            $new_product_item = $products->getLimitProduct( $this->last_displayed_id);
        }

        //view
        include ROOT.'/views/v_minor_new_product.php';
    }
}