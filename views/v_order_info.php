<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once "../configs/config.php";
require_once ROOT.'/libraries/connect.php';
$order_name = $_SESSION['order_name'];
$order_phone = $_SESSION['order_phone'];
$order_address = $_SESSION['order_address'];
$order_quantity = $_SESSION['order_quantity'];
$order_note = $_SESSION['order_note'];
date_default_timezone_get('Asia/Ho_Chi_Minh');
$order_time = date('d/m/Y H:i');
$order_id = $_SESSION['order_id'];
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
    <div class="row order-thanks">
        <h2>Order Successfully</h2>
        <h3>Thanks for Ordering Our Product!</h3>
    </div>
    <div class="row order-info-1">
        <div class="col-xs-6">
            <fieldset>
                <legend>User Information</legend>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><?php echo $order_name ?></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><?php echo $order_phone ?></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><?php echo $order_address ?></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <div class="col-xs-6">
            <fieldset>
                <legend>Order Information</legend>
                <table>
                    <tr>
                        <td>Order ID:</td>
                        <td>&#35;<?php echo $order_id ?></td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td><?php echo $order_time ?></td>
                    <tr>
                        <td>Note:</td>
                        <td><?php echo $order_note ?></td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>
    <h3 style="text-align: center;color:#DAA520;font-family:'Lato Black'">DETAIL</h3>
    <div class="row order-info-2">
        <table>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Sum</th>
            </tr>
            <tbody>
            <?php foreach($order_products as $order_product) {
                $row = mysqli_fetch_object($order_product) ; ?>
                <tr>
                    <td><?php echo $row->product_name ?></td>
                    <td><?php echo $_SESSION['cart_qty'][$row->product_id]; ?></td>
                    <td><?php echo $row->price ?>&dollar;</td>
<!--                    <td>--><?php //echo $row->product_id ?><!--</td>-->
                    <td class="sub-total"><?php echo ($row->price*$_SESSION['cart_qty'][$row->product_id].'$') ;?></td>
                </tr>
            <?php } ?>
                <tr class="total">
                    <td colspan="3" style="margin-left:80%">
                        <p class="sum" style="color:maroon">SHIPPING: </p>
                    </td>
                    <td style="color:#778899">Free</td>
                </tr>
                <tr class="total" style="">
                    <td colspan="3">
                        <p class="sum">SUM: </p>
                    </td>
                    <td id="order-info-result"><script>var total = 0;
                    $('.sub-total').each(function() {
                        total += parseFloat($(this).text());
                        //alert(total);
                            });
                    $('#order-info-result').text(total + '$');
                        </script>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="summary row">
        <p>WE WILL INFORM YOU AS SOON AS POSSIBLE!</p>
    </div>
    <!-- Footer -->
    <div class="footer row no-padding">
        <?php include ROOT.'/includes/footer.php' ?>
    </div>
</div>
</body>
</html>