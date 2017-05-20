<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once '../configs/config.php';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['birthday']) && isset($_POST['email'])) {
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['birthday'] = $_POST['birthday'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone-number'] = $_POST['phone-number'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['user-type'] = $_POST['user-type'];
}
include_once ROOT.'/controllers/c_user.php';

$newUser = new C_User() ;
$newUser->userRegister();

