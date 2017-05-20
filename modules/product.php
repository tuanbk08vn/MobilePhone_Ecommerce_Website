<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once "../configs/config.php";
require_once ROOT.'/libraries/connect.php';
$custom_brand = (isset($_SESSION['custom_brand'])) ? $_SESSION['custom_brand'] : '';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Nước Hoa Chính Hãng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/lib.js"></script>
</head>
<body>
<div class="wrapper container-fluid no-padding">
    <!-- Navigatin Menu -->
    <div class="nav-menu row">
        <?php require ROOT."/includes/nav-menu.php"; ?>
    </div>
    <!-- Main slider -->
    <div class="advertisement row no-padding">
        <?php require ROOT."/includes/advertisement.php"; ?>
    </div>
    <!--product-->
    <div class="row no-padding">
        <div class="col-xs-12 product">
            <?php include ROOT . '/modules/custom_product.php'; ?>
        </div>
    </div>
    <!-- Reference -->
    <div class="reference row no-padding">
        <div class="col-xs-12" style="text-align: center"><h2>MANUFACTURERS</h2></div>
        <?php include ROOT.'/includes/reference.php' ?>
    </div>

     <!-- Footer -->
    <div class="footer row no-padding">
        <?php include ROOT.'/includes/footer.php' ?>
    </div>
</div>
</body>
</html>