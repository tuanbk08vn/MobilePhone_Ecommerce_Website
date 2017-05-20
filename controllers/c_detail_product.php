<?php
if(!isset($_SESSION)) {
    session_start();
}

include ROOT.'/models/m_product.php';

class C_Detail_Product {

    public function showDetailProduct($product_id) {
        //model
        $products = new M_Product();
        $detail_product = $products->getDetailProduct($product_id);
        $product_image = $products->getImage($product_id);
        $brand = $products->getBrandFromId($product_id);
        $similar_product = $products->getSimilarProduct($brand);

        //view
        require ROOT.'/views/v_detail_product.php';
    }
}