<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once "./configs/config.php";
require_once ROOT.'/libraries/connect.php';
 ?>

<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Nước Hoa Chính Hãng</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<script src="js/lib.js"></script>
    <link rel="icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper container-fluid no-padding">
		<!-- Navigatin Menu -->
		<div class="nav-menu row no-left-right">
			<?php require ROOT."/includes/nav-menu.php"; ?>
		</div>
		
		<!-- Main slider -->
		<div class="slider row no-left-right">
    			<?php require ROOT."/includes/slider.php"; ?>
		</div>

		<!-- Major product list-->
		<div class="major-product-list row no-left-right">
			<nav aria-label="..." class="col-xs-12">
				<ul class="pager" style="font-weight:bold">
					<li><a href="#" id="new-product">New</a></li>
					<li><a href="#" id="featured-product">Featured</a></li>
				</ul>
			</nav>
            <div class="col-xs-12 product">
                    <?php require ROOT . '/modules/new_product.php'; ?>
            </div>
		</div>

		<!-- News -->
		<div class="news row no-left-right">
            <nav aria-label="..." class="col-xs-12">
                <ul class="pager">
                    <li style="font-size:1.3em;text-align: center; font-weight:bold"><a href="#">News</a></li>
                </ul>
            </nav>
			<?php include 'includes/news.php' ?>
		</div>

		<!-- Minor product list -->
		<div class="minor-product-list row no-left-right">
			<nav aria-label="..." class="col-xs-12">
				<ul class="pager" style="font-weight:bold">
				  	<li><a href="#">Previous</a></li>
				  	<li><a href="#">Next</a></li>
				</ul>
			</nav>
			<div class="col-xs-12">
				<?php include ROOT.'/modules/minor_new_product.php' ?>
			</div>
		</div>

		<!-- Remark customer-->
		<div class="remark row no-left-right">
			<nav aria-label="..." class="col-xs-12">
				<h2 style="text-align: center">What are people saying?</h2>
				<ul class="pager" style="font-weight:bold">
				  	<li><a href="#">Previous</a></li>
				  	<li><a href="#">Next</a></li>
				</ul>
			</nav>
			<div class="col-xs-12">
				<?php include'includes/remark.php' ?>
			</div>
		</div>

		<!-- Reference -->
		<div class="reference row no-left-right">
			<div class="col-xs-12" style="text-align: center"><h2>MANUFACTURERS</h2></div>
			<?php include'includes/reference.php' ?>
		</div>

		<!--Google map -->
        <div class="map row no-left-right" style="text-align:center">
            <?php include ROOT.'/includes/map.php'; ?>
        </div>

		<!-- Footer -->
		<div class="footer row no-left-right">
			<?php include 'includes/footer.php' ?>
		</div>
	</div>
</body>
</html>