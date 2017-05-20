<?php
    //session_start();
require_once '../configs/config.php';
require_once ROOT.'/models/m_user.php';
class C_User {
    private $username;
    private $password;
    private $name;
    private $birthday;
    private $email;
    private $phone_number;
    private $address;
    private $user_type;
    private $user;
    public function __construct() {
//        $this->username = $_POST['username'];
//        $this->password = $_POST['password'];
//        $this->name = $_POST['name'];
//        $this->birthday = $_POST['birthday'];
//        $this->email = $_POST['email'];
//        $this->phone_number = $_POST['phone-number'];
//        $this->address = $_POST['address'];
//        $this->user_type = $_POST['user-type'];
    }

    public function userRegister() {
		//Model
		$newUser = new M_User();
		if($newUser->validateRegister())
            $newUser->addUser();
		//View
		//include ROOT.'index.php';
	}
	public function userLogin($loginUsername, $loginPassword) {
        //Model
        $this->user = new M_User();
        $isUser = $this->user->checkLogin($loginUsername, $loginPassword);
        if (isset($isUser)) {
            $_SESSION['username'] = $this->username;
            $_SESSION['password'] = $this->username;
            $_SESSION['name'] = $this->username;
            $_SESSION['birthday'] = $this->username;
            $_SESSION['email'] = $this->username;
            $_SESSION['phone-number'] = $this->username;
            $_SESSION['address'] = $this->username;
            $_SESSION['user-type'] = $this->username;
            $_SESSION['conn'] = $this->user->conn;
            //View
            return $isUser;
        }
    }
    public function userLogout() {
        unset($_SESSION);
        //View
        header ('Location: ../index.php');
        die();
    }
}