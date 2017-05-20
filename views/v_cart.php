<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once "../configs/config.php";
require_once ROOT.'/libraries/connect.php';

$_SESSION['list_product'] = (isset($product_items)) ? $product_items : '';
$total = 0;
if(!isset($_SESSION['array_quantity'])) {
    $_SESSION['array_quantity'][] = [];
};
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
    <div class="row"><h2 style="text-align: center;color:orangered">ORDER</h2></div>
    <?php foreach($product_items as $product_item) {
        $row = mysqli_fetch_object($product_item);
        $total = $total + $row->price;
        if(!isset($_SESSION['cart_qty'])) {
            $_SESSION['cart_qty'] = [];
        }
    ?>

    <!--TO DO-->
    <div class="detail-product row no-left-right" style="border-top: 1px dashed grey;border-bottom: 1px dashed grey">
        <div class="product-image col-xs-4">
            <div class="row">
                <div class="main-image col-xs-12" style="height:200px;text-align: center;" >
                    <img src="../<?php echo $row->product_image ?>" alt="<?php echo $row->product_name ?>" style="height:100%;width: 200px">
                </div>
                <div class="sub-image col-xs-12">

                </div>
            </div>
        </div>
        <div class="product-info col-xs-3" style="height:200px; padding-top:4%;font-size:1.1em;font-weight:bold">
            <div class="row">
                <div class="product-name col-xs-12" style="color:darkblue"><span style="color:darkgrey">Product: </span><?php echo $row->product_name ?></div>
                <div class="product-model col-xs-12" style="color:darkblue"><span style="color:darkgrey">Model: </span><?php echo $row->model ?></div>
                <div class="product-brand col-xs-12" style="color:darkblue"><span style="color:darkgrey">Brand: </span><?php echo $row->brand ?></div>
                <div class="product-quantity col-xs-12"></div>
            </div>
        </div>
        <div class="col-xs-5" style="height:200px">
            <div class="row" style="height: 20px;text-align: center;font-size:1.1em;font-weight:bold;color:darkgrey">
                <div class="col-xs-3">Quantity</div>
                <div class="col-xs-3">Price</div>
                <div class="col-xs-5">SubTotal</div>
                <div class="delete-product col-xs-1"></div>
            </div>
            <div class="row" style="height: 180px;text-align: center;color:orangered; font-weight:bold">
                <div class="product_quantity col-xs-3" style="line-height: 180px">
                    <select style="width:50%;text-align: center" class="product_quantity_input" id="order-quantity-<?php echo $row->product_id ?>">
                        <option value="1" selected>1</option>
                        <?php $_SESSION['cart_qty'][$row->product_id] = 1; ?>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                        <option value="4" >4</option>
                        <option value="5" >5</option>
                        <option value="6" >6</option>
                        <option value="7" >7</option>
                    </select>
                </div>
                <div class="product_price_input col-xs-3" id="order-price-<?php echo $row->price ?>" style="line-height: 180px"><?php echo $row->price ?> &dollar;</div>
                <div class="product_sum_output col-xs-5" id="order-sum-<?php echo $row->product_id ?>" style="line-height: 180px"><?php echo $row->price ?> &dollar;</div>
                <div class="delete-product col-xs-1" id="order-delete-<?php echo $row->product_id?>" style="line-height: 180px"><span class="glyphicon glyphicon-remove"></span></div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="btnBuy row">
            <div class="col-xs-12">
                <div class="col-xs-9" style="text-align: right;font-size:1.4em"><label>Total</label></div>
                <div class="total col-xs-3" style="text-align:center;color:red;font-weight:bold;font-size:1.4em"><?php echo $total ?> &dollar;</div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-9"></div>
                <div class="col-xs-3">
                    <button type="submit" class="btn btn-danger col-xs-3 btnBuy" data-toggle="modal" data-target="#orderModal"><span
                                class="glyphicon glyphicon-ok" style="display:inline;"></span> OK
                    </button>
                    <?php include '../modules/order.php' ?>
                </div>
            </div>
    </div>

    <!-- Footer -->
    <div class="footer row no-padding">
        <?php include ROOT.'/includes/footer.php' ?>
    </div>
</div>
</body>
</html>
