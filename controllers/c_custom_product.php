<?php
if(!isset($_SESSION)) {
    session_start();
}
include ROOT.'/models/m_product.php';

class C_Custom_Product {
    private $isLoad ;
    private $last_displayed_id1;
    private $custom_brand;

    function __construct() {
        $this->isLoad = (isset($_POST['isLoad'])) ? $_POST['isLoad'] : '';
        $this->last_displayed_id1 = (isset($_POST['last_displayed_id1'])) ? $_POST['last_displayed_id1'] : '';
        $this->custom_brand = (isset($_SESSION['custom_brand'])) ? $_SESSION['custom_brand'] : '';
    }
    public function showProduct($custom_brand) {
        //model
        $products = new M_Product();
        $sum_custom_product= $products->getSumCustomProduct($custom_brand);
        if($this->isLoad == null) {
            $this->last_displayed_id1 = $products->getSumProductId();
            $_SESSION["remain_sum_custom_product"] = (isset($sum_custom_product)) ? $sum_custom_product : '0';
            $new_product_item = $products->getCustomProduct($this->last_displayed_id1, $custom_brand);
        }
        else {
            $new_product_item = $products->getCustomProduct( $this->last_displayed_id1, $custom_brand);
        }

        //view
        require ROOT.'/views/v_custom_product.php';
    }
}