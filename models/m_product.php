<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once ROOT."/libraries/connect.php";
class M_Product extends Connection {
    private $product_id;
    private $product_name;
    private $brand;
    private $model;
    private $type;
    private $origin;
    private $year;
    private $gender;
    private $concentration;
    private $quantity_in_stock;
    private $product_image;
    private $isConn;

    public function getAllProduct() {
        $sql = "SELECT * FROM product";
        $this->isConn = new Connection();
        $result = mysqli_query($this->isConn->db_connect(), $sql);
       return $result;
    }

    public function getLimitProduct($last_displayed_id) {
        $sql = "SELECT * FROM product WHERE ".$last_displayed_id." >= product_id ORDER BY product_id DESC";
        $this->isConn = new Connection();
        $result = mysqli_query($this->isConn->db_connect(), $sql);
        return $result;
    }

    public function getCustomProduct($last_displayed_id, $custom_brand) {
        $sql = "SELECT * FROM product WHERE ".$last_displayed_id." >= product_id AND '".$custom_brand.
        "' = brand ORDER BY product_id DESC";
        $this->isConn = new Connection();
        $result = mysqli_query($this->isConn->db_connect(), $sql);
        return $result;
    }

//    public function getFeaturedProduct($feature) {
//        $sql = "SELECT * FROM product WHERE ".$feature." <= quantity_in_stock ORDER BY quantity_in_stock DESC";
//        $this->isConn = new Connection();
//        $result = mysqli_query($this->isConn->db_connect(), $sql);
//        return $result;
//    }
//
    public function getDetailProduct($product_id) {
        $result_array = [];
        if(is_array($product_id)) {
            foreach ($product_id as $product_id) {
                $sql = "SELECT * FROM product WHERE product_id = '" . $product_id . "'";
                $this->isConn = new Connection();
                $result_array[] = mysqli_query($this->isConn->db_connect(), $sql);
            }
            return $result_array;
        }
        else {
            $sql = "SELECT * FROM product WHERE product_id = '" . $product_id . "'";
            $this->isConn = new Connection();
            $result = mysqli_query($this->isConn->db_connect(), $sql);
            return $result;
        }
    }

    public function getImage($product_id) {
        $sql = "SELECT * FROM image WHERE image_id IN (SELECT image_id from product_image WHERE product_id = '".$product_id."')";
        $this->isConn = new Connection();
        $result = mysqli_query($this->isConn->db_connect(), $sql);
        return $result;
    }

    public function getDetailMultiProduct($product_ids)
    {
        //param must be array
        $this->isConn = new Connection();
        $result = [];
        foreach ($product_ids as $product_id) {
            foreach($product_id as $product_id) {
                $sql = "SELECT * FROM product WHERE product_id = '" . $product_id . "'";
                $result[] = mysqli_query($this->isConn->db_connect(), $sql);
            }
        }
        return $result; //return Array of Object
    }

    public function getSimilarProduct($brand) {
        $sql = "SELECT * FROM product WHERE brand = '".$brand."'";
        $this->isConn = new Connection();
        $result = mysqli_query($this->isConn->db_connect(), $sql);
        return $result;
    }

    public function getBrandFromId($product_id) {
        $sql = "SELECT brand FROM product WHERE product_id = '".$product_id."'";
        $this->isConn = new Connection();
        $result = mysqli_query($this->isConn->db_connect(), $sql);
        $row = mysqli_fetch_object($result);
        return $row->brand;
    }
    public function addProduct() {

    }

    public function modifyProduct() {

    }

    public function getSumProductId() {
        $this->isConn= new Connection();
        $sql = "SELECT COUNT(*) as num_rows FROM product";
        $data = mysqli_query ($this->isConn->db_connect(), $sql);
        $row = mysqli_fetch_assoc($data);
        $num_all_product = $row['num_rows'];
        return $num_all_product;
    }

    public function getSumCustomProduct($custom_brand) {
        $this->isConn= new Connection();
        $sql = "SELECT COUNT(*) as num_rows1 FROM product WHERE brand = '".$custom_brand."'";
        $data1 = mysqli_query ($this->isConn->db_connect(), $sql);
        $row = mysqli_fetch_assoc($data1);
        $num_all_product = $row['num_rows1'];
        return $num_all_product;
    }
    //		public function getDetailProduct($product_id) {
//            $sql = "SELECT * FROM product WHERE product_id = '".$product_id."'";
//            $this->isConn = new Connection();
//            $result = mysqli_query($this->isConn->db_connect(), $sql);
//            return $result;
//		}

//        public function getMultiDetailProduct($product_ids)
//        {
//            //param must be array
//            $this->isConn = new Connection();
//            $result = [];
//            foreach ($product_ids as $product_id) {
//                if (is_object($product_id)) {
//                    $array = (array)$product_id;
//                    $row = mysqli_fetch_array($array);
//                    $sql = "SELECT * FROM product WHERE product_id = '" . $row[0] . "'";
//                    $result[] = mysqli_query($this->isConn->db_connect(), $sql);
//
//                } else {
//                    $sql = "SELECT * FROM product WHERE product_id = '" . $product_id[0] . "'";
//                    $result[] = mysqli_query($this->isConn->db_connect(), $sql);
//                }
//            }
//            return $result; //return Array of Object
//        }
//    public function getMultiDetailProduct($product_ids)
//    {
//        //param must be array
//        $this->isConn = new Connection();
//        $result = [];
//        foreach ($product_ids as $product_id) {
//                $sql = "SELECT * FROM product WHERE product_id = '" . $product_id . "'";
//                $result[] = mysqli_query($this->isConn->db_connect(), $sql);
//        }
//        return $result; //return Array of Object
//    }
}
