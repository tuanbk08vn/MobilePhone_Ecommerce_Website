<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once '../configs/config.php';
require_once ROOT.'/libraries/connect.php';

class M_User extends Connection {
    private $username;
    private $password;
    private $name;
    private $birthday;
    private $email;
    private $phone_number;
    private $address;
    private $user_type;
    private $isConn;

    public function __construct() {
        $this->username = (isset($_SESSION['username'])) ? $_SESSION['username'] : '';
        $this->password = (isset($_SESSION['password'])) ? $_SESSION['password'] : '';
        $this->name = (isset($_SESSION['name'])) ? $_SESSION['name'] : '';
        $this->birthday = (isset($_SESSION['birthday'])) ? $_SESSION['birthday'] : '';
        $this->email = (isset($_SESSION['email'])) ? $_SESSION['email'] : '';
        $this->phone_number = (isset($_SESSION['phone-number'])) ? $_SESSION['phone-number'] : '';
        $this->address = (isset($_SESSION['address'])) ? $_SESSION['address'] : '';
        $this->user_type = (isset($_SESSION['user-type'])) ? $_SESSION['user-type'] : '';
    }

    public function getUser() {
        $sql = "SELECT * FROM user";
        $this->isConn = new Connection();
        $this->isConn->db_connect();
        mysqli_query ($this->isConn, $sql);
        return $this->loadAllRows();
    }

    public function getAccountInformation($username) {
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $this->isConn = new Connection();
        $this->isConn->db_connect();
        $result = mysqli_query ($this->isConn, $sql);
        if($result) {
                return mysqli_fetch_assoc($result);
        }
        else return null;
    }

    public function addUser() {
        $this->isConn = new Connection();
        $this->isConn->db_connect();
        if ($this->isConn->connect_error) {
            die ('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
        }
        $sql = "INSERT INTO user VALUES  ('$this->username','$this->password','$this->name','$this->birthday','$this->email','$this->phone_number','$this->address','$this->user_type')";
        $this->isConn->doQuery($sql);
        session_destroy();
    }

    public function validateRegister() {
        if (strlen($this->username) >= 8 && strlen($this->password) >=6 && $this->name != null && $this->birthday != null && $this->email != null) {
            return true;
        }
        else return false;
    }

    public function checkLogin($loginUsername, $loginPassword) {
        while ($row = mysqli_fetch_object($this->getUser()))
           if ($row['username'] == $loginUsername && $row['password'] == $loginPassword)
                return $row;
                //$this->isConn =
        return false;
    }

    public function test_input ($data) {
        $data = trim($data) ;
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

