<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once ROOT."/libraries/connect.php";

class M_Orders extends Connection {
    private $order_id;
    private $username;
    private $name;
    private $email;
    private $phone_number;
    private $address;
    private $user_type;
    private $note;
    private $product_id;
    private $product_name;
    private $product_quantity;
    private $product_price;
    private $product_cost;
    private $isConn;

    public function getOrder($order_id) {
        $sql = "SHOW * FROM orders WHERE order_id = '".$order_id."' OR order_id = ".$this->order_id ;
        $this->isConn = new Connection();
        $result = mysqli_query($this->isConn->db_connect(), $sql);
        return $result;
    }
    public function setOrder($user_id,$order_name,$order_phone,$order_address,$order_note) {
        //insert to Order Table
        $sql = "INSERT INTO orders (user_id,name,phone,address,note) VALUES ('".$user_id."','".$order_name."','".$order_phone."','".$order_address."','".$order_note."')";
        $this->isConn = new Connection();
        $result = mysqli_query($this->isConn->db_connect(), $sql);
        $this->order_id = $this->isConn->getLastInsertID();
        return $result;
    }
    public function setOrderProduct($order_id, $list_product_id = array())  {
        //insert to Order_product table
        foreach($list_product_id as $product_id) {
            $sql = "INSERT INTO orders_product (orders_id,product_id) VALUES ('" . $order_id . "','" . $product_id . "')";
            $this->isConn = new Connection();
            $result = mysqli_query($this->isConn->db_connect(), $sql);
        }
        return true;
    }

    public function getOrderID(){
        return $this->order_id;
    }

    public function setDetailOrder($order_id, $product_id) {
        //insert to Order-Product Table
        $sql = "INSERT INTO orders_product (orders_id,product_id) VALUES ('".$order_id."','".$product_id."')";
        $result = mysqli_query($this->isConn->db_connect(), $sql);
        return true;
    }

}
