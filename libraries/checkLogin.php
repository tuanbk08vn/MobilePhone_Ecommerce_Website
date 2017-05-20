<?php
session_start();
require_once '../configs/config.php';

if(isset($_POST['login_username']) && isset($_POST['login_password']) ) {
    $_SESSION['username'] = $_POST['login_username'];
    $_SESSION['password'] = $_POST['login_password'];
}
include_once ROOT.'/controllers/c_user.php';

$newUser = new C_User() ;
echo $newUser->userLogin($_SESSION['username'], $_SESSION['password']);


