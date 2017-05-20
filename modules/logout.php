<?php
session_start();
include_once '../configs/config.php';
include_once ROOT.'/controllers/c_user.php';
session_destroy();
header("Location: ../index.php");

