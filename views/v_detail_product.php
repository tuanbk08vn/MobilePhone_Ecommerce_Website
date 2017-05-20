<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once "../configs/config.php";
require_once ROOT.'/libraries/connect.php';
$row = mysqli_fetch_object($detail_product);

$_SESSION['detail_product_id'] = $row->product_id;
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

    <!--TO DO-->
    <div class="product-title row no-left-right" style="border: 1px solid steelblue">
        <div class="col-xs-4" style="color:#228B22"><h2><?php echo $row->product_name ?></h2></div>
        <div class="ratingStar col-xs-2"></div>
        <div class="ratingTimes col-xs-6"></div>
    </div>
    <div class="detail-product row no-left-right" style="border: 1px solid steelblue">
        <div class="product-image col-xs-5">
            <div class="row">
                <div class="main-image col-xs-12" style="height:400px">
                    <img src="../<?php echo $row->product_image ?>" alt="<?php echo $row->product_name ?>" style="width:100%;height:100%">
                </div>
                <div class="sub-image col-xs-12" style="text-align:center;height:70px">
                    <div class="row" style="height:50px;width:60%;margin:25px auto">
                        <?php for($i = 0; $i <= 2;$i++) {
                            $row1 = mysqli_fetch_object($product_image);
                           ?>
                        <div class="col-xs-4" ><a class="sub-image-item" style="border: 1px dashed lightsteelblue;margin:2px"><img src="../<?php echo $row1->path ?>" style="height:50px"></a></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-info col-xs-4" style="font-family: Lato;font-size:1.2em;color:slategrey">
            <div class="row">
                <div class="product-price col-xs-12" style="color:red;font-weight:bold;font-size:1.7em"><h3><?php echo $row->price ?> &dollar;</h3></div>
                <div class="product-name col-xs-12"><span>Product: </span><?php echo $row->product_name ?></div>
                <div class="product-model col-xs-12"><span>Model: </span><?php echo $row->model ?></div>
                <div class="product-brand col-xs-12"><span>Brand: </span><?php echo $row->brand ?></div>
                <div class="product-type col-xs-12"><span>Type: </span><?php echo $row->type ?></div>
                <div class="product-origin col-xs-12"><span>Origin: </span><?php echo $row->origin ?></div>
                <div class="product-gender col-xs-12"><span>Gender: </span><?php echo $row->gender ?></div>
                <div class="product-delivery col-xs-12"><span>Delivery: </span>Delivery Home</div>
                <div class="product-description col-xs-12" style="display: table;">
                    <span style="display: inline-block;width: 120px;">Description: </span>
                    <span style="display: table-cell; width: 100% !important;"><?php echo $row->description ?></span>
                </div>
                <div class="col-xs-6 form-group">
                    <label for="sel1">Quantity:</label>
                    <select class="form-control" id="order-quantity">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="btnCart col-xs-12">
                    <button class="btn btn-info"><span
                                class="glyphicon glyphicon-shopping-cart btnCart" style="display:inline;"></span>Add to Cart</button>
                </div>
                <div class="btnBuy col-xs-12">
                    <button class="btn btn-danger" data-toggle="modal" data-target="#orderModal"><span
                                class="glyphicon glyphicon-globe" style="display:inline;"></span>Buy
                    </button>
                    <?php include ROOT."/modules/order.php" ?>
                </div>
            </div>
        </div>
        <div class="similar-product col-xs-3">
            <ul>
                <?php
                    for ($i = 0; $i <= 6; $i++) {
                        $row = mysqli_fetch_object($similar_product);
                    echo "<li style='margin-top:15px;margin-left:20px;height:30px'><a href='../modules/detail_product.php?product_id=".$row->product_id."'>".$row->product_name."</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="comment row form-group no-left-right" style="border: 1px solid steelblue">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" id="comment" placeholder="Write something..."></textarea>
    </div>
    <!-- Footer -->
    <div class="footer row no-padding">
        <?php include ROOT.'/includes/footer.php' ?>
    </div>
    </div>
</body>
</html>